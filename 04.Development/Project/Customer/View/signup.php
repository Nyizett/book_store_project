<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup</title>
   <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/signup.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>

   <div class="wrapper ">
      <div class="col-12 col-md-6 mx-auto ">
         <div class="row g-0 flex-column-reverse flex-md-row ">
            <div class="col-12 col-md-6  commom-bg">
               <div class="text-center mt-5 h-100 ">
                  <h3 class="text-white ">Welcome Back!</h3>
                  <p class="text-light mt-5 mx-1">To Keep Connected With Us Please Login</p>
                  <p class="text-light ">With Your Personal Infomation</p>
                  <a href="../View/signin.php"><button class="btn btn-light text-primary mt-4 px-4 fw-bolder">SIGN IN</button></a>
               </div>
            </div>
            <div class="col-12 col-md-6 inner-left">
               <div class="text-center m-3">
                  <h3 class="fw-bolder">Create Account</h3>
                  <p>use your email for registration</p>
                  <form id="signUpForm" method="POST">
                     <div class="form-control ">
                        <input class="mt-3 mb-3 px-3" type="text" name="name" id="name" placeholder="Name">
                        <input class="mb-3 px-3" type="password" name="password" id="password" placeholder="password">
                        <input class="mb-3 px-3" type="email" name="email" id="email" placeholder="Email">
                        <input class="mb-3 px-3" type="text" name="phone" id="phone" placeholder="Phone">
                        <input class="mb-3 px-3" type="text" name="address" id="address" placeholder="Address">
                     </div>
                     <button type="submit" class="btn btn-outline-primary mb-3 fw-bolder mt-3">SIGN UP</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>


   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/js/signup.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
   <script type="text/javascript">

   </script>
</body>

</html>