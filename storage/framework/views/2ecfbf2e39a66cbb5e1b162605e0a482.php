

<?php $__env->startSection('title', 'User Details'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>User Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Information</h5>
            <p class="card-text"><strong>ID:</strong> <?php echo e($user->id); ?></p>
            <p class="card-text"><strong>Name:</strong> <?php echo e($user->name); ?></p>
            <p class="card-text"><strong>Email:</strong> <?php echo e($user->email); ?></p>
            <p class="card-text"><strong>Email_verified_at:</strong> <?php echo e($user->email_verified_at); ?></p>
        </div>
    </div>

    <div class="mt-5">
        <h2>Posts Owned by <?php echo e($user->name); ?></h2>
        <?php if($user->posts->count() > 0): ?>
            <ul class="list-group">
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <a href="<?php echo e(route('posts.show', ['post' => $post->id])); ?>"><?php echo e($post->title); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php else: ?>
            <p><?php echo e($user->name); ?> has no posts.</p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AHMED\Lara1\resources\views/users/show.blade.php ENDPATH**/ ?>