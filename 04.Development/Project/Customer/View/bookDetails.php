<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book_Details</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/book_details.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">

</head>

<body>

   <!-- Header -->
   <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
   <div class="container-fluid">
  <div class="image-container">
    <img src="../resource/img/logo.png" alt="main-logo" id="logo" class="img-logo" >
   </div>
    <a class="my-title navbar-brand font-color-primary pt-4" href="#">
        <span class="my-fcolor fw-bolder fs-4 border-bottom">စာ အုပ် ဆိုင်</span>
        <p class="b-title">Book Store</p>
    </a>
  <button
    class="navbar-toggler font-color-primary"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <ion-icon
      class="my-fcolor font-color-primary fs-2"
      name="menu-outline"
    ></ion-icon>
  </button>
  <button class="categories border-white dropdown btn commom-bg ms-4">
    <a
      class="text-decoration-none fs-6 dropdown-toggle text-white"
      href="#"
      id="navbarDropdown"
      role="button"
      data-bs-toggle="dropdown"
      aria-expanded="false"
    >
      <ion-icon class="pe-2 pt-2" name="apps-outline"></ion-icon>
      <span class="my-fcolor cat d-inlineblock text-center">Categories </span>
   
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="#">Language</a></li>
      <li><a class="dropdown-item" href="#">Education</a></li>
      <li><a class="dropdown-item" href="#">Novels</a></li>
      <li><a class="dropdown-item" href="#">Technology</a></li>
      <li><a class="dropdown-item" href="#">Cartoons</a></li>
    </ul>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
      <li class="nav-item me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6 border-bottom border-white" aria-current="page"
          href="#">Home</a>
      </li>
      <li class="nav-item me-4">
        <a class="text-white nav-link font-color-primary text-decoration-none fw-bold fs-6" href="#">Search</a>
      </li>
      <li class="nav-item me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6" href="#" tabindex="-1">Authors</a>
      </li>
      <li class="nav-item me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6" href="#" tabindex="-1">Shops</a>
      </li>

      <li class="nav-item dropdown me-4">
        <a class="text-white nav-link text-decoration-none fw-bold fs-6 dropdown-toggle" href="#" id="navbarDropdown"
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Contact us
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="my-fcolor dropdown-item" href="#">View Profile</a></li>
          <li><a class="my-fcolor dropdown-item" href="#">Guide</a></li>
          <li><a class="my-fcolor dropdown-item" href="#">Servies</a></li>
          <li>
            <a class="my-fcolor dropdown-item" href="#">Privacy and Policy</a>
          </li>
          <li><a class="my-fcolor dropdown-item" href="#">FAQ's</a></li>
        </ul>
      </li>
    </ul>
    <div class="d-flex justify-content-center align-items-center font-color-primary">
      <ion-icon class="text-white fs-4 me-4" name="cart-outline"></ion-icon>
      <ion-icon class="text-white fs-4 me-4 person-hover" name="person-outline"></ion-icon>
      <ion-icon class="text-white fs-4" name="moon-outline"></ion-icon>
    </div>
  </div>
</div>
   </nav>
   <!-- Header -->
   
   <section class="container-fluid">
      <div class="row align-items-center justify-content-center min-vh-100">
         <div class="col-12 col-lg-4 ps-5 ms-3">
            <div class="slider slide-bg d-flex">
               <div class="detail">
                  <?php 
                  echo "<img class='img-fluid mt-3' src='../resource/img/book cover/".$result[0]['book_image']."' alt=''>"
               ?>                 
               </div>
               
            </div>
         </div>

         <div class="col-12 col-lg-2"></div>


         <div class="col-12 col-lg-5">
            <div class="">
               <div class="card mb-5 mb-lg-0 card-width ">
                  <div class="card-body d-flex flex-column ">
                     <p class="card-title fw-bold mb-0 font-color-primary"></p>
                     <small>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                     </small>
                    
                        <?php echo " <small class='card-text d-block mb-3 font-color-secondary'>". $result[0]['author_name']." </small>";
                        ?>
                     </small>
                     <div class="d-flex justify-content-between align-items-center">
                       <?php echo " <p class='fw-bold mb-0 font-color-primary'>". number_format($result[0]['book_price'])." MMK</p>"; ?>
                     </div>

                     <div class="details-text  mt-2">
                       <?php echo " <p class='p-3'>".$result[0]['book_description']."</p>" ?>
                     </div>
                  </div>

                  <div class="d-flex col-md-12 col-sm-10 ">
                     <div class="container-fluid col-md-10 col-sm-6 d-flex  mb-3">
                        <div class="d-flex justify-content-center  col-md-5 bg-light  rounded mt-3 qty ">
                           <span class="minus">-</span>
                           <input type="number" class="counts" id="qty" name="qty" value="1">
                           <span class="plus">+</span>
                        </div>

                        <div class="mt-3">
                        
                        <button class="btn cartbtn"><i class="fas fa-shopping-cart mx-1"></i> Add to Cart</button>
                     </div>
                     </div>

                    

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container">
      <div class="row">
         <div class="col-md-7 ">
   
               <div class="col-md-12">
                  <p class="titles commom-bg">Review</p>
               </div>
               <div class="col-md-12">
                  <div class="commentbox">
                     <div class="commentboxheader">
                        <p class="QuestionHeader">Review About This Product</p>
                     </div>
                     <div class="commentbody">
                       
                     </div>
                       <div class="commentinput mt-4">
                      
                     <input type="text" class="inputtextbox" id="inputtextbox"  placeholder="Please Type here..."/>
                     <button class="sendbutton">
                        Post Your Review
                     </button>
                  </div>
                       
                  </div>
                
                
               </div>
            </div>

            <div class="col-md-4">
            <div class="col-md-12">
                  <p class="titles commom-bg">Description</p>
               </div>
               <div class="col-md-12">
                  <div class="descbox">
                     <div class="desctable ">
                        <table class="table table-bordered m-5">
                           <tr>
                              <td >Pages</td>
                              <?php echo "<td>".$result[0]['book_pages']."</td>" ?>
                           </tr>
                           <tr>
                              <td >Release Date</td>
                              <?php echo "<td>".$result[0]['book_established']."</td>" ?>
                           </tr>
                           <tr>
                              <td>Size of Book</td>
                              <?php echo "<td>".$result[0]['book_size']."</td>" ?>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-1"></div>
         <div class="col-12 col-lg-5"></div>
      </div>
   </section>
   <footer id="footer" class="container-fluid commom-bg  mt-5">
   <div class="row">
    <div class="col-12 col-lg-3 ps-5 pt-4">
        <div class="">
            <h2 class="text-white align-top">စာ အုပ် ဆိုင်</h2>
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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
  

   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/js/homepage.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource//js/bookDetails.js"></script>

   <script type="text/javascript">
      $(".slider").slick({
         prevArrow: '<span class="slick-prev slick-arrow d-flex align-items-center m-5  arrows"><i class="fas fa-angle-left"></i></span>',
         nextArrow: '<span class="slick-next slick-arrow d-flex align-items-center m-5 arrows"><i class="fas fa-angle-right"></i></span>'
      });
   </script>
</body>

</html>