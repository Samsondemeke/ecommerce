
<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <?php echo e(__('Catagory Detail')); ?>

 </div>
 <div class="card-body">
 id : <?php echo e($Catagory->id); ?>

 <br>
 Catagory : <?php echo e($Catagory->name); ?>

 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="<?php echo e(route('Catagory/get_all')); ?>" role="button"> <?php echo e(__('Back')); ?></a>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ecommerce\ecommerce\resources\views/Catagory/get_by_id.blade.php ENDPATH**/ ?>