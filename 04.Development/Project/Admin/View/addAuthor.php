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
    <title>Add Author</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/dashboard.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="navbar" class="my-nav"></div>
            <!-- Insert Author -->
            <div class="col-8 offset-3">
            <a href="./authorInfo.php" class="custombutton text-dec text-dark btn btn-sm-2 fw-bold ms-4 mt-4">BACK</a>
                <p class="h3 mt-4 ms-4">Insert Author</p>
                
                <form action="../Controller/addAuthorController.php" method="POST" enctype="multipart/form-data">
                    <div class="row container col-md-7 mt-3 ">
                        <div class="mb-3 mt-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="input-box form-control" name="autName">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pwd" class="form-label">Image</label>
                            <input type="file" class="form-control" name="autImage">
                        </div>

                        <label for="comment">Biography</label>
                        <textarea class="input-box form-control ms-2" rows="8" name="autBio"></textarea>
                        
                        <button type="submit" class="custombutton btn fw-bold mt-4 ms-1">ADD AUTHOR</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>