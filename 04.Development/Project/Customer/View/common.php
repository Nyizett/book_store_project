<div class="container-fluid">
  <div class="image-container">
    <img src="../resource/img/logo.png" alt="main-logo" id="logo" class="main-logo" width="145vw">
  </div>
  <a class="my-title navbar-brand font-color-primary pt-4" href="#">
    <span class="my-fcolor fw-bolder fs-4 border-bottom">စာ အုပ် ဆိုင်</span>
    <p class="b-title">Book Store</p>
  </a>
  <button class="navbar-toggler font-color-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <ion-icon class="my-fcolor font-color-primary fs-2" name="menu-outline"></ion-icon>
  </button>
  <!-- start dropdown -->
  <div class="dropdown">
    <a class="categories border-white text-white dropdown-toggle btn commom-bg ms-4" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
      <ion-icon class="pe-2 pt-2" name="apps-outline"></ion-icon>
      <span class="fs-5">Categories </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" class="categoriesShowDropdown" id="categoriesShowDropdown">
    </ul>
  </div>
  <!-- end dropdown -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
      <li class="nav-item me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6 border-bottom border-white" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item me-4">
        <a class="text-white nav-link font-color-primary text-decoration-none fw-bold fs-6" href="./search.php">Search</a>
      </li>
      <li class="nav-item me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6" href="./author.php" tabindex="-1">Authors</a>
      </li>
      <li class="nav-item me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6" href="./shops.php" tabindex="-1">Shops</a>
      </li>

      <li class="nav-item dropdown me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Contact us
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

          <li><a class="text-dark dropdown-item" href="#">Guide</a></li>
          <li><a class="text-dark dropdown-item" href="#">Servies</a></li>
          <li>
            <a class="text-dark dropdown-item" href="#">Privacy and Policy</a>
          </li>
          <li><a class="text-dark dropdown-item" href="#">FAQ's</a></li>
        </ul>
      </li>
    </ul>
    <div class="d-flex justify-content-center align-items-center font-color-primary">
      <div class="cartdiv">
        <button class="shop" onclick="shopCart()">
          <ion-icon class="text-white fs-3 me-4" name="cart-outline"></ion-icon>
        </button>
        <span id="cartCount2" class="badge rounded-pill bg-danger cartcount"></span>
      </div>
      <li class="nav-item dropdown mb-3 me-4">
        <a class="text-white nav-link text-decoration-none" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <ion-icon class="text-white  fs-4 person-hover" name="person-outline"></ion-icon>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="text-dark dropdown-item" href="./userProfile.php">User Profile</a></li>
          <li><a class="text-dark dropdown-item" href="#">Logout</a></li>
        </ul>
      </li>

      <ion-icon class="text-white fs-4" name="moon-outline"></ion-icon>
    </div>
  </div>
</div>