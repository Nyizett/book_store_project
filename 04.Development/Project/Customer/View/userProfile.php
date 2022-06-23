<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Profile</title>
   <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $favIcon[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/user_profile.css" />
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
   <div class="container-fluid header d-flex justify-content-between align-items-center p-4 bg-light">
      <h3 class="ms-5 font-color-primary">View Profile</h3>
      <div class="me-5 font-color-primary"><b>Home</b> -> Profile</div>
   </div>
   <section class="container-fluid mt-5">
      <div class="row">

         <form id="signUpForm" method="POST">
            <div class="col-12 col-lg-4 mx-5">

               <div class="mb-3">
                  <label for="exampleInputName" class="form-label font-color-primary fw-bold">NAME</label>
                  <input type="text" class="form-control" name="name" id="usernameInput" />
               </div>

            </div>


      </div>

      <div class="row mt-5">


         <div class="col-12 col-lg-4 mx-5">

            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label font-color-primary fw-bold">PHONE</label>
               <input type="number" class="form-control" name="phone" id="phoneInput" />
            </div>

         </div>

         <div class="col-12 col-lg-4 mx-5">

            <div class="mb-3">
               <label for="exampleFormControlTextarea1" class="form-label font-color-primary fw-bold">ADDRESS</label>
               <textarea class="form-control" id="addressInput" name="address" rows="3"></textarea>
            </div>

         </div>
      </div>
      <div class="row">
         <div class="col-12  mx-5">
            <button type="submit" class="btn btn-primary me-5 commom-bg">SAVE</button>
         </div>
      </div>
      </form>
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
   <script src="../resource/js/userprofile.js"></script>
</body>

</html>