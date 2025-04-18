<?php $__env->startSection('content'); ?>
<div class="product-breadcroumb">
    <a href="index"></i>Home</a>
</div>
<h2 style="text-align: center;">Kết quả tìm kiếm</h2>
<h3>Tìm thấy <?php echo e(count($product_timkiem)); ?> sản phẩm</h3>
<div class="single-product-area">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $product_timkiem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <a href="<?php echo e(route('single.product',$data->id)); ?>"> <img src="<?php echo e(asset('img/' . $data->product_image)); ?>" alt=""></a>
                    </div>
                    <h2><a href="<?php echo e(route('single.product',$data->id)); ?>"><?php echo e($data->product_name); ?></a></h2>
                    <div class="product-carousel-price">
                        <?php echo e(number_format( $data->product_price,0, ',', '.')); ?> vnđ
                    </div>
                    <form action="<?php echo e(route('cart.add','add')); ?>" class="cart" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                        <button style="margin-left: 65px;width: 130px;padding: 10px;margin-top:10px;" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow">Add to cart</button>
                    </form>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div style="text-align: center;">
            <?php echo e($product_timkiem->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('category-timkiem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Thuong_mai_dien_tu\Web_ecomerce\Web_ecomerce\resources\views/search-product.blade.php ENDPATH**/ ?>