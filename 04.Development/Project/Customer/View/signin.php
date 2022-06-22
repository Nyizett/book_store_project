<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signin</title>
   <link rel="shortcut icon" href="../../Images/latestLogo.png" type="image/x-icon" width="fit-content" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/signin.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<body>


   <div class="wrapper">
      <div class="col-12 col-md-6 mx-auto">
         <div class="row g-0 flex-column-reverse flex-md-row">
            <div class="col-12 col-md-6 inner-left">
               <div class="text-center m-5">
                  <h3 class="my-class text-primary mb-3">Sign in</h3>
                  <form id="signinForm">
                     <input class="form-control mb-3" type="email" name="email" id="email" placeholder="email">
                     <input class="form-control mb-3" type="password" name="password" id="password" placeholder="password">
                     <button type="submit" class="btn btn-outline-primary mb-3">Sign in</button>
                  </form>
                  <h6 class="text-primary">forgot password?</h6>
               </div>
            </div>
            <div class="col-12 col-md-6 inner-right">
               <div class="text-center m-5 h-100">
                  <h2 class="text-white">Welcome To Our Book Store!</h2>
                  <p class="text-light">New Here!</p>
                  <a href="../View/signup.php"> <button class="btn btn-light text-primary">Sign Up</button> </a>
               </div>
            </div>
         </div>
      </div>
   </div>


   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/js/signin.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
   <script type="text/javascript">

   </script>
</body>

</html>