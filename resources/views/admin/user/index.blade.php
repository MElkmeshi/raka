@extends('Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="mb-4">قائمة المستخدمين</h2>

        <!-- زر لفتح Modal لإضافة مستخدم جديد -->
        <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addUserModal">
            إضافة مستخدم جديد
        </button>

        <div class="table-responsive">
            <table id="usersTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>اسم المستخدم</th>
                        <th>البريد الإلكتروني</th>
                        <th>الجنس</th>
                        <th>نوع المستخدم</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->user_type }}</td>
                            <td>
                                <a href="{{ route('user_edit', $user->id) }}" class="btn btn-primary">تعديل</a>
                                <a href="{{ route('user_destroy', $user->id) }}" class="btn btn-danger">حذف</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for adding a new user -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">إضافة مستخدم جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for adding a new user -->
                <form action="{{ route('user_store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">الاسم:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="اسم المستخدم">
                    </div>
                    <div class="form-group">
                        <label for="username">اسم المستخدم:</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="اسم المستخدم">
                    </div>
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="البريد الإلكتروني">
                    </div>
                    <div class="form-group">
                        <label for="password">كلمة المرور:</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="كلمة المرور">
                    </div>
                    <div class="form-group">
                        <label for="phone">رقم الهاتف:</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="رقم الهاتف">
                    </div>
                    <div class="form-group">
                        <label for="gender">الجنس:</label>
                        <select name="gender" class="form-control" id="gender">
                            <option value="male">ذكر</option>
                            <option value="female">أنثى</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_type">نوع المستخدم:</label>
                        <select name="user_type" class="form-control" id="user_type">
                            <option value="admin">مسؤول</option>
                            <option value="user"> مدير منتجع</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">إضافة المستخدم</button>
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
    <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable();
        });
    </script>
@endsection
