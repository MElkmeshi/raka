@extends('home')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="mb-4">قائمة الشاليهات</h2>

        <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addMunicipalityModal">
            إضافة شاليه جديدة
        </button>

        <div class="table-responsive">
            <table id="servicesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>رقم الشاليه</th>
                        <th>الحالة</th>
                        <th>الفئة </th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $chalet) 
                        <tr>
                            <td>{{ $chalet->number }}</td>
                            <td>{{ $chalet->status }}</td>
                            <td>{{ $chalet->category->name }}</td>
                            <td>
                                <a href="{{ route('chalets_edit', $chalet->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('chalets_destroy', $chalet->id) }}" method="POST" style="display: inline-block;">
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
                <h5 class="modal-title" id="addMunicipalityModalLabel">إضافة شاليه جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('chalets_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">رقم الشاليه:</label>
                        <input type="number" name="number" class="form-control" id="number" placeholder="رقم الشاليه ">
                    </div>
                    <div class="form-group">
                        <label for="name">حالة الشاليه:</label>
                        <select name="status" class="form-control" id="status">
                            <option value="active">نشط</option>
                            <option value="inactive ">غير نشط</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">فئة الشاليه:</label>
                        <select name="category_id" class="form-control" id="type">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    <button type="submit" class="btn btn-success">إضافة الشاليه </button>
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
