<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../View/adminLogin.php");
}
// else{
//     echo $_SESSION['username'];
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Admin</title>
  <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
  <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../resource/css/style.css" />
  <link rel="stylesheet" href="../resource/css/common.css" />
  <link rel="stylesheet" href="../resource/css/addFaqs.css" />
  <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <script src="../resource/js/setting.js"></script>
  <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
  <script src="../resource/js/common.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <div class="container-fluid">
    
    <div class="row">
    <div id="navbar" class="my-nav"></div>
      <div class="col-10 offset-3 mt-5">
        <a href="./setting.php" class="custombutton text-dec text-dark btn btn-sm-2 fw-bold mt-4 md-4">BACK</a>
      </div>
      <form action="../Controller/addAdminController.php" method="POST" class="col-10 offset-3">
        <div class="col-5 mt-3">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Write your name</label>
            <input type="text" class="customstyle form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Write your email</label>
            <input type="email" class="customstyle form-control" id="email" name="email" placeholder="example@email.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Create your password</label>
            <input type="password" class="customstyle form-control" id="pwd" name="password" placeholder="">
          </div>

          <button type="submit" class="custombutton btn btn-sm offset-9 mt-3 fw-bold col-3">ADD ADMIN</button>
      </form>

    </div>
  </div>
  </div>
</body>

</html>