<?php

include 'C:\xampp\htdocs\LearnPHP\WaterDelivery\partialsWebp\_loginModal5.php';
include 'C:\xampp\htdocs\LearnPHP\WaterDelivery\partialsWebp\_signupModal5.php';
echo '
<nav class="navbar navbar-expand-lg fixed-top bg-dark text-light" >
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page " href="http://localhost/learnphp/WaterDelivery/partialsWebp/homepage.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="http://localhost/learnphp/WaterDelivery/partialsWebp/about.php"><b>About</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="http://localhost/learnphp/WaterDelivery/partialsWebp/contact.php"><b>Contact us</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b>Dropdown</b>
          </a>
          <ul class="dropdown-menu text-light">
            <li><a class="dropdown-item text-dark" href="#">Action</a></li>
            <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
            <li><hr class="dropdown-divider text-dark"></li>
            <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <button class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#loginModal"><i>Login</i></button> 
      <button class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#signupModal"><i>Signup</></button>
    </div>
  </div>
</nav>

';

?>