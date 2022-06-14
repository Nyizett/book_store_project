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
    <title>Order Detail</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
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
            <!--Order Detail-->
            <div class="col-8 offset-3">
                <p class="h4 mt-5">Order Detail</p>
                <table class="table table-striped mt-4 col-10">
                    <tr class="tb-text bg-danger">
                        <th class="col-1">No</th>
                        <th class="col-2">BookName</th>
                        <th class="col-3">Price</th>
                        <th class="col-2">Quantity</th>
                        <th class="col-1">Total</th>
                    </tr>

                    <?php
                    require_once "../Model/DBConnection.php"; {
                        $id =  $_GET['id'];

                        //Call DB Connection
                        $db =  new DBConnect();
                        $dbconnect = $db->connect();

                        $sql = $dbconnect->prepare(
                       "SELECT m_book.book_name,m_book.book_price,m_order_details.order_d_quantity,m_order_details.total_amount FROM `m_order_details` 
                        LEFT JOIN m_book ON m_order_details.book_id =m_book.id 
                        WHERE m_order_details.user_id=:id ; "
                        );

                        $sql->bindValue(":id", $id);

                        $sql->execute();

                        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                        // echo "<pre>";
                        // print_r($result);


                        $no = 1;

                        foreach ($result as $key => $value) {
                            global $no;
                            echo "<tr class=tb-text>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td >" . $value['book_name'] . "</td>";
                            echo "<td >" .number_format($value['book_price'])." MMK" . "</td>";
                            echo "<td >" . $value['order_d_quantity'] . "</td>";
                            echo "<td >" .number_format($value['total_amount'])." MMK" . "</td>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>