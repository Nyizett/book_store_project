<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Info</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/shopInfo.css" />
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
            <!-- Navbar Start -->
            <div id="navbar" class="my-nav"></div>
            <!--Shop List-->
            <div class="col-8 offset-3">
                <!-- Yangon Shop List -->
                <p class="h3 mt-4 ">Yangon Shop List</p>
                <table class="table table-striped mt-3">
                    <tr class="bg-danger">
                        <th>No</th>
                        <th class="col-1">Image</th>
                        <th class="col-2">Name</th>
                        <th class="col-2">Address</th>
                        <th class="col-2">Phone</th>
                        <th>Website</th>
                        <th colspan=2>Actions</th>
                    </tr>
                    <?php
                    $count = 1;
                    require "../Controller/ygnshopListController.php";
                    foreach ($result as $key => $value) {
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td class='shop-img'> <img src='../../Images/" . $value['shop_image'] . "' </td>";
                        echo "<td>" . $value['shop_name'] . "</td>";
                        echo "<td>" . $value['shop_address'] . "</td>";
                        echo "<td class='aut-bio'>" . $value['shop_phone_no'] . "</td>";
                        echo "<td>" . $value['shop_website'] . "</td>";
                        echo "<td><a href='../View/editShop.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                        echo "<td><a href='../Controller/deleteShopController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                        echo "</tr>";
                        $count++;
                    }
                    ?>

                </table>
                <a href="../View/addShop.php" class="text-dec text-dark "><button class=" text-dec btn fw-bold custombutton btn-sm offset-10 col-2 mb-4">ADD SHOP</button></a>
                <!-- Mandalay Shop List -->
                <div class="row">
                    <p class="h3 mt-4">Mandalay Shop List</p>
                    <table class="table table-striped mt-3 ms-2">
                        <tr class="tb-text bg-danger">
                            <th>No</th>
                            <th class="col-1">Image</th>
                            <th class="col-1">Name</th>
                            <th class="col-4">Address</th>
                            <th class="col-2">Phone</th>
                            <th>Website</th>
                            <th colspan=2>Actions</th>
                        </tr>
                        <?php
                        $count = 1;
                        require "../Controller/mdyshopListController.php";
                        foreach ($result as $key => $value) {
                            echo "<tr class='tb-text'>";
                            echo "<td>" . $count . "</td>";
                            echo "<td class='shop-img'> <img src='../../Images/" . $value['shop_image'] . "' </td>";
                            echo "<td>" . $value['shop_name'] . "</td>";
                            echo "<td>" . $value['shop_address'] . "</td>";
                            echo "<td class='aut-bio'>" . $value['shop_phone_no'] . "</td>";
                            echo "<td>" . $value['shop_website'] . "</td>";
                            echo "<td><a href='../View/editShop.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                            echo "<td><a href='../Controller/deleteShopController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                            echo "</tr>";
                            $count++;
                        }
                        ?>
                    </table>
                    <a href="../View/addShop.php" class="text-dec text-dark "><button class=" text-dec btn fw-bold custombutton btn-sm offset-10 col-2 mb-4">ADD SHOP</button></a>
                </div>

                <!-- Nay Pyi Taw Shop List -->
                <div class="row">
                    <p class="h3 mt-4">Nay Pyi Taw Shop List</p>
                    <table class="table table-striped mt-3 ms-2">
                        <tr class="tb-text bg-danger">
                            <th>No</th>
                            <th class="col-1">Image</th>
                            <th class="col-1">Name</th>
                            <th class="col-4">Address</th>
                            <th class="col-2">Phone</th>
                            <th>Website</th>
                            <th colspan=2>Actions</th>
                        </tr>
                        <?php
                        $count = 1;
                        require "../Controller/nptshopListController.php";
                        foreach ($result as $key => $value) {
                            echo "<tr class='tb-text'>";
                            echo "<td>" . $count . "</td>";
                            echo "<td class='shop-img'> <img src='../../Images/" . $value['shop_image'] . "' </td>";
                            echo "<td>" . $value['shop_name'] . "</td>";
                            echo "<td>" . $value['shop_address'] . "</td>";
                            echo "<td>" . $value['shop_phone_no'] . "</td>";
                            echo "<td>" . $value['shop_website'] . "</td>";
                            echo "<td><a href='../View/editShop.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                            echo "<td><a href='../Controller/deleteShopController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                            echo "</tr>";
                            $count++;
                        }
                        ?>

                    </table>
                    <a href="../View/addShop.php" class="text-dec text-dark "><button class=" text-dec btn fw-bold custombutton btn-sm offset-10 col-2 mb-4">ADD SHOP</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>