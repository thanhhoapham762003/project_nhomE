<!DOCTYPE html>
<html>

<head>
    <title>CRUD User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    /* Tùy chỉnh thanh điều hướng */
    .navbar {
        background-color: #a6e978;
        /* Màu nền */
        border-radius: 5px;
        padding: 10px;
        border: none;
        margin-bottom: 20px;
    }

    .navbar-brand {
        font-weight: bold;
        color: #212529;
        font-size: 1.5rem;
        /* Độ lớn chữ */
    }

    .navbar-nav .nav-item {
        margin-left: 20px;
    }

    .navbar-nav .nav-link {
        color: #212529;
        font-weight: bold;
    }

    .navbar-toggler-icon {
        color: #212529;
    }

    /*
    /* Form tìm kiếm */

    .d-flex {
        margin-left: auto;
        display: flex;
        align-items: center;
        margin-right: 10px;
        border: none;
        color: #e0868b;
        font-weight: bold;

    }

    .btn-outline-success {
        align-items: center;
        margin-right: 10px;
        font-weight: bold;
        margin-left: auto;
    }

    .form-control {
        border-radius: 10px;
        /* Bo góc */
    }

    */ .nav-link {
        color: #f13602;
    }

    .search-form input[type="search"] {
        width: 200px;
        margin-right: 10px;
        border-radius: 5px;
    }

    .bottom-button {
        position: fixed;
        /* Đảm bảo nút button không di chuyển khi cuộn trang */
        bottom: 20px;
        /* Điều chỉnh khoảng cách từ bottom của trình duyệt */
        right: 20px;
        /* Điều chỉnh khoảng cách từ right của trình duyệt */
        padding: 10px 20px;
        /* Padding của nút */
        background-color: #007bff;
        /* Màu nền của nút */
        color: #fff;
        /* Màu chữ của nút */
        border: none;
        /* Loại bỏ border */
        border-radius: 5px;
        /* Bo tròn góc nút */
        cursor: pointer;
        /* Con trỏ khi di chuột qua nút */
        z-index: 9999;
        /* Đảm bảo nút hiển thị trên các phần tử khác */
    }

    .bottom-button:hover {
        background-color: #0056b3;
        /* Màu nền khi di chuột qua */
    }


    /* Nút đăng xuất */
    .logout-btn {
        width: 200px;
        margin-right: 10px;
        background: #f13602;
        font-weight: bold;
        border-radius: 5px;
        right: 20px;
        position: absolute;
        /* Đảm bảo nút button không di chuyển khi cuộn trang */
        bottom: 20px;
        padding: 5px;
        border: none;
    }

    .logout-btn:hover {
        background-color: #0056b3;
        /* Màu nền khi di chuột qua */
    }
</style>

<body>

    <div class="container">

    <div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">

                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($role->users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>@foreach($user->roles as $role)
                                        <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                            {{ $role->name . '-' }}
                                        </a>
                                    @endforeach</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ url('/admin_user/' . $user->id . '/edit') }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            {!! ($User->links()) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>

    </div>

</body>

</html>

