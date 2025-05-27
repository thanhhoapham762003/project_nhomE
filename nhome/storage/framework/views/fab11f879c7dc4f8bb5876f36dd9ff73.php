
<?php $__env->startSection('content-index'); ?>
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        <?php $__currentLoopData = $data_latestproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="<?php echo e(asset('img/' . $data->latestproduct_image)); ?>" alt="" class="img-product">
                                <div class="product-hover">
                                    <a href="<?php echo e(route('cart.addJustOne',$data->id)); ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                 
                                    <a href="<?php echo e(route('latest.product',$data->id)); ?>" class="view-details-link"><i
                                            class="fa fa-link"></i> See details</a>
                                </div>
                            </div>
                            <h2><a href="<?php echo e(route('latest.product',$data->id)); ?>"><?php echo e($data->latestproduct_name); ?></a></h2>
                            <div class="product-carousel-price">
                                <?php echo e(number_format( $data->latestproduct_price,0, ',', '.')); ?> vnđ
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <a href="<?php echo e(route('logo.product', $data->id)); ?>">  <img src="<?php echo e(asset('img/' . $data->type_logo)); ?>"  style="width: 180px; height: 100px; margin-right: 10px;" alt=""></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->





<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    <?php $__currentLoopData = $topseller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-wid-product">
                        <a href="<?php echo e(route('topsellers.product',$data->id)); ?>"><img src="<?php echo e(asset('img/' . $data->topsale_image)); ?>" alt=""
                                class="product-thumb"></a>
                        <h2><a href="<?php echo e(route('topsellers.product',$data->id)); ?>"><?php echo e($data->topsale_name); ?></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <?php echo e(number_format( $data->topsale_price,0, ',', '.')); ?> vnđ
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    <?php $__currentLoopData = $data_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-wid-product">
                        <a href="<?php echo e(route('single.product',$data->id)); ?>"><img src="<?php echo e(asset('img/' . $data->product_image)); ?>" alt=""
                                class="product-thumb"></a>
                        <h2><a href="<?php echo e(route('single.product',$data->id)); ?>"><?php echo e($data->product_name); ?></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <?php echo e(number_format( $data->product_price,0, ',', '.')); ?> vnđ
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top New</h2>
                    <?php $__currentLoopData = $latestproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-wid-product">
                        <a href="<?php echo e(route('latest.product',$data->id)); ?>"><img
                                src="<?php echo e(asset('img/' . $data->latestproduct_image)); ?>" alt="" class="product-thumb"></a>
                        <h2><a href="<?php echo e(route('latest.product',$data->id)); ?>"><?php echo e($data->latestproduct_name); ?></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <?php echo e(number_format( $data->latestproduct_price,0, ',', '.')); ?> vnđ
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
</div> <!-- End product widget area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Back End 2\DoAn+Lab\nhome\resources\views/index.blade.php ENDPATH**/ ?>