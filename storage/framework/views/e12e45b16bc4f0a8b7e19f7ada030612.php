
<?php $__env->startSection('title', 'List users'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
        <h1>Users</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>email_verified_at</th>
                    <th>Posts</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><a href="<?php echo e(route('users.show', ['user' => $user->id])); ?>"><?php echo e($user->name); ?></a></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->email_verified_at); ?></td>
                <td><?php echo e($user['posts_count']); ?></td>
                <td>
                <button type="button" class="btn btn-primary">
                <a href="<?php echo e(route('users.edit', ['user' => $user->id])); ?>" style="color: white; text-decoration: none;">Edit</a>
                </button>
                <form action="<?php echo e(route('users.destroy', ['user' => $user->id])); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            
        </table>
        <div class="pagination">
    <?php echo e($users->links()); ?>

</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AHMED\Lara1\resources\views/users/index.blade.php ENDPATH**/ ?>