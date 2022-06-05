<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Category</title>
  <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../resource/css/style.css" />
  <link rel="stylesheet" href="../resource/css/Add-faq.css" />
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
      <div class="col-8 mt-4">
        <button class="custombutton btn btn-sm offset-4 fw-bold">BACK</button>
        <div class="row offset-4">
          <form action="../Controller/updateDBCategoryController.php" method="POST">
            <div class="col-5 mt-3">
              <div class="mb-3">
              <input type="hidden" name="id" value ="<?php require_once "../Controller/editCategoryController.php";  echo $result[0]['id'];?>">
                <label for="exampleFormControlTextarea1" class="form-label">Write Category Name</label>
                <textarea class="customstyle form-control" name="catName" rows="3"><?php echo $result[0]['category_name'];?></textarea>
              </div>

              <button class="custombutton btn btn-sm offset-10 mt-3 fw-bold">SAVE</button>

            </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</body>

</html>