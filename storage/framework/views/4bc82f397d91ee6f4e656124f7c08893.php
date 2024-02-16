

<?php $__env->startSection('title', 'Edit Post'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Edit Post</h1>
    <form action="<?php echo e(route('posts.update', ['post' => $post->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
        </div>
        <div class="form-group">
            <label for="body">Content</label>
            <textarea class="form-control" id="body" name="body"><?php echo e($post->body); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AHMED\Lara1\resources\views/posts/edit.blade.php ENDPATH**/ ?>