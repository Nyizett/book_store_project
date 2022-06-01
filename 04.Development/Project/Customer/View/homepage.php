<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Homepage</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>
   <nav class="navbar navbar-expand-lg bg-light position-fixed top-0 w-100 header">
      <div class="container-fluid">
         <a class="navbar-brand font-color-primary ps-3 " href="#">
            <img src="../resource/img/main-logoNew.png" alt="main-logo" class="d-inline-block align-text-top main-logo">
            <span class=" ms-4 fw-bolder fs-4 ">စာ အုပ် ဆိုင်</span>
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
               <ion-icon class="me-4 person-hover" name="person-outline"></ion-icon>
               <ion-icon class="" name="moon-outline"></ion-icon>
            </div>

         </div>
      </div>
   </nav>
   <section id="welcome-section" class="container mt-5 ">
      <div class="row pt-5  ">
         <!-- <div class="col-12 col-lg-6 ps-5 pb-5">
            <div class="slider secondary-bg content">
               <div class="">
                  <img class="img-slide1" src="../resource/img/main slider_1.png" alt="">
               </div>
               <div>
                  <img class="img-slide2" src="../resource/img/main slider_2.png" alt="">
               </div>
            </div>
         </div> -->
         <div class="col-12 col-lg-1"></div>
         <div class="col-12 col-lg-5">
            <div class="pt-5 content  ">
               <h3 class="font-color-primary">CHOOSE YOUR BRAIN FOOD</h3>
               <h1 class="fw-bold text-primary">BOOK IN STORE</h1>
               <p class="">Language / Education / Novels / Technology / Cartoons</p>
               <a class="btn commom-bg text-white btn-lg shop-now fs-6" href="#">SHOP NOW</a>
            </div>
         </div>
      </div>
   </section>

   <section id="blueBox" class="container my-5">
      <div class="row pt-3">
         <div class="col-12 col-lg-4 content">
            <div class=" container commom-bg rounded">
               <div class="row align-items-center justify-content-center  ">
                  <div class="col-3">
                     <button class="btn btn-primary rounded-circle">
                        <i class="fas fa-phone-alt"></i>
                     </button>
                  </div>
                  <div class="col-9">
                     <p class="text-white m-0 pt-3">24/7 CUSTOMER SUPPORT</p>
                     <p class="text-white m-0 pb-3">09:9999999999</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-4  content">
            <div class="container commom-bg rounded">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn btn-primary rounded-circle">
                        <i class="fas fa-globe-africa"></i>
                     </button>
                  </div>
                  <div class="col-9">
                     <p class="text-white m-0 pt-3">QUICK DELIERY</p>
                     <p class="text-white m-0 pb-3">Most Products are free delivery</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-4   content col-sm-12   ">
            <div class="container commom-bg rounded">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn btn-primary rounded-circle">
                        <i class="fas fa-book"></i>
                     </button>
                  </div>
                  <div class="col-9">
                     <p class="text-white m-0 pt-3">GOOD PRINT PAGE</p>
                     <p class="text-white m-0 pb-3">We Use Good Quality</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <section class="container my-5 vh-100" id="newsBooks">
      <div class="row justify-content-evenly align-items-center ">
         <div class="my-5"></div>
         <hr class=" content">
         <div class="col-12  content">
            <div class="my-5">
               <div class="text-center">
                  <h2 class="fw-bold">NEW BOOKS </h2>
               </div>
            </div>
         </div>
         <div class="col-6 col-lg-3 col-xl-2   content">
            <div class="card mb-5 mb-lg-0 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">JavaScript</p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text  d-block mb-3 font-color-secondary ">
                     Ei Maung
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">5000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2 content">
            <div class="card mb-5 mb-lg-0 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">JavaScript</p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">39999 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2 content">
            <div class="card mb-5 mb-lg-0 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">JavaScript</p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text  d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2 content">
            <div class="card mb-5 mb-lg-0 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0">JavaScript</p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text text-black-50 d-block mb-3">
                     Ei Maung
                  </small>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">999 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2 content">
            <div class="card mb-5 mb-lg-0 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">JavaScript</p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Hello
                  </small>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">3000 MMK</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="container bg-lightBlue  my-5  " id="">
      <div class="row justify-content-evenly h-100 content ">
         <div class="my-5"></div>
         <div class="col-12">
            <div class="my-5 content">
               <div class="text-left ms-5 d-flex flex-row content">
                  <h2 class="fw-bold font-color-primary">
                     Best Selling Books
                  </h2>
               </div>
            </div>
         </div>
         <div class="col-6 col-lg-3 col-xl-2">
            <div class="card mb-5 mb-lg-0 card-width bg-lightBlue border-0 content">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">5000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2">
            <div class="card mb-5 mb-lg-0 card-width bg-lightBlue border-0 content">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">39999 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2 book-card-lg mb-5">
            <div class="card bg-lightBlue border-0 content">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold fs-4 mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <p class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2">
            <div class="card mb-5 mb-lg-0 card-width bg-lightBlue border-0 content">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0">JavaScript</p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text text-black-50 d-block mb-3">
                     Ei Maung
                  </small>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">999 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-6 col-lg-3 col-xl-2">
            <div class="card mb-5 mb-lg-0 card-width bg-lightBlue border-0 content">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Hello
                  </small>
                  <div class="d-flex justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">3000 MMK</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <section class="container-fluid my-5 pt-5 vh-100">
      <div class="row">
         <div class="col-12">
            <h1 class="font-color-primary ms-5 ps-5">Popular Books</h1>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-12 col-lg-2 col-xl-2">
            <div class="card card-width mt-5">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">5000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-2 col-xl-2">
            <div class="card mt-5 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">5000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-2 col-xl-2">
            <div class="card mt-5 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">5000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-2 col-xl-2">
            <div class="card mt-5 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">5000 MMK</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-4 col-xl-2 book-card-lg2">
            <div class="card py-3">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>

                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 fs-3 font-color-primary">
                        Technology
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>




   <section class="container py-5">
      <div class="row">
         <div class="col-12 col-lg-6">
            <h3 class="font-color-primary fw-bold">Favorite Authors</h3>
         </div>
         <div class="col-12 col-lg-6  text-end ">
            <a href="#" class="btn commom-bg text-white"> View All</a>
         </div>
      </div>
      <div class="row mt-5">
         <div class="col-12 col-lg-2">
            <img src="../resource/img/author.png" class="img-fluid" alt="">
            <p class="font-color-primary fw-bold text-center pt-2">Min Thein Kha</p>
         </div>
         <div class="col-12 col-lg-2">
            <img src="../resource/img/author.png" class="img-fluid" alt="">
            <p class="font-color-primary fw-bold text-center pt-2">Min Thein Kha</p>
         </div>
         <div class="col-12 col-lg-2">
            <img src="../resource/img/author.png" class="img-fluid" alt="">
            <p class="font-color-primary fw-bold text-center pt-2">Min Thein Kha</p>
         </div>
         <div class="col-12 col-lg-2">
            <img src="../resource/img/author.png" class="img-fluid" alt="">
            <p class="font-color-primary fw-bold text-center pt-2">Min Thein Kha</p>
         </div>
         <div class="col-12 col-lg-2">
            <img src="../resource/img/author.png" class="img-fluid" alt="">
            <p class="font-color-primary fw-bold text-center pt-2">Min Thein Kha</p>
         </div>
         <div class="col-12 col-lg-2">
            <img src="../resource/img/author.png" class="img-fluid" alt="">
            <p class="font-color-primary fw-bold text-center pt-2">Min Thein Kha</p>
         </div>
      </div>
   </section>



   <section id="blueBox" class="container mt-5">
      <div class="row pt-3">

         <div class="col-12 col-lg-3  col-sm-12   ">
            <div class="container border rounded border-dark">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn rounded-circle">
                        <i class="fas fa-book fs-2  text-danger "></i>
                     </button>
                  </div>
                  <div class="col-9 ps-3">
                     <p class=" m-0 pt-3 fw-bold fs-5">100</p>
                     <p class=" m-0 pb-3">Total Books</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-3  col-sm-12   ">
            <div class="container border rounded border-dark">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn rounded-circle">
                        <i class="fas fa-users fs-3 text-success "></i>
                     </button>
                  </div>
                  <div class="col-9 ps-4">
                     <p class=" m-0 pt-3 fw-bold fs-5">100</p>
                     <p class=" m-0 pb-3">Authors</p>
                  </div>
               </div>
            </div>
         </div>


         <div class="col-12 col-lg-3  col-sm-12   ">
            <div class="container border rounded border-dark">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn rounded-circle">
                        <i class="fas fa-shopping-cart fs-2 text-info"></i>
                     </button>
                  </div>
                  <div class="col-9 ps-4">
                     <p class=" m-0 pt-3 fw-bold fs-5">100</p>
                     <p class=" m-0 pb-3">Sold Books</p>
                  </div>
               </div>
            </div>
         </div>


         <div class="col-12 col-lg-3  col-sm-12   ">
            <div class="container border rounded border-dark">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn rounded-circle">
                        <i class="fas fa-smile fs-2 text-primary"></i>
                     </button>
                  </div>
                  <div class="col-9 ps-4">
                     <p class=" m-0 pt-3 fw-bold fs-5">100</p>
                     <p class=" m-0 pb-3">Happy Customers</p>
                  </div>
               </div>
            </div>
         </div>


      </div>
   </section>




   <footer id="footer" class="container-fluid commom-bg  mt-5   ">
      <div class="row">
         <div class="col-12 col-lg-3 ps-5 pt-4">
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
   </footer>
   <!-- <a onclick="topFunction()" id="myBtn" class="btn" title="Go to top">Top</a> -->

   <a href="#welcome-section" class="btn btn-primary position-fixed  scroll-to-top  scroll-to-top-d ">
      hello
   </a>



   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script src="../resource/js/homepage.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="https://unpkg.com/scrollreveal"></script>
   <script src="../resource/UI Library/way_point/noframework.waypoints.js"></script>
   <script type="text/javascript">
      //Get the button:
      mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
         scrollFunction()
      };

      function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
         } else {
            mybutton.style.display = "none";
         }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
         document.body.scrollTop = 0; // For Safari
         document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }



      // let hello = $("#blueBox").Waypoint(function() {
      //    console.log("hello")
      //    $(".navbar").toggleClass("bg-light").toggleClass("bg-success");
      // }, {
      //    offset: "20%"
      // })


      // $(".slider").slick({
      //    prevArrow: '<span class="priv_arrow btn  btn-primary "><i class="fas fa-angle-left"></i></span>',
      //    nextArrow: '<span class="next_arrow btn btn-primary "><i class="fas fa-angle-right"></i></span>'
      // });


      ScrollReveal({
         origin: 'top',
         distance: '30px',
         duration: 1000,
         reset: true,
      }).reveal('.content', {
         interval: 200
      });
   </script>
</body>


</html>