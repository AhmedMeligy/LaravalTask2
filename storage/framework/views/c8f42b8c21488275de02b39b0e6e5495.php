
<?php $__env->startSection('title','create post'); ?>


<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('posts.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Post Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Post Title" value="<?php echo e(old('title')); ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Post Body</label>
            <input type="text" name="body" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Post Description" value="<?php echo e(old('body')); ?>">
        </div>

        <div class="col-sm-3">
        <label class="">Choose User</label>
        <select class="form-select" id="specificSizeSelect" name="user_id">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user['id']); ?>"><?php echo e($user['name']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

        <button type="submit" class="btn btn-primary mt-4">Create</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AHMED\Lara1\resources\views/posts/create.blade.php ENDPATH**/ ?>