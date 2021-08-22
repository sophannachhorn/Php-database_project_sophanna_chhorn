<?php SESSION_START(); ?>
<nav class="mb-1 position-sticky navbar navbar-expand-lg navbar-light" style="background-color: rgba(34, 26, 16, 0.384); height: 60px; top: 0; z-index: 1111;">
<a class="navbar-brand text-white" href="#">SaaNa CAFE`</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="?page=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?page=coffee">Coffee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?page=farming">Farming</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?page=gear">Gear</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?page=about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?page=search"><i class="fa fa-search" aria-hidden="true"></i></a>
      </li>
      <?php if($_SESSION['admin'] !== ""): ?>
      <li class="nav-item hover">
        <a class="nav-link text-white btn btn-outline-info" href="?page=create">+ Add</a>
      </li>
      <li class="nav-item hover">
        <a class="nav-link text-white btn btn-outline-danger" href="?page=admin_logout">LOGOUT</a>
      </li>
      <?php else: ?>
      <li class="nav-item hover">
        <a class="nav-link text-white btn btn-outline-danger" href="model/admin_login.php">LOGIN</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
  
