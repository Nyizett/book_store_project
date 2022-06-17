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
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/dashboard.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/common.js"></script>
    <script src="../resource/js/dashboardChart.js" defer></script>
    <script src="../resource/js/navigation.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body>
    <script>
        let adminname = <?php echo $_GET["adname"] ?>
    </script>
    <div class="container-fluid">
        <div class="row">
            <!-- Navbar Start -->
            <div id="navbar" class="my-nav col-4 justify-content-center"></div>
            <!-- Dashboard -->
            <div class="dasPg col-sm-8 col-7 offset-3">
                <div class="top-box offset-8">
                    <!-- <div class="top">
                        <ion-icon name="person" class="fs-2 text-primary"></ion-icon>
                    </div> -->
                    <div class="top"><a href="../../Customer/View/homepage.php" class="cusPag me-md-4 text-dec text-dark fw-bold text-nowrap">CustomerPage &#8594;</a></div>
                </div>
                <div class="box">
                    <div class="box1 box2">
                        <span class="removeicon"><ion-icon name="person-circle-outline" class="iconic"></ion-icon></span>
                        <p class="number">User</p>
                        <p class="quantity fs-4 mt-1"><?php require "../Controller/dashboardController.php";
                                                        echo $userQty[0]['userQty']; ?></p>
                    </div>
                    <div class="box1">
                        <span class="removeicon"><ion-icon name="cart-outline" class="iconic"></ion-icon></span>
                        <p class="number">Sale</p>
                        <p class="quantity"><?php require "../Controller/dashboardController.php";
                                            echo number_format($totalPrice[0]['totalPrice']) . " MMK"; ?></p>
                    </div>
                    <div class="box1">
                        <span class="removeicon"><ion-icon name="document-outline" class="iconic"></ion-icon></span>
                        <p class="number">Order</p>
                        <p class="quantity"><?php require "../Controller/dashboardController.php";
                                            echo number_format($totalOrder[0]['totalOrder']); ?></p>
                    </div>
                </div>

                <!-- Monthly Order Chart -->
                <div class="chart mt-3">
                    <canvas id="myChart"></canvas>
                </div>




                <div class="ordertable row mt-4 ms-1">
                    <p class="h4 mt-1">Daily Order</p>
                    <table class="table table-striped mt-4 mb-4 ms-2">
                        <tr class="tb-text bg-warning">
                            <th class="col-1">No</th>
                            <th class="col-2">Customer</th>
                            <th class="col-2">Date</th>
                            <th class="col-2 ">Amount</th>
                            <th class="col-3">Address</th>
                            <th class="col-2">Delivery Fees</th>
                        </tr>

                        <?php
                        require "../Controller/dailyOrderController.php";
                        $no = 1;

                        foreach ($result as $key => $value) {
                            global $no;
                            echo "<tr class=tb-text>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td >" . $value['user_name'] . "</td>";
                            echo "<td >" . $value['create_date'] . "</td>";
                            echo "<td >" .number_format( $value['total_amount']-$value['delivery_fees'])." MMK" . "</td>";
                            echo "<td >" . $value['user_address'] . "</td>";
                            echo "<td >" . number_format( $value['delivery_fees'])." MMK" . "</td>";
                        }
                        ?>

                    </table>
                </div>

            </div>

        </div>
    </div>
</body>

</html>