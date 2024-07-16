@extends('home')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="mb-4">قائمة المنتجعات</h2>

        <!-- زر لفتح Modal لإضافة منتجع جديد -->
        <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addResortModal">
            إضافة منتجع جديد
        </button>

        <div class="table-responsive">
            <table id="resortsTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الصورة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $resort)
                        <tr>
                            <td>{{ $resort->name }}</td>
                            <td><img src="{{ asset('resorts/' . $resort->image) }}" alt="{{ $resort->name }}" class="img-thumbnail" style="width: 100px;"></td>
                            <td>
                                <a href="{{ route('resorts_edit', $resort->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('resorts_destroy', $resort->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من حذف هذا المنتجع؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for adding a new resort -->
<div class="modal fade" id="addResortModal" tabindex="-1" role="dialog" aria-labelledby="addResortModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addResortModalLabel">إضافة منتجع جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for adding a new resort -->
                <form action="{{ route('resorts_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">الاسم:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="اسم المنتجع">
                    </div>
                    <div class="form-group">
                        <label for="phone">الهاتف:</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="رقم الهاتف">
                    </div>
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="البريد الإلكتروني">
                    </div>
                    <div class="form-group">
                        <label for="website">الموقع الإلكتروني:</label>
                        <input type="text" name="website" class="form-control" id="website" placeholder="الموقع الإلكتروني (اختياري)">
                    </div>
                    <div class="form-group">
                        <label for="locations_link">رابط الموقع:</label>
                        <input type="text" name="locations_link" class="form-control" id="locations_link" placeholder="رابط الموقع (اختياري)">
                    </div>
                    <div class="form-group">
                        <label for="address">العنوان:</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="العنوان">
                    </div>
                    <div class="form-group">
                        <label for="description">الوصف:</label>
                        <textarea name="description" class="form-control" id="description" placeholder="الوصف"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">الصورة:</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                    <div class="form-group">
                        <label for="rating">التقييم:</label>
                        <input type="number" name="rating" class="form-control" id="rating" placeholder="التقييم" min="0" max="5" step="0.1">
                    </div>
                    <div class="form-group">
                        <label for="check_in_time">وقت الدخول:</label>
                        <input type="time" name="check_in_time" class="form-control" id="check_in_time">
                    </div>
                    <div class="form-group">
                        <label for="check_out_time">وقت الخروج:</label>
                        <input type="time" name="check_out_time" class="form-control" id="check_out_time">
                    </div>
                    <div class="form-group">
                        <label for="number_of_chalets">عدد الشاليهات:</label>
                        <input type="number" name="number_of_chalets" class="form-control" id="number_of_chalets" placeholder="عدد الشاليهات" min="0">
                    </div>
                    <div class="form-group">
                        <label for="user_id">تم إنشاؤها بواسطة:</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="municipality_id">البلدية:</label>
                        <select name="municipality_id" class="form-control" id="municipality_id">
                            @foreach ($municipalities as $municipality)
                                <option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">إضافة المنتجع</button>
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
            $('#resortsTable').DataTable();
        });
    </script>
@endsection
