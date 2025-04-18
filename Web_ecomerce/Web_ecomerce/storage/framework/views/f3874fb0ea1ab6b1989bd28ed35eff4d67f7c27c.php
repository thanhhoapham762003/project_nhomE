    <?php $__env->startSection('content'); ?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Product Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form role="timkiem"  action="<?php echo e(route('timkiem.product', 'searchproduct')); ?>" method="get">
                            <input type="text" placeholder="Search products..." name="key">
                            <button style="border-radius: 10px;" type="submit">Search</button>
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                    <h2 class="sidebar-title">Latest Products</h2>
                        <?php $__currentLoopData = $data_latestproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <div class="thubmnail-recent">
                            <a href="<?php echo e(route('latest.product',$data->id)); ?>"><img src="<?php echo e(asset('img/' . $data->latestproduct_image)); ?>" class="recent-thumb" alt=""></a>
                            <h2><a href="<?php echo e(route('latest.product',$data->id)); ?>"><?php echo e($data->latestproduct_name); ?></a></h2>
                            <div class="product-sidebar-price">
                            <?php echo e(number_format($data->latestproduct_price,0, ',', '.')); ?> vnđ
                            </div>                             
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <ul>
                            <li><a href="<?php echo e(route('single.product',$data->id)); ?>"><?php echo e($data->product_name); ?></a></li>
                        </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index">Home</a>
                            <a href="">Top New</a>
                            <a href="<?php echo e(route('latest.product',$latestproducts->id)); ?>"><?php echo e($latestproducts->latestproduct_name); ?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="<?php echo e(asset('img/' . $latestproducts->latestproduct_image)); ?>" alt="">
                                    </div>
                                    
                                    <!-- <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo e($latestproducts->latestproduct_name); ?></h2>
                                    <div class="product-inner-price">
                                    <?php echo e(number_format( $latestproducts->latestproduct_price,0, ',', '.')); ?> vnđ
                                    </div>    
                                    
                                    <form action="<?php echo e(route('cart.addlast','addlast')); ?>" class="cart" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($latestproducts->id); ?>">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="">Phone</a></p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                               <p>   <?php echo e($latestproducts->latestproduct_detail); ?></p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input style="border-radius: 10px;" type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                            
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo e(asset('img/' . $latestproducts->latestproduct_image)); ?>" alt="" class="img-product">
                                        <div class="product-hover">
                                            <a href="<?php echo e(route('cart.addlast','addlast')); ?>" class="add_to_cart_button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="<?php echo e(route('latest.product',$latestproducts->id)); ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="<?php echo e(route('latest.product',$latestproducts->id)); ?>"><?php echo e($latestproducts->latestproduct_name); ?></a></h2>

                                    <div class="product-carousel-price">
                                    <?php echo e(number_format($latestproducts->latestproduct_price,0, ',', '.')); ?> vnđ
                                    </div> 
                                </div>
                                                            
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Thuong_mai_dien_tu\Web_ecomerce\Web_ecomerce\resources\views/latest-product.blade.php ENDPATH**/ ?>