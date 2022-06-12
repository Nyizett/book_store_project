<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Guide</title>
   <link rel="shortcut icon" href="../../Images/latestLogo.png" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/guide.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">
</head>

<body>
   <!-- Header -->
   <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
      <?php require "../View/common.php" ?>
   </nav>
   <!-- Header -->
   <div class="container-fluid header d-flex justify-content-between align-items-center p-4 box bg-light">
      <h3>Guide</h3>
      <div class=" me-5">
         <b>Home</b> -> Guide
      </div>
   </div>

   <section class="container-fluid mt-3 ms-1">
      <div class="row">

         <?php
         require "../Controller/showGuideController.php";

         foreach ($result as $key => $value) {
            global $no;
            echo '<div class="col-6  mt-4">';
            echo "<img class=img-thumbnail src='../../Images/" . $value['guide_image']. "'>";
            echo '<p class="text-center fs-3 fw-bold mt-2">' . $value['guide_text'];
            echo "</p>";
            echo "</div>";
         }
         ?>
         <!-- <div class="col-12 col-lg-4 mt-3">
            <img class="img-fluid" src="../resource/img/g1.png" alt="" />
            <p class="text-center fw-bold">New Books For You</p>
         </div>
         <div class="col-12 col-lg-4 mt-3">
            <img src="../resource/img/g2.png" alt="" class="img-fluid" width="300px" />
            <p class="fw-bold ms-5">Review Box</p>
         </div>

         <div class="col-12 col-lg-4 mt-3">
            <img src="../resource/img/g3.png" alt="" class="img-fluid" />
            <p class="fw-bold ms-5">5 Categories</p>
         </div>
      </div>

      <div class="row my-5">
         <div class="col-12 col-lg-4 mt-3">
            <img src="../resource/img/g4.png" alt="" class="img-fluid " />
            <p class="fw-bold ms-5">Book Release Date and Sizes of Book</p>
         </div>
         <div class="col-12 col-lg-4 mt-3">
            <img src="../resource/img/g5.png" alt="" class="img-fluid" />
            <p class="fw-bold text-center">Cart List</p>
         </div>
         <div class="col-12 col-lg-4 mt-3">
            <img src="../resource/img/g6.png" alt="" class="img-fluid" />
            <p class="fw-bold ms-5">Payments</p>
         </div> -->
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
</body>

</html>