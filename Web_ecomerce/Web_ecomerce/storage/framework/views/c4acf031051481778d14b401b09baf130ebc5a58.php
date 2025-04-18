<?php $__env->startSection('content'); ?>

<head>
    <style>
        .card {
            border-radius: 30px;
            border: 5px solid transparent;
            animation: borderAnimation 3s linear infinite;
            position: relative;
            background-color: #cf544b;
        }

        .card-header {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: white;
            position: relative;
        }

        @keyframes borderAnimation {
            0% { border-color: red; }
            50% { border-color: blue; }
            100% { border-color: green; }
        }
        .card-body label {
            font-size: 18px;
            color: white; 
        }
    </style>
</head>

<div class="card" style="margin:20px;">
    <div class="card-header">
        Tạo danh mục mới

    </div>
    <div class="card-body">
        <form action="<?php echo e(route('admin_category.AddNewcategory')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label>Tên Danh Mục</label><br>
            <input type="text" name="name" id="name" class="form-control" required><br>

            <label>type_id</label><br>
            <input type="text" name="type_id" id="type_id" class="form-control" required><br>

            <label>type_name</label><br>
            <input type="text" name="type_name" id="type_name" class="form-control" required><br>

            <label>type_logo</label><br>
            <input type="text" name="type_logo" id="type_logo" class="form-control" required><br>

            <label>type_idlogo</label><br>
            <input type="text" name="type_idlogo" id="type_idlogo" class="form-control" required><br>

            <input type="submit" value="Thêm Danh Mục" class="btn btn-success"><br>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_category.layout_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Thuong_mai_dien_tu\Web_ecomerce\Web_ecomerce\resources\views/admin_category/createCategory.blade.php ENDPATH**/ ?>