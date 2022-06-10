<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher</title>
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

    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <span class="border-dark border-bottom fs-4 py-2">Billing Information</span>
                <form action="" class="mt-4">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="mb-2">Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="eg. Mg Mg">
                        </div>
                        <div class="col">
                            <label for="email" class="mb-2">Email Address</label>
                            <input class="form-control" type="text" name="email" id="email" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="phone" class="mb-2">Phone</label>
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="09 xxx xxx xxx">
                        </div>
                        <div class="col">
                            <label for="city" class="mb-2">City</label>
                            <input class="form-control" type="text" name="city" id="city" placeholder="eg. Yangon">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="mb-2">Address</label>
                        <textarea class="form-control" type="text" name="address" id="address"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="cod" value="cod">
                            <label class="form-check-label" for="cod">
                                Cash On Delivery
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="master_card" value="master_card">
                            <label class="form-check-label" for="master_card">
                                Master Card
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="visa" value="visa">
                            <label class="form-check-label" for="visa">
                                VISA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="mobile_banking" value="mobile_banking">
                            <label class="form-check-label" for="mobile_banking">
                                Mobile Banking
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary">Continue</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
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