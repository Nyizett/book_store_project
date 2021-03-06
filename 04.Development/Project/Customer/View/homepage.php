
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Homepage</title>
   <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $favIcon[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/footer.css" />
   <link rel="stylesheet" href="../resource/UI Library/slick/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/slick/slick-theme.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/common.css">

</head>

<body>

   <!-- Header -->
   <nav class="navbar navbar-expand-lg position-fixed top-0 w-100 header" id="cum_navbar">
      <?php require "../View/common.php" ?>
   </nav>
   <!-- Slider -->
   <section id="welcome-section" class="container-fluid bg-light ">
      <div class=" row pt-5 ">
         <div class="slider-div col-12 col-lg-7 mt-5">
            <div class="slider secondary-bg content">
               <div class="" id="headerSlider1">
                  <!-- <img class="img-slide1" src="../resource/img/main slider_1.png" alt=""> -->
               </div>
               <div class="" id="headerSlider2">
                  <!-- <img class="img-slide2" src="../resource/img/main slider_2.png" alt=""> -->
               </div>
               <div class="" id="headerSlider3">
                  <!-- <img class="img-slide2" src="../resource/img/main slider_2.png" alt=""> -->
               </div>
               <div class="" id="headerSlider4">
                  <!-- <img class="img-slide2" src="../resource/img/main slider_2.png" alt=""> -->
               </div>
            </div>
         </div>

         <div class="mydivtext col-lg-5 ">
            <div class="stext pt-5 ps-5 ">
               <h3 class="stext1 font-color-primary" id="headerFirstText"></h3>
               <h1 class="stext2 fw-bold text-primary" id="headerSecondText"></h1>
               <p class="cat">"Some books leave us free and some books make us free."</p>
               <!-- <a class="btn commom-bg text-white btn-lg shop-now fs-6" href="#">SHOP NOW</a> -->
            </div>
         </div>
      </div>
   </section>

   <section id="blueBox" class="container">
      <div class=" row pt-5">
         <div class="col-12 col-lg-4 content">
            <div class="web-box1  container commom-bg rounded">
               <div class="row align-items-center justify-content-center  ">
                  <div class=" col-3">
                     <button class="btn btn-primary rounded-circle">
                        <i class="icon fas fa-phone-alt"></i>
                     </button>
                  </div>
                  <div class="col-9">
                     <p class="text-white m-0 pt-3">24/7 CUSTOMER SUPPORT</p>
                     <p class="text-white m-0 pb-3" id="HeaderPhoneNumber"></p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-4  content">
            <div class="web-box2 container commom-bg rounded">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn btn-primary rounded-circle">
                        <i class="icon fas fa-globe-africa"></i>
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
            <div class="web-box3 container commom-bg rounded">
               <div class="row align-items-center justify-content-center">
                  <div class="col-3">
                     <button class="btn btn-primary rounded-circle">
                        <i class="icon fas fa-book"></i>
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
   <!-- NEW BOOK -->
   <section class="bg-light my-5  ">
      <div class="row justify-content-evenly align-items-center content" id="newsBookAppend">
         
         <div class=""></div>
         <hr class="newhr content">
         <!-- <div class="col-12 "> -->
         <div class="bsb my-5 content">
            <div class="text-left d-flex flex-row newB">
               <h2 class="fw-bold font-color-primary ms-5">
                  New Books
               </h2>
            </div>
            <!-- </div> -->
         </div>

      </div>
   </section>
   <!-- Best selling books Start -->
   <section class="bgBSB my-5">
      <div class="row bgBSB justify-content-evenly align-items-center" id="bestSellingBookAppend">
         
         <!-- <div class="col-12 "> -->
         <div class="bsb my-5">
            <div class="text-left d-flex flex-row ">
               <h2 class="fw-bold font-color-primary ms-5">
                  Best Selling Books
               </h2>
            </div>
            <!-- </div> -->
         </div>
         <!-- <div class=""></div>
         <hr class="newhr ">
         <div class="newsBook col-12  ">
            <div class="my-5">
               <div class="text-center">
                  <h2 class="nb fw-bold">Best Selling Books </h2>
               </div>
            </div>
         </div>
      </div> -->
   </section>
   <!-- Best selling books end -->
   <!-- Popular Books start -->
   <section class="bg-light my-5 ">
      <div class="text-left d-flex flex-row ">
         <div class="col-12 ">
            <h2 class="fw-bold font-color-primary ms-5">Popular Books</h2>
         </div>
      </div>
      <div class="row justify-content-evenly mt-3 ms-1 " id="popularBookAppend">


      </div>
   </section>
   <!-- Popular Books End -->
   <!-- Favourite Author Start -->
   <section class="container py-5">
      <div class="row ms-4">
         <div class="col-12 col-lg-6">
            <h3 class="font-color-primary fw-bold">Favorite Authors</h3>
         </div>
         <div class="col-12 col-lg-6  text-end ">
            <button class="btn authorViewAll"><a href="../View/author.php" class="text-white text-decoration-none"> View All</a></button>
         </div>
      </div>
      <div class="row  justify-content-evenly mt-5" id="favouriteAuthorAppend">

      </div>
   </section>
   <!-- Favourite Author End -->
   <section class=" mt-5 row  d-flex  bottomRow ">
      <!-- <div class="row  d-flex  bottomRow"> -->
      <div class="col-12 col-lg-3  col-sm-12  bottomInfo ">
         <div class="container border rounded border-dark bottomMinHeight">
            <div class="row align-items-center justify-content-cente mt-2">
               <div class="col-3">
                  <button class="btn rounded-circle">
                     <i class="fas fa-book fs-1 text-danger "></i>
                  </button>
               </div>
               <div class="col-9  bottomCardText">
                  <p class=" m-0 pt-3 fw-bold counter-one" id="totalBookShow"></p>
                  <p class=" m-0 pb-3">Total Books</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12 col-lg-3  col-sm-12   bottomInfo">
         <div class="container border rounded border-dark bottomMinHeight">
            <div class="row align-items-center justify-content-center mt-2">
               <div class="col-3">
                  <button class="btn rounded-circle">
                     <i class="fas fa-users fs-1 text-success "></i>
                  </button>
               </div>
               <div class="col-9  bottomCardText">
                  <p class=" m-0 pt-3 fw-bold counter-one" id="totalAuthorShow"></p>
                  <p class=" m-0 pb-3">Authors</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12 col-lg-3  col-sm-12  bottomInfo ">
         <div class="container border rounded border-dark bottomMinHeight">
            <div class="row align-items-center justify-content-center mt-2">
               <div class="col-3">
                  <button class="btn rounded-circle">
                     <i class="fas fa-shopping-cart fs-1 text-info"></i>
                  </button>
               </div>
               <div class="col-9  bottomCardText">
                  <p class=" m-0 pt-3 fw-bold counter-one" id="totalSoldBooksShow"></p>
                  <p class=" m-0  pb-3">Sold Books</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12 col-lg-3  col-sm-12  bottomInfo ">
         <div class="container border rounded border-dark bottomMinHeight">
            <div class="row align-items-center justify-content-center mt-2">
               <div class="col-3">
                  <button class="btn rounded-circle">
                     <i class="fas fa-smile fs-1 text-primary"></i>
                  </button>
               </div>
               <div class="col-9 bottomCardText">
                  <p class=" m-0 pt-3 fw-bold counter-one" id="totalUserShow"></p>
                  <p class=" m-0 pb-3">Customers</p>
               </div>
            </div>
         </div>
      </div>
      <!-- </div> -->
   </section>
   <footer id="footer" class="container-fluid commom-bg mt-5 ">
      <?php require "../View/footerCommon.php" ?>
   </footer>

   <a href="#welcome-section" onclick="topFunction()" id="myBtn" class="btn btn-primary  rounded  position-fixed  scroll-to-top  scroll-to-top-d">
      <i class="fas fa-angle-up"></i>
   </a>

   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="https://unpkg.com/scrollreveal"></script>
   <script src="../resource/UI Library/way_point/noframework.waypoints.js"></script>
   <script src="../resource/UI Library/slick/slick.js"></script>
   <script src="../resource/UI Library/way_point/jquery.waypoints.js"></script>
   <script src="../resource/UI Library/counter_up/counter_up.js"></script>
   <script src="../resource/js/common.js"></script>

   <script src="../resource/js/homepage.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
   <script type="text/javascript">
      // Counter_Up

      $("#CommonHomePage").addClass('border-bottom');

      // $(".counter-one").counterUp({
      //    delay: 10,
      //    time: 1000

      // })



      // Slider
      $(".slider").slick({
         arrows: false,
         autoplay: true,
         autoplaySpeed: 1000,

      });


      // Scroll Effect
      ScrollReveal({
         origin: 'top',
         distance: '30px',
         duration: 1000,
         reset: true,
      }).reveal('.content', {
         interval: 100
      });





      // Scroll To Top
      let mybutton = document.getElementById("myBtn");
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

      function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
      }
   </script>
</body>


</html>