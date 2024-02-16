

<?php $__env->startSection('title', 'Post Details'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Post Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Post Information</h5>
            <p class="card-text"><strong>ID:</strong> <?php echo e($post->id); ?></p>
            <p class="card-text"><strong>Title:</strong> <?php echo e($post->title); ?></p>
            <p class="card-text"><strong>Content:</strong> <?php echo e($post->body); ?></p>
            <p class="card-text"><strong>Created At:</strong> <?php echo e($post->created_at); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AHMED\Lara1\resources\views/posts/show.blade.php ENDPATH**/ ?>