<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Categories</title>
   <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $favIcon[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/categories.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">
</head>

<body>

   <script>
      let categoryId = <?php if (isset($_GET["id"])) {
                           echo $_GET["id"];
                        } else echo 1 ?>;
   </script>
   <!-- Header -->
   <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
      <?php require "./common.php" ?>
   </nav>
   <!-- Header -->
   <div class="responheader bg p-4 ">
      <div class="container d-flex justify-content-between align-items-center cat-header">
         <h3 class="text-primary categoryName"></h3>
         <div class="text-primary">
            <b>Home</b> -> <span class="categoryName"></span>
         </div>
      </div>
   </div>
   </div>
   <div class="container-fluid d-flex justify-content-between align-items-center my-4 bg-white">
      <div class="container ">
         <div class="d-flex flex-row flex-wrap w-100">

            <?php
            $id = 1;
            if (isset($_GET["id"])) {
               $id = $_GET["id"];
            }

            require "../Controller/bookListController.php";
            if (count($result) == 0) {
               echo "<div class='d-flex flex-column justify-content-center align-items-center mt-5 noBook'>";
               echo "<h4>There is no book <span class='categoryName'></span>.</h4>";
               echo "</div>";
            }
            for ($i = 0; $i < count($result); $i++) {
               echo "<div class='catCard col-lg-3 col-md-6 col-sm-10 text-light  d-flex justify-content-between align-items-center  my-2'>";
               echo "<div class='my-card' >";
               echo " <div class='my-card-img'>";
               echo  "<img src='../../Images/" . $result[$i]["book_image"] . "' 
                     alt=''/>";
               echo "</div>";
               echo "<div class='my-card-info'>";
               echo "<h5 class=' catTitle text-break'>" . $result[$i]['book_name'] . "</h5>";
               echo "<div class='mb-2'>";
               echo "<span style='font-size:x-small'>";
               $star = $result[$i]['rating'];
               for ($s = 0; $s < 5; $s++) {
                  if ($star > $s) {
                     echo "  <i class='fa-solid fa-star text-warning'></i>";
                  } else {
                     echo " <i class='fa-solid fa-star text-dark'></i>";
                  }
               }
               echo "</span><br>";
               echo "  <span style='font-size:x-small'>" . $result[$i]['author_name'] . "</span> ";
               echo "</div>";
               echo " <p class='catPrice' style='font-weight:500 ;'>" . number_format($result[$i]['book_price']) . " MMK</p>";
               echo " <button class='btn  card-button px-1 rounded-1 me-1' id='" . $result[$i]['id'] . "' ><i class='fa-solid fa-cart-shopping me-1'></i>add
                  to
                  cart</button>";
               echo " <span id='" . $result[$i]['id'] . "' class='btn btn-primary bookdetail card-button view-btn'><i class='fa-solid fa-eye'></i> " . $result[$i]['view_count'] . "</span>";
               echo "</div>";
               echo "</div>";
               echo "</div>";
            }

            ?>


         </div>
      </div>
   </div>

   <footer id="footer" class="container-fluid commom-bg  mt-5">
      <?php require "../View/footerCommon.php" ?>
   </footer>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>

   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/js/categories.js" defer></script>
   <script type="text/javascript">


   </script>


</body>

</html>