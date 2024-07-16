@extends('home')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="mb-4">قائمة الخدمات</h2>

        <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addMunicipalityModal">
            إضافة خدمة جديدة
        </button>

        <div class="table-responsive">
            <table id="servicesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $service)
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->status }}</td>
                            <td>
                                <a href="{{ route('service_edit', $service->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('service_destroy', $service->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من حذف هذه البلدية؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for adding a new municipality -->
<div class="modal fade" id="addMunicipalityModal" tabindex="-1" role="dialog" aria-labelledby="addMunicipalityModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMunicipalityModalLabel">إضافة خدمة جديدة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('service_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">الاسم:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="اسم الخدمة">
                    </div>
                    <button type="submit" class="btn btn-success">إضافة الخدمة</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#municipalitiesTable').DataTable();
        });
    </script>
@endsection
