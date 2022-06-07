<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/Add-faq.css" />
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/js/setting.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="container-fluid mt-5">
<button class="custombutton btn btn-sm offset-4 fw-bold">BACK</button>
<div class="row offset-4">
<div class="col-5 mt-3">
<form action="../Controller/updateAdminController.php" method="POST">
<div class="mb-3">
<input type="hidden" name="id" value ="<?php require_once "../Controller/editAdminController.php";  echo $result[0]['id'];?>">
  <label for="exampleFormControlInput1" class="form-label">Write your name</label>
  <input type="text" value="<?php echo $result[0]["admin_username"]; ?>" class="customstyle form-control" id="name" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Write your email</label>
  <input type="email" value="<?php echo $result[0]["admin_email"]; ?>"  class="customstyle form-control" id="email" name="email" placeholder="example@email.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Creat your password</label>
  <input type="password" class="customstyle form-control" id="pwd" name="password" placeholder="">
</div>

<button type="submit" class="custombutton btn btn-sm offset-10 mt-3 fw-bold">SAVE</button>
</form>

</div>
</div>
</div>
</body>
</html>