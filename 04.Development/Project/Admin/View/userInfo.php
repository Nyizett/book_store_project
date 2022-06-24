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
    <title>User Info</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/userinfo.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/userInfo.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Navbar Start -->
            <div id="navbar" class="my-nav"></div>
            <!--User List-->
            <div class="col-8 offset-3">
                <p class="h3 mt-4">User List</p>
                <table class="table table-striped mt-4">

                    <tr class="bg-warning tb-text">
                        <th class="col-1">No</th>
                        <th class="col-2">Name</th>
                        <th class="col-3 ">Email</th>
                        <th class="col-2 ">Phone</th>
                        <th class="col-4">Address</th>
                        <th>Ban</th>
                    </tr>
                    <tbody id="bookData"></tbody>


                    <!-- require "../Controller/showUserInfoController.php";
                    $no = 1;

                    foreach ($result as $key => $value) {
                        global $no;
                        echo "<tr class=tb-text>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td >" . $value['user_name'] . "</td>";
                        echo "<td >" . $value['user_email'] . "</td>";
                        echo "<td >" . $value['user_phone'] . "</td>";
                        echo "<td >" . $value['user_address'] . "</td>";
                        echo "<td><a href='../Controller/banUserController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='remove-circle-outline' class='fs-4'></ion-icon></button></a></td>";
                    } -->

                </table>

            </div>
            <div class="btn-group col-8 offset-3 mb-3" role="group" aria-label="Basic outlined example" id="pagbtn"></div>
            <div class="col-8 offset-3">
                <p class="h3 mt-5">Ban List</p>
                <table class="table table-striped mt-4">

                    <tr class="bg-warning tb-text">
                        <th class="col-1">No</th>
                        <th class="col-2">Name</th>
                        <th class="col-3 ">Email</th>
                        <th class="col-2 ">Phone</th>
                        <th class="col-4">Address</th>
                        <th>UnBan</th>
                    </tr>
                    <?php
                    require "../Controller/showBanUserController.php";
                    $no = 1;

                    foreach ($result as $key => $value) {
                        global $no;
                        echo "<tr class=tb-text>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td >" . $value['user_name'] . "</td>";
                        echo "<td >" . $value['user_email'] . "</td>";
                        echo "<td >" . $value['user_phone'] . "</td>";
                        echo "<td >" . $value['user_address'] . "</td>";
                        echo "<td><a href='../Controller/unBanUserController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-success'><ion-icon name='checkmark-circle-outline' class='fs-4'></ion-icon></button></a></td>";
                    }
                    ?>

                </table>

            </div>
        </div>
    </div>
</body>

</html>