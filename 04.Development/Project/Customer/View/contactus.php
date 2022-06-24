<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Contact Us</title>
   <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $favIcon[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/contactus.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css" />
   <link rel="stylesheet" href="../resource/UI Library/summer_note/summernote.css" />
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">
</head>

<body>

   <!-- Header -->
   <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
      <?php require "../View/common.php" ?>
   </nav>
   <!-- Header -->

   <div class="container-fluid header d-flex justify-content-between align-items-center p-4">
      <h3 class="ctUs ms-5">Contact us</h3>
      <div class="ctUs-home me-5"><b>Home</b> -> Contact us</div>
   </div>

   <section class="container-fluid">
      <div class="row">
         <div class="col-12">
            <img src="../resource/img/Rectangle 1.png" class="img-fluid" alt="" />
         </div>
      </div>
   </section>

   <section class="container" id="menu">
      <div class="row justify-content-center">
         <div class="my-5"></div>
         <div class="col-12">
            <div class="">
               <div class="text-center">
                  <h2 class="gt font-color-primary">GET IN TOUCH</h2>
                  <hr />
                  <p class="gt-text font-color-primary">
                     Feel free to contact us anytime.We will get back to you
                     as soon as we can.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container mb-5">
      <div class="row">
         <div class="col-12 col-lg-4 commom-bg">
            <div class="web-box p-1">
               <h3 class="text-white text-center p-4">Contact us</h3>
               <div class="d-flex justify-content-evenly flex-column p-2">
                  <div class="d-flex justify-content-between pt-4">
                     <span><i class="fas fa-map-marker text-white"></i></span>
                     <span><p class="shop-address  text-white">
                        <?php require "../Controller/webAddressController.php";
                        echo $webAddress[0]['web_address']; ?>
                     </p></span>
                  </div>
                  <div class="d-flex justify-content-between pt-4">
                     <span><i class="fas fa-envelope text-white"></i></span>
                     <span class="text-white shop-email"> <?php require "../Controller/webAddressController.php";
                        echo $webEmail[0]['web_email']; ?></span>
                  </div>
                  <div class="d-flex justify-content-between pt-4">
                     <i class="fas fa-phone text-white"></i>
                     <p class="shop-ph text-white">
                        <?php require "../Controller/webAddressController.php";
                        echo $webPhone[0]['web_phno']; ?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Contact -->
         <div class="col-12 col-lg-8">
            <div class="container details-text">
               <div class="row justify-content-center align-items-center">
                  <div class="col-12">
                     <h3 class="text-center font-color-primary pt-3">
                        We Would Love To Hear From You.
                     </h3>
                     <br />
                     <form action="../Controller/contactController.php" method="POST">
                        <div class="mb-1">
                           <input type="text" class="form-control" name="cName" aria-describedby="emailHelp" placeholder="Your Name" />
                        </div>
                        <div class="mb-2 pt-1">
                           <input type="email" class="form-control" name="cEmail" placeholder="Email" />
                        </div>
                        <textarea id="" class="msg-box pt-2" cols="99" rows="8" name="Message" placeholder="Type Your Message"></textarea>
                        <button type="submit" class="send mb-2">Send</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container-fluid">
      <div class="row">


         <iframe src='<?php require "../Controller/webAddressController.php";
                        echo $webGML[0]['g_map_link']; ?>' width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
   </section>

   <footer id="footer" class="container-fluid commom-bg  mt-5">
      <?php require "../View/footerCommon.php" ?>
   </footer>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/UI Library/summer_note/summernote.js"></script>
   <script>
      $(document).ready(function() {
         $("#summernote").summernote();
      });
   </script>
</body>

</html>