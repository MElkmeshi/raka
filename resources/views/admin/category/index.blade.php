@extends('home')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="mb-4">قائمة الفئات</h2>

        <!-- زر لفتح Modal لإضافة فئة جديدة -->
        <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addCategoryModal">
            إضافة فئة جديدة
        </button>

        <div class="table-responsive">
            <table id="categoriesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الوصف</th>
                        <th>عدد الغرف</th>
                        <th>السعر</th>
                        <th>السعة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->rooms_count }}</td>
                            <td>{{ $category->price }}</td>
                            <td>{{ $category->capacity }}</td>
                            <td>
                                <a href="{{ route('category_edit', $category->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('category_destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من حذف هذه الفئة؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for adding a new category -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">إضافة فئة جديدة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for adding a new category -->
                <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">الاسم:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="اسم الفئة">
                    </div>
                    <div class="form-group">
                        <label for="description">الوصف:</label>
                        <textarea name="description" class="form-control" id="description" placeholder="وصف الفئة"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rooms_count">عدد الغرف:</label>
                        <input type="number" name="rooms_count" class="form-control" id="rooms_count" placeholder="عدد الغرف">
                    </div>
                    <div class="form-group">
                        <label for="bath_room_count">عدد الحمامات:</label>
                        <input type="number" name="bathroom_count" class="form-control" id="bathroom_count" placeholder="عدد الحمامات">
                    </div>
                    <div class="form-group">
                        <label for="price">السعر:</label>
                        <input type="number" step="0.01" name="price" class="form-control" id="price" placeholder="السعر">
                    </div>
                    <div class="form-group">
                        <label for="capacity">السعة:</label>
                        <input type="number" name="capacity" class="form-control" id="capacity" placeholder="السعة">
                    </div>
                    <div class="form-group">
                        <label for="resort_id">المنتجع:</label>
                        <select name="resort_id" class="form-control" id="resort_id">
                            @foreach ($resorts as $resort)
                                <option value="{{ $resort->id }}">{{ $resort->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="images">الصور:</label>
                        <input type="file" name="images[]" class="form-control-file" id="images" multiple>
                    </div>
                    <div class="form-group">
                        <label for="services">الخدمات:</label>
                        <select name="services[]" class="form-control" id="services" multiple>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">إضافة الفئة</button>
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
            $('#categoriesTable').DataTable();
        });
    </script>
@endsection
