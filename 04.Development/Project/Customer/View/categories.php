<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Categories</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/categories.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>
   <!-- nav -->
   <!-- <nav class="navbar navbar-expand-lg bg-light ">
      <div class="container-fluid">
         <a class="navbar-brand font-color-primary ps-3 " href="#">
            <img src="../resource/img/main-logoNew.png" alt="main-logo" class="d-inline-block align-text-top main-logo">
            <span class=" ms-4 fw-bolder fs-4 ">Paradise Book Store</span>
         </a>
         <button class="navbar-toggler font-color-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon class="font-color-primary fs-2" name="menu-outline"></ion-icon>
         </button>
         <button class="dropdown btn commom-bg ms-4 categories">
            <a class="text-decoration-none fs-6 dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <ion-icon class="pe-2 pt-2" name="apps-outline"></ion-icon>
               <span class=" d-inlineblock text-center">Categories </span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="#">Language</a></li>
               <li><a class="dropdown-item" href="#">Education</a></li>
               <li><a class="dropdown-item" href="#">Novels</a></li>
               <li><a class="dropdown-item" href="#">Technology</a></li>
               <li><a class="dropdown-item" href="#">Cartoons</a></li>
            </ul>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0 ">
               <li class="nav-item me-4">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6 border-bottom border-primary" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item me-4 ">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6" href="#">Search</a>
               </li>
               <li class="nav-item me-4 ">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6" href="#" tabindex="-1">Authors</a>
               </li>
               <li class="nav-item me-4">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6" href="#" tabindex="-1">Shops</a>
               </li>

               <li class="nav-item dropdown me-4 ">
                  <a class="nav-link font-color-primary text-decoration-none fw-bold fs-6 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Contact us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#">View Profile</a></li>
                     <li><a class="dropdown-item" href="#">Guide</a></li>
                     <li><a class="dropdown-item" href="#">Servies</a></li>
                     <li><a class="dropdown-item" href="#">Privacy and Policy</a></li>
                     <li><a class="dropdown-item" href="#">FAQ's</a></li>
                  </ul>
               </li>
            </ul>
            <div class=" d-flex  justify-content-center align-items-center  font-color-primary ">
               <ion-icon class="me-4" name="cart-outline"></ion-icon>
               <ion-icon class="me-4" name="person-outline"></ion-icon>
               <ion-icon class="" name="moon-outline"></ion-icon>
            </div>
         </div>
      </div>
   </nav> -->
   <!-- nav -->
   <div class="container-fluid header p-4">
      <div class="container d-flex justify-content-between align-items-center">
      <h3 class="text-primary">Language</h3>
      <div class="text-primary">
         <b>Home</b> -> Language
      </div>
      </div>
   </div>
   </div>
   <div class="container-fluid d-flex justify-content-between align-items-center my-4">
      <div class="container">
         <div class="row g-0">
            <?php for ($i = 0; $i < 12; $i++) : ?>
               <div class="col-12 col-md-6 col-lg-3 text-light header d-flex justify-content-between align-items-center my-2">
                  <div class="my-card">
                     <div class="my-card-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXg49v2amwPoDctZcQClmNEYTIlAHx_0SbHQ&usqp=CAU" alt="">
                     </div>
                     <div class="my-card-info">
                        <h5>Book Name</h5>
                        <div class="mb-2">
                           <span style="font-size:x-small">
                              <?php for ($s = 0; $s < 5; $s++) : ?>
                                 <?php $star = 3; ?>
                                 <?php if ($star > $s) : ?>
                                    <i class="fa-solid fa-star"></i>
                                 <?php else : ?>
                                    <i class="fa-regular fa-star"></i>
                                 <?php endif ?>
                              <?php endfor ?>
                           </span><br>
                           <span style="font-size:x-small">Author Name</span>
                        </div>
                        <p style="font-weight:500 ;">3500 MMK</p>
                        <button class="btn card-button px-1 rounded-1 me-1"><i class="fa-solid fa-cart-shopping me-1"></i>add
                           to
                           cart</button>
                        <span class="btn btn-primary card-button"><i class="fa-solid fa-eye"></i> 4</span>
                     </div>
                  </div>
               </div>
            <?php endfor ?>
         </div>
      </div>
   </div>
   <!-- footer -->
   <!-- <footer id="footer" class="container-fluid commom-bg">
      <div class="row">
         <div class="col-12 col-lg-4 ps-5 pt-4">
            <div class="">
               <h2 class="text-white align-top">Paradise</h2>
               <p></p>
               <p class="text-white">Address</p>
               <p class="text-white">SHOW ON MAP</p>
               <div class="d-flex">
                  <i class="fab fa-facebook text-white mx-1"></i>
                  <i class="fab fa-instagram text-white mx-1"></i>
                  <i class="fab fa-youtube text-white mx-1"></i>
                  <i class="fab fa-twitter text-white mx-1"></i>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-8 col-xl-6">
            <div class="container-fluid">
               <div class="row mt-5 hello">
                  <div class="col-6 col-lg-3 text-white">
                     <div class="cs-width me-5">
                        <p class="fw-bold">Customer Service</p>
                        <small>09-123456789</small>
                        <br />
                        <br />
                        <small>hello@gmail.com</small>
                     </div>
                  </div>
                  <div class="col-6 col-lg-3 text-white">
                     <div class="">
                        <p class="fw-bold">Our Service</p>
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Contact Us </small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small> Guide </small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Delivery Free</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small> Good Print Quality</small>
                        </a>
                     </div>
                  </div>
                  <div class="col-6 col-lg-3">
                     <div class="">
                        <p class="fw-bold text-white">Categories</p>
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Language</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Education</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Novels</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Technology</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Cartoons</small>
                        </a>
                     </div>
                  </div>
                  <div class="col-6 col-lg-3">
                     <div class="">
                        <p class="fw-bold text-white">Shop List</p>
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Yagnon</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Mandalay </small>
                        </a>
                        <br />
                        <a href="tel:09250152018" class="btn-link text-white text-decoration-none">
                           <small>NayPyiTaw</small>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <hr class="text-white" />
            <div class="col-12 col-lg-6">
               <div class="">
                  <p class="text-white">
                     Copyright © 2022 ParadiseBookStore All rights reserved.
                  </p>
               </div>
            </div>
            <div class="col-12 col-lg-6">
               <div class="d-flex justify-content-end">
                  <i class="fab fa-cc-visa text-white mx-1"></i>
                  <i class="fab fa-cc-mastercard text-white mx-1"></i>
               </div>
            </div>
         </div>
      </div>
   </footer> -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script type="text/javascript">
      $(".slider").slick({
         prevArrow: '<span class="priv_arrow btn  btn-primary "><i class="fas fa-angle-left"></i></span>',
         nextArrow: '<span class="next_arrow btn btn-primary "><i class="fas fa-angle-right"></i></span>'
      });
   </script>
</body>

</html>