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
    <title>Add Shop</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Navigation Bar -->
            <div id="navbar" class="my-nav"></div>
            <!--Add Shop-->
            <div class="col-8 offset-3">
            <a href="./shopInfo.php" class="custombutton text-dec text-dark btn btn-sm-2 fw-bold ms-4 mt-4">BACK</a>
                <p class="h4 mt-4 ms-4">Insert Shop</p>
                <form action="../Controller/addShopController.php" method="POST" enctype="multipart/form-data">
                    <div class="row container col-md-8 mt-3 ">
                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <label for="" class="form-label">Shop</label><br>
                                <select name="shopCity" id="" class="custombutton btn btn-white col-12">
                                    <option class="custombutton" value="Yangon">Yangon</option>
                                    <option class="custombutton" value="Mandalay">Mandalay</option>
                                    <option class="custombutton" value="NayPyiTaw">NayPyiTaw</option>
                                </select>
                            </div>
                            <div class="col mb-3 mt-3 ms-4">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="input-box  input-box form-control" name="shopName">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="" class="form-label">Phone</label>
                                <input type="number" class="input-box  input-box form-control"  name="shopPh">
                            </div>
                            <div class="col mb-3 mt-3 ms-4">
                                <label for="" class="form-label">Website</label>
                                <input type="text" class="input-box  input-box form-control"  name="shopWeb">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control"  name="shopImage">
                            </div>
                        </div>
                        <div class="row">
                            <label for="">Address</label>
                            <textarea class="input-box  input-box form-control ms-2" rows="8" id="comment" name="shopAddress"></textarea>
                        </div>
                        <button type="submit" class="custombutton btn fw-bold mt-4 mb-4">ADD SHOP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>