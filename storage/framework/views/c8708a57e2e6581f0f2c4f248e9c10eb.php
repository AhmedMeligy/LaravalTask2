
<?php $__env->startSection('title','List posts'); ?>

<?php $__env->startSection('content'); ?>
<table class="table">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Publisher</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><a href="<?php echo e(route('posts.show', ['post'=>$post['id']], false)); ?>"><?php echo e($post['title']); ?></a></th>
            <td><?php echo e($post['slug']); ?></td>
            <td><?php echo e($post->user->name); ?></td>
            <td>
                <a href="<?php echo e(route('posts.edit', ['post'=>$post['id']], false)); ?>" class="btn btn-primary">Edit</a>
                <form action="<?php echo e(route('posts.destroy', ['post'=>$post['id']], false)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</table>
            <div class="d-flex">
                <?php echo $posts->links(); ?>

            </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AHMED\Lara1\resources\views/posts/index.blade.php ENDPATH**/ ?>