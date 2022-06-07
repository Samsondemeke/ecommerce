
<?php $__env->startSection('content'); ?>
<div class="container pb-2">
 <a class="btn btn-success" href="<?php echo e(route('product/register')); ?>" role="button"> <?php echo e(__('New PRODUCT')); ?>

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
<th>
 unit
 </th>
 <th>price</th>
 <th>quantity</th>
 </tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($product->id); ?></td>
 <td> <?php echo e($product->name); ?></td>
 <td> <?php echo e($product->unit); ?></td>
 <td> <?php echo e($product->price); ?></td>
 <td> <?php echo e($product->quantity); ?></td>
 <td>
 <a class="btn btn-xs btn-info" title="Detail" href="/product/search/<?php echo e($product->id); ?>">Details</a>
 <a class="btn btn-xs btn-success" title="Edit" href="/product/edit/<?php echo e($product->id); ?>">Edit</a>
 <a class="btn btn-xs btn-danger" title="Delete" href="/product/delete/<?php echo e($product->id); ?>">Delete</a>
 </td>
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ecommerce\ecommerce\resources\views/product/list.blade.php ENDPATH**/ ?>