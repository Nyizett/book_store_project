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
    <title>Community</title>
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
            <!--Contact Form-->
            <div class="col-8 offset-3">
                <p class="h3 mt-4">Contact Form</p>
                <div class="row">
                    <table class="table table-striped mt-4 ms-3">
                        <tr class="tb-text bg-warning">
                            <th class="col-1">No</th>
                            <th class="col-2">Name</th>
                            <th class="col-3 ">Email</th>
                            <th class="col-6">message</th>
                        </tr>
                        <?php
                        $count = 1;
                        require "../Controller/contactFormController.php";
                        foreach ($result as $key => $value) {
                            echo "<tr class='tb-text'>";
                            echo "<td>" . $count . "</td>";
                            echo "<td>" . $value['contact_form_name'] . "</td>";
                            echo "<td>" . $value['contact_form_email'] . "</td>";
                            echo "<td>" . $value['contact_form_message'] . "</td>";
                            echo "</tr>";
                            $count++;
                        }
                        ?>
                    </table>
                </div>
                <!-- Customers' View and Rating -->
                <div class="row">
                    <p class="h3 mt-4">Customers' View and Rating </p>
                    <table class="table table-striped mt-3 ms-3">
                        <tr class="tb-text bg-danger">
                            <th class="col-1">No</th>
                            <th class="col-1">Name</th>
                            <th class="col-1">Book</th>
                            <th class="col-2">Category</th>
                            <th class="col-1">Rating</th>
                            <th class="col-6">Comment</th>
                        </tr>
                        <?php
                        $count = 1;
                        require "../Controller/feedbackController.php";
                        foreach ($result as $key => $value) {
                            echo "<tr class='tb-text'>";
                            echo "<td>" . $count . "</td>";
                            echo "<td>" . $value['user_name'] . "</td>";
                            echo "<td>" . $value['book_name'] . "</td>";
                            echo "<td>" . $value['category_name'] . "</td>";
                            echo "<td>" . $value['customer_rating'] . "</td>";
                            echo "<td>" . $value['customer_comment'] . "</td>";
                            echo "</tr>";
                            $count++;
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>