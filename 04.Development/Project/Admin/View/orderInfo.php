<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Info</title>
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
            <!--Order List-->
            <div class="col-8 offset-3">
                <ul class="list-group mt-4">
                    <li class="h4 mt-3 d-flex justify-content-between align-items-center">
                        Order List
                        <!-- <span class="badge bg-warning rounded-pill"><a href="./orderDetail.php" class="text-dark">Order Detail</a></span> -->
                    </li>
                </ul>
                <table class="table table-striped mt-4">
                    <tr class="tb-text bg-warning ">
                        <th class="col-1">No</th>
                        <th class="col-2">CustomerName</th>
                        <th class="col-3 ">Address</th>
                        <th class="col-1 ">City</th>
                        <th class="col-2">Total</th>
                        <th class="col-2">Delivery Fees</th>
                        <th class="col-1">Details</th>
                    </tr>

                    <?php
                    require "../Controller/showOrderInfoController.php";
                    $no = 1;

                    foreach ($result as $key => $value) {
                        global $no;
                        echo "<tr class=tb-text>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td >" . $value['user_name'] . "</td>";
                        echo "<td >" . $value['user_address'] . "</td>";
                        echo "<td >" . $value['delivery_city_name'] . "</td>";
                        echo "<td >" .number_format($value['total_amount'])." MMK" . "</td>";
                        echo "<td >" .number_format($value['delivery_fees'])." MMK" . "</td>";
                        echo "<td><a href='../View/orderDetail.php?id=" . $value['customer_id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='enter-outline'></ion-icon></button></a></td>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>