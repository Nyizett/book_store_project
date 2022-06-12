<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher</title>
    <link rel="shortcut icon" href="../../Images/latestLogo.png" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/homepage.css" />
    <link rel="stylesheet" href="../resource/css/signup.css">
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
    <div class="container-fluid header">
        <div class="container d-flex justify-content-between align-items-center flex-wrap py-5 ">
            <h1>Checkout your order</h1>
            <span><b>Home</b> -> Checkout</span>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <span class="border-dark border-bottom fs-4 py-2">Voucher</span>
                <div class="mt-4 p-4 border border-1">
                    <table class="table mb-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Item</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>2</td>
                                <td>1200 MMK</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>3</td>
                                <td>1500 MMK</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>1</td>
                                <td>2000 MMK</td>
                            </tr>
                            <tr class="table-active">
                                <td colspan="3"> <b>Total Amount :</b> </td>
                                <td>4700 MMK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 mt-5 mx-4">
                <div>
                    <p>Name : <span class="ms-3">Mg Mg</span></p>
                    <p>Phone : <span class="ms-3">09 111 111 111</span></p>
                    <p>Email : <span class="ms-3">example@gamil.com</span></p>
                    <p>Address : <span class="ms-3">No.(404), Not Found str, Dismiss City</span></p>
                    <p>Payment : <span class="ms-3">Cash On Delivery</span></p>
                </div>
                <button class="btn btn-primary">Place Order</button>
            </div>


        </div>
    </div>
    <footer id="footer" class="container-fluid commom-bg  mt-5">
        <?php require "../View/footerCommon.php" ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../resource/js/common.js"></script>
    <script src="../resource/js/footerCommon.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>