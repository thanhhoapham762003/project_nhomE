<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Update Product</div>
  <div class="card-body">
       
    <form action="<?php echo e(route('admin_product.update', ['id' => $product->id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="<?php echo e($product->product_name); ?>" required>
        </div>

        <div class="form-group">
            <label for="product_type">Product Type:</label>
            <input type="text" name="product_type" id="product_type" class="form-control" value="<?php echo e($product->product_type); ?>" required>
        </div>

        <div class="form-group">
            <label for="product_quantity">Product Quantity:</label>
            <input type="number" name="product_quantity" id="product_quantity" class="form-control" value="<?php echo e($product->product_quantity); ?>" required>
        </div>

        <div class="form-group">
            <label for="product_price">Product Price:</label>
            <input type="number" name="product_price" id="product_price" class="form-control" value="<?php echo e($product->product_price); ?>" required>
        </div>

        <div class="form-group">
            <label for="product_detail">Product Detail:</label>
            <input type="text" name="product_detail" id="product_detail" class="form-control" value="<?php echo e($product->product_detail); ?>" required>
        </div>

        <div class="form-group">
            <label for="product_image">Product Image:</label>
            <input type="file" name="product_image" id="product_image" class="form-control">
        </div>

        <div class="form-group">
            <label for="type_name">Type Name:</label>
            <input type="text" name="type_name" id="type_name" class="form-control" value="<?php echo e($product->type_name); ?>" required>
        </div>

        <div class="form-group">
            <label for="type_logo">Type Logo:</label>
            <input type="text" name="type_logo" id="type_logo" class="form-control" value="<?php echo e($product->type_logo); ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Update Product</button>
    </form>
    
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_product.layout_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Back End 2\projectNhomC-camnhi_cuoiky_20240517_09h00\Web_ecomerce\resources\views/admin_product/updateProduct.blade.php ENDPATH**/ ?>