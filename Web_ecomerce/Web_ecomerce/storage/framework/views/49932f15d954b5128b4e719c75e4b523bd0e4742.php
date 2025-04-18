<?php $__env->startSection('content'); ?>
<head>
    <style>
       .table {
    background-color: #e99226; /* Màu nền của bảng */
    border-radius: 10%;
}

.table th,
.table td {
    border-radius: 10%;
    background-color: #a24949; /* Màu nền của các ô trong bảng */
    font-size: 13px;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f1f1f1; /* Màu nền xen kẽ cho các dòng trong bảng */
}

.table-hover tbody tr:hover {
    background-color: #e9ecef; /* Màu nền khi di chuột qua các dòng trong bảng */
}
.table th,
.table td,
.table a {
    color: #ffffff; /* Màu chữ cho các ô và tiêu đề trong bảng */
}
.table a:hover {
    color: #ffff; /* Màu chữ khi rê chuột qua nút */
}
    </style>
</head>
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">

                <?php if(Session::has('success')): ?>
                    <p class="text-success">
                        <?php echo e(Session::get('success')); ?>

                    </p>
                <?php else: ?>
                    <p class="text-danger">
                        <?php echo e(Session::get('failed')); ?>

                    </p>
                <?php endif; ?>
                <div class="card-body">
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin_user/create')); ?>" class="btn btn-success btn-sm" title="Add User">Add
                            User</a>

                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Thao Tác</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($user->id); ?></td>
                                            <td><img src="<?php echo e(asset('images/' . $user->avatar)); ?>" alt="" with="50px"
                                                    height="50px"></td>

                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->phone); ?></td>
                                            <td><?php echo e($user->address); ?></td>
                                            <td>
                                                <a href="<?php echo e(url('/admin_user/' . $user->id . '/edit')); ?>"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="<?php echo e(url('admin_user/' . $user->id)); ?>" accept-charset="UTF-8"
                                                    style="display:inline" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không ?')">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                            <?php echo ($User->links()); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_user.layout_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Back End 2\projectNhomC-camnhi_cuoiky_20240517_09h00\Web_ecomerce\resources\views/admin_user/index.blade.php ENDPATH**/ ?>