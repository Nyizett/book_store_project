<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shops</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/homepage.css" />
    <link rel="stylesheet" href="../resource/css/shops.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../resource/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../resource/css/common.css">
</head>

<body>
    <script>
        let cityName = <?php if (isset($_GET["name"])) {
                            echo $_GET["name"];
                        } else echo '"' . 'Yangon' . '";'; ?>
    </script>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
        <?php require "../View/common.php" ?>
    </nav>
    <!-- Header -->

    <div class="text-primary header d-flex justify-content-between align-items-center p-4">
        <h3 class="shop ms-5">Shops</h3>
        <div class="me-5">
            <b class="homeShop">Home</b> -> Shop
        </div>
    </div>
    <div class="container d-flex justify-content-between align-items-center p-4 mx-6 col-12 col-md-12 col-lg-4 ">
        <button class="activeCityBtn cityBtn btn  btn-outline-primary " type="button" id="ygnBtn">Yangon</button>
        <button class="cityBtn btn btn-outline-primary " type="button" id="mdyBtn">Mandalay</button>
        <button class="cityBtn btn btn-outline-primary " type="button" id="nptBtn">NayPyiTaw</button>

    </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row g-0" id="shopContainer">
                <!--
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="my-card m-5 border border-primary rounded-2">
                            <div class="my-card-img">
                                <img src="../../Images/bootstrap.png" alt="">
                                <h6 class="text-primary mt-4"><b> Yar Pyae Book Shop</b></h6>
                                <div class="text-primary m-2 shop_info">U Tun Lin Chan,Hlae Tan ,Kamayout,Yangon</div>
                                <div class="text-primary m-2 shop_info">097665577,0876567899</div>
                                <div class="text-primary m-2 shop_info">www.yarpyae.com</div>
                            </div>
                        </div>
                    </div>
                -->
            </div>
        </div>
    </div>
    <footer id="footer" class="container-fluid commom-bg  mt-5">
        <?php require "../View/footerCommon.php" ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../resource/js/shop.js"></script>
    <script src="../resource/js/common.js"></script>
    <script src="../resource/js/footerCommon.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
    <script type="text/javascript">
        $("#CommonShops").addClass("border-bottom");
    </script>
</body>

</html>