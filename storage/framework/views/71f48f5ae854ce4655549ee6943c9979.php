
<?php $__env->startSection('title', 'Edit User'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Edit User</h1>
    <form action="<?php echo e(route('users.update', ['user' => $user->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AHMED\Lara1\resources\views/users/edit.blade.php ENDPATH**/ ?>