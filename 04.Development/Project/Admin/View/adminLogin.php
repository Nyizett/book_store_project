<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>
   <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/adminLogin.css" />
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script src="../resource/js/admin_login.js" defer></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
   <div class="container mt-3">
      <h2 class="text-center title">Admin Login</h2>
      <form action="../Controller/adminLoginController.php" method="POST">
         <div class="input-group flex-nowrap mt-5">
            <span class="input-group-text" id="addon-wrapping">
               <ion-icon name="person-outline"></ion-icon>
            </span>
            <input type="text" class="form-control" id="name" name="username" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
         </div>

         <div class="input-group flex-nowrap mt-5">
            <span class="input-group-text" id="addon-wrapping">
               <ion-icon name="lock-open-outline"></ion-icon>
            </span>
            <input type="password" class="form-control" id="psd" name="pswd" placeholder="Password">
         </div>
         <div class="d-grid mt-5">
            <button type="submit" class="btn btn-primary btn-block btn-lg fw-bold mt-3" id="lgbtn">Login</button>
         </div>
      </form>
   </div>
   
</body>

</html>
