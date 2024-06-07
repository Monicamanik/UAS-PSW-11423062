<?php $__env->startSection('title', 'Customer'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><?php echo e($customer->name); ?></h3>
            </div>
            <div class="card-body">
                <div class="row g-0 bg-light position-relative">
                    <div class="col-md-4 mb-md-0 p-md-4">
                        <img src="<?php echo e($customer->user->getAvatar()); ?>" class="w-100" alt="...">
                    </div>
                    <div class="col-md-8 p-4 ps-md-0">
                        <h5 class="mt-0"><?php echo e($customer->job); ?></h5>
                        <p> <?php echo e($customer->address); ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\fil\field booking\resources\views/customer/show.blade.php ENDPATH**/ ?>