
<?php $__env->startSection('content'); ?>
<div class="container pb-2">
 <a class="btn btn-success" href="<?php echo e(route('Catagory/register')); ?>" role="button"> <?php echo e(__('New CATAGORY')); ?>

</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <?php echo e(__('MR DEMEKE THIS IS YOUR PRODUCT LIST')); ?>

 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 ID
 </th>
<th>
 name
 </th>
 </tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $Catagory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Catagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($Catagory->id); ?></td>
 <td> <?php echo e($Catagory->name); ?></td>
 </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ecommerce\ecommerce\resources\views/Catagory/get_all.blade.php ENDPATH**/ ?>