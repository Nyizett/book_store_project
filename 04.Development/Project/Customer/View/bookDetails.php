<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book_Details</title>
   <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $favIcon[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/bookDetails.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">


</head>

<body>

   <script>
      let id = <?php echo $_GET['id'] ?>
   </script>

   <!-- Header -->
   <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
      <?php require "../View/common.php" ?>
   </nav>
   <!-- Header -->

   <section class="container-fluid bg-white">
      <div class="row align-items-center justify-content-center min-vh-100">
         <div class=" col-12  col-lg-4 ps-5 ms-3">
            <div class="slider slide-bg d-flex">
               <div class="detail mb-5">
                  <?php
                  echo "<img  id='" . $result[0]['book_image'] . "'class='responimagee img-fluid mt-3 bookimage' src='../../Images/" . $result[0]['book_image'] . "' alt=''>"
                  ?>
               </div>

            </div>
         </div>

         <div class="col-12 col-lg-2"></div>


         <div class="responad col-10 col-lg-5">
            <div class="des-box">
               <div class="card mb-5 mb-lg-0 card-width ">
                  <div class="card-body d-flex flex-column ">
                     <p class="card-title fw-bold mb-0 font-color-primary"></p>
                     <?php echo " <small  class='card-text d-block mb-2 fs-3 fw-bold booknames'>" . $result[0]['book_name'] . " </small>";
                     ?>



                     <?php
                     if ($result[0]['author_name'] != 'None') {
                        echo " <small class='card-text d-block mb-2 font-color-secondary authors'>" . $result[0]['author_name'] . " </small>";
                     } else {
                        echo " <small class='card-text d-block mb-2 font-color-secondary authors'> Anonymous </small>";
                     }

                     ?>
                     <small>
                        <?php
                        $stars = $result[0]['rating'];
                        for ($i = 0; $i < 5; $i++) {
                           if ($i < $stars) {
                              echo  " 
                              <i class='fa-solid fa-star text-warning'></i>";
                           } else {
                              echo "
                              <i class='fa-solid fa-star'></i>
                              ";
                           }
                        }
                        ?>
                     </small>




                     <div class="d-flex justify-content-between align-items-center">
                        <?php echo " <p class='fw-bold mb-0 font-color-primary bookprices'>" . number_format($result[0]['book_price']) . " MMK</p>"; ?>
                     </div>

                     <div class="details-text  mt-2">
                        <?php echo " <p class='p-3'>" . $result[0]['book_description'] . "</p>" ?>
                     </div>
                  </div>

                  <div class="d-flex col-md-12 col-sm-10 detail-box">
                     <div class=" col-md-10 col-sm-6 d-flex  mb-3 qty-box">
                        <div class="d-flex justify-content-center  col-md-5 bg-light ms-3  rounded mt-3 qty ">
                           <span class="minus">-</span>
                           <input type="number" class="counts" id="qty" name="qty" value="1">
                           <span class="plus">+</span>
                        </div>

                        <div class="mt-3">

                           <button class="btn cartbtn"><i class="fas fa-shopping-cart mx-1"></i> Add to Cart</button>
                           <button class="btn addbtn" id="addbtn"><i class="fas fa-shopping-cart mx-1"></i></button>
                        </div>
                     </div>



                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container">

      <?php echo "<div id='" . $result[0]['category_id'] . "'  class='row mt-5 reviews'>";  ?>

      <div class="col-md-4 desc">
         <div class="col-md-12">
            <p class="titles commom-bg">Description</p>
         </div>
         <div class="col-md-12">
            <div class="descbox">
               <div class="desctable ">
                  <table class="table table-bordered m-5">
                     <tr>
                        <td>Pages</td>
                        <?php echo "<td>" . $result[0]['book_pages'] . "</td>" ?>
                     </tr>
                     <tr>
                        <td>Release Date</td>
                        <?php echo "<td>" . $result[0]['book_established'] . "</td>" ?>
                     </tr>
                     <tr>
                        <td>Size of Book</td>
                        <?php echo "<td>" . $result[0]['book_size'] . "</td>" ?>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class="review col-12 col-lg-1"></div>
      <div class="col-12 col-lg-5"></div>
      </div>
   </section>
   <footer id="footer" class="container-fluid commom-bg  mt-5">
      <?php require "../View/footerCommon.php" ?>
   </footer>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/js/homepage.js"></script>

   <!-- <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/js/bookDetails.js"></script>

   <script type="text/javascript">

   </script>
</body>

</html>