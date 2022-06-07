
<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header"><?php echo e(__('PRODUCT EDIT')); ?></div>
 <div class="card-body">
 <form method="POST" action="<?php echo e(route('product/update')); ?>">
 <?php echo csrf_field(); ?>
<input type="hidden" value="<?php echo e($product->id); ?>" name ='id'>
 <div class="form-group row">
 <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('product')); ?></label>
 <div class="col-md-6">
 <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($product->name); ?>" required autocomplete="name" autofocus>
 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="invalid-feedback" role="alert">
 <strong><?php echo e($message); ?></strong>
 </span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="form-group row">
 <label for="unit" class="col-md-4 col-form-label text-md-right"><?php echo e(__('unit')); ?></label>
 <div class="col-md-6">
 <input id="unit" type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="unit" value="<?php echo e($product->unit); ?>" autocomplete="unit">
 <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="invalid-feedback" role="alert">
 <strong><?php echo e($message); ?></strong>
 </span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="form-group row">
 <label for="price" class="col-md-4 col-form-label text-md-right"><?php echo e(__('price')); ?></label>
 <div class="col-md-6">
 <input id="price" type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" value="<?php echo e($product->price); ?>" autocomplete="price">
 <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="invalid-feedback" role="alert">
 <strong><?php echo e($message); ?></strong>
 </span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="form-group row">
 <label for="quantity" class="col-md-4 col-form-label text-md-right"><?php echo e(__('quantity')); ?></label>
 <div class="col-md-6">
 <input id="quantity" type="text" class="form-control <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="quantity" value="<?php echo e($product->quantity); ?>" autocomplete="quantity">
 <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="invalid-feedback" role="alert">
 <strong><?php echo e($message); ?></strong>
 </span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
     <?php echo e(__('Update')); ?>

    </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ecommerce\ecommerce\resources\views/product/edit.blade.php ENDPATH**/ ?>