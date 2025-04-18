<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($product->product_name); ?></h5>
                        <p class="card-text">Product Type: <?php echo e($product->product_type); ?></p>
                        <p class="card-text">Product Quantity: <?php echo e($product->product_quantity); ?></p>
                        <p class="card-text">Product Price: <?php echo e($product->product_price); ?></p>
                        <p class="card-text">Product Detail: <?php echo e($product->product_detail); ?></p>
                        <p class="card-text">Type Name: <?php echo e($product->type_name); ?></p>
                        <img src="<?php echo e(asset('img/'.$product->product_image)); ?>" alt="Product Image" width="200px" height="200px">
                    </div>
                </div>
                <a href="<?php echo e(route('admin_product.index')); ?>" class="btn btn-primary mt-3">Trở lại trang Admin</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_product.layout_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Thuong_mai_dien_tu\Web_ecomerce\Web_ecomerce\resources\views/admin_product/showProduct.blade.php ENDPATH**/ ?>