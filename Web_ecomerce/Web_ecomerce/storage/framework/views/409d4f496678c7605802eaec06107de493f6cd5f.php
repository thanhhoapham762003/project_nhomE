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
    font-size: 18px;
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
                <div class="card-body">
                    <a href="<?php echo e(route('admin_category.create')); ?>" class="btn btn-success btn-sm" title="Add danh muc">Add Danh Mục</a>

                    <form class="d-flex" method="GET" action="#">
                        <input class="form-control me-2" type="search" name="search" placeholder="Tìm kiếm"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                    </form>
                    <br /><br />


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>type_id</th>
                                    <th>type_name</th>
                                    <th>type_logo</th>
                                    <th>type_idlogo</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->id); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->type_id); ?></td>
                                        <td><?php echo e($category->type_name); ?></td>
                                        <td><img src="<?php echo e(asset('img/' . $category->type_logo)); ?>" alt="" width="100px" height="100px"></td>
                                        <td><?php echo e($category->type_idlogo); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin_category.edit', $category->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="<?php echo e(route('admin_category.destroy', $category->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                         <!-- ( $categories->links())  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin_category.layout_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Back End 2\projectNhomC-camnhi_cuoiky_20240517_09h00\Web_ecomerce\resources\views/admin_category/index.blade.php ENDPATH**/ ?>