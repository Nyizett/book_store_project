<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../View/adminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Category</title>
  <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../resource/css/style.css" />
  <link rel="stylesheet" href="../resource/css/addFaqs.css" />
  <link rel="stylesheet" href="../resource/css/common.css">
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
      <!-- Navbar Start -->
      <div id="navbar" class="my-nav"></div>
      <div class="col-8 mt-4 offset-3">
        <div class="col">
          <a href="./setting.php" class="custombutton text-dec text-dark btn btn-sm-2 fw-bold mt-4 md-4">BACK</a>
        </div>
        <form action="../Controller/addCategoryController.php" method="POST">
          <div class="col-5 mt-3">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Write Category Name</label>
              <textarea class="customstyle form-control" name="catName" rows="3"></textarea>
            </div>

            <button class="custombutton btn btn-sm offset-7 mt-3 fw-bold col-5">ADD CATEGORY</button>

          </div>
        </form>

      </div>

    </div>

  </div>
</body>

</html>