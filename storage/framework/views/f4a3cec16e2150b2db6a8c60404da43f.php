<nav class="navbar navbar-expand-lg navbar-dark bg-dark fs-5">
  <a class="navbar-brand fs-1" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(route('welcome')); ?>">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item <?php echo e(request()->is('users') ? 'active' : ''); ?>" href="<?php echo e(route('users.index')); ?>">List</a>
          <a class="dropdown-item <?php echo e(request()->is('users/create') ? 'active' : ''); ?>" href="<?php echo e(route('users.create')); ?>">New User</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Posts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item <?php echo e(request()->is('posts') ? 'active' : ''); ?>" href="<?php echo e(route('posts.index')); ?>">List</a>
          <a class="dropdown-item <?php echo e(request()->is('posts/create') ? 'active' : ''); ?>" href="<?php echo e(route('posts.create')); ?>">New Post</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php /**PATH C:\Users\AHMED\Lara1\resources\views/includes/navbar.blade.php ENDPATH**/ ?>