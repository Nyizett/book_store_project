<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order History</title>
<<<<<<< HEAD
=======
  <link rel="shortcut icon" href="../../Images/latestLogo.png" type="image/x-icon" width="100vw" />
>>>>>>> origin/main
  <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../resource/css/style.css" />
  <link rel="stylesheet" href="../resource/css/homepage.css" />
  <link rel="stylesheet" href="../resource/css/order_History.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
  <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../resource/css/common.css">
  <link rel="stylesheet" href="../resource/css/footer.css">
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
    <?php require "../View/common.php" ?>
  </nav>
  <!-- Header -->
  <div class="container header d-flex justify-content-between align-items-center p-4">
    <h3>Order History</h3>
    <div>
      <b>Home</b> -> order details
    </div>
  </div>
  <h5 class="fw-bolder text-primary">Order History</h5>
  <div>
    <table class="table">
        <tr class="text-center">
          <th >Items</th>
          <th >Name</th>
          <th >Price</th>
          <th >Quatity</th>
          <th >Total</th>
        </tr>
      <tbody id="orderData">

        

        <!-- <tr>
          <th scope="row"><img src="./education.jpg" alt="" class="images"></th>
          <td>Book Name<br> Author Name</td>
          <td>1000</td>
          <td>2</td>
          <td>2000</td>
        </tr>
        <tr>
          <th scope="row"><img src="./education.jpg" alt=""></th>
          <td>Book Name<br> Author Name</td>
          <td>4000</td>
          <td>1</td>
          <td>4000</td>
        </tr>
        <tr>
          <th scope="row"><img src="./education.jpg" alt=""></th>
          <td>Book Name<br> Author Name</td>
          <td>5000</td>
          <td>2</td>
          <td>10000</td>
        </tr> -->
      </tbody>
    </table>
  </div>
  <footer id="footer" class="container-fluid commom-bg  mt-5">
    <?php require "../View/footerCommon.php" ?>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../resource/js/common.js"></script>
  <script src="../resource/js/footerCommon.js"></script>
  <script src="../resource/js/orderDetail.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
  <script type="text/javascript">
    $(".slider").slick({
      prevArrow: '<span class="priv_arrow btn  btn-primary "><i class="fas fa-angle-left"></i></span>',
      nextArrow: '<span class="next_arrow btn btn-primary "><i class="fas fa-angle-right"></i></span>'
    });
  </script>
</body>

</html>