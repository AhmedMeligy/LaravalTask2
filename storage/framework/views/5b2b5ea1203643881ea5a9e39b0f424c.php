<nav class="navbar navbar-expand-lg navbar-dark bg-dark fs-5">
  <a class="navbar-brand fs-1" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('welcome')); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('users.create')); ?>">New User</a>
      </li>
    </ul>
  </div>
</nav><?php /**PATH C:\Users\AHMED\Lara1\resources\views///includes/navbar.blade.php ENDPATH**/ ?>