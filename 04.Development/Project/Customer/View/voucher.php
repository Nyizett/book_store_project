<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/homepage.css" />
    <link rel="stylesheet" href="../resource/css/voucher.css" />
    <link rel="stylesheet" href="../resource/css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/common.css">
</head>

<body>

    <script>

    </script>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
        <?php require "../View/common.php" ?>
    </nav>
    <!-- Header -->
    <div class="container-fluid header">
        <div class="header d-flex justify-content-between align-items-center flex-wrap py-5 ">
            <h3 class="Coheader ms-5">Checkout your order</h3>
            <span class="Cott me-5"><b>Home</b> -> Checkout</span>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <div class="mt-4 p-4 border border-1">
                    <table class="table mb-3">
                        <thead>
                            <tr class="">
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;

                            foreach ($result as $key => $value) {

                                echo "<tr class=' count ' id=" . $value['id'] . ">";
                                echo "<th scope='row'>" . $i . "</th>";
                                echo "<td>" . $value['book_name'] . "</td>";
                                echo "<td class='qty'>" . $value['quantity'] . "</td>";
                                echo "<td class='price'>" . $value['book_price'] . " <span>MMK</span></td>";
                                $i++;
                            }
                            ?>
                            <tr class="table-active">
                                <td colspan="3"> <b>Total Amount :</b> </td>
                                <?php echo "  <td class='totalall'>" . $result[0]['total'] . " MMK + (Delivery Fee)</td>"  ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 mt-5 mx-4">
                <div>
                    <p>Name : <span class="ms-3 name"></span></p>
                    <p>Phone : <span class="ms-3 phone"></span></p>
                    <p>Email : <span class="ms-3 email"></span></p>
                    <p>Address : <?php echo "<span id=" . $result['0']['delivery_fee_id'] . " class='ms-3 address'></span>" ?> </p>
                    <p>Payment : <span class="ms-3">Cash On Delivery</span></p>
                </div>
                <button class="btn btn-primary order" data-bs-toggle="modal" data-bs-target="#modal">Place Order</button>
            </div>

        </div>




    </div>
    </div>

    <div id="modal" class="modal fade" role="dialog" data-bs-backdrop="static" data-easein="bounceIn" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="col-sm-4 modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">

                <div class="d-flex justify-content-center mt-4">
                    <div><i class="fa-solid fa-handshake fs-3 text-muted icons"></i></div>
                </div>

                <div class="modal-body">
                    <div class="request text-muted"><span><i class="fas fa-check-circle text-success mx-2"></i></span> Your Place Order has been received.
                        We will be in touch and contact you soon!
                    </div>
                </div>

                <div class="d-flex justify-content-center m-3">
                    <a href="../View/homepage.php"> <button type="button" id="backSite" class="btn btn-primary cancelbutton" data-bs-dismiss="modal">Back to site</button></a>

                </div>
            </div>


        </div>
    </div>
    </div>
    <footer id="footer" class="container-fluid commom-bg  mt-5">
        <?php require "../View/footerCommon.php" ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../resource/js/common.js"></script>
    <script src="../resource/js/footerCommon.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
    <script src="../resource/js/voucher.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>