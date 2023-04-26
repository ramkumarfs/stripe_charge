<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
        <div class="row">
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
              <div class="card">
                <img src="<?php echo e($product->image); ?>" class="card-img-top" alt="<?php echo e($product->name); ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($product->name); ?></h5>
                  <p class="card-text"><?php echo e($product->description); ?></p>
                  <p class="card-text">$<?php echo e($product->price); ?></p>
                  <a href="product/<?php echo e($product->id); ?>" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/stripe-charge/resources/views/pages/products/index.blade.php ENDPATH**/ ?>