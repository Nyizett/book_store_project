<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../View/adminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Info</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";
                                                    echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/authorInfo.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <!-- <link rel="stylesheet" href="../resource/css/dashboard.css"> -->
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/authorinfo.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="navbar" class="my-nav"></div>
            <!-- Author List-->
            <div class="col-10 offset-2 ">
                <p class="tttt h3 mt-4">Author List</p>
                <a href="../View/addAuthor.php" class="text-dec  text-dark "><button class=" text-dec btn fw-bold custombutton btn-sm offset-10 col-2 mb-4">ADD AUTHOR</button></a>
                <table class=" table table-striped table-sm mt-4">
                    <tr class="tb-text">
                        <th>No</th>
                        <th class="col-1">Name</th>
                        <th class="col-1">Image</th>
                        <th>Biography</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    <tbody id="bookData"></tbody>
                    
                </table>
                <a href="../View/addAuthor.php" class="text-dec  text-dark "><button class=" text-dec btn fw-bold custombutton btn-sm offset-10 col-2 mb-4">ADD AUTHOR</button></a>
            </div>
            <div class="btn-group col-8 offset-3 mb-3" role="group" aria-label="Basic outlined example" id="pagbtn"></div>
        </div>
    </div>
</body>

</html>