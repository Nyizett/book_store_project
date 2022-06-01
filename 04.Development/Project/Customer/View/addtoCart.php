<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart List</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/common.css" />
   <!-- <link rel="stylesheet" href="../resource/css/add_to_cart.css"> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>
   <!-- nav -->
   <nav class="navbar navbar-expand-lg bg-light" id="cum_navbar">
   </nav>
   <!-- nav -->
   <div class="container header d-flex justify-content-between align-items-center p-4 text-primary">
      <h3 class="fw-bolder">Cart List</h3>
      <div>
         <b>Home</b> -> Detail Book -> Book Cart
      </div>
   </div>
   <!-- <h5 class="fw-bolder text-primary">Order History</h5> -->
   <div>
      <table class="table mt-5">
         <thead class="text-light bg-primary">
            <tr>
               <th scope="col">Items</th>
               <th scope="col"></th>
               <th scope="col">Price</th>
               <th scope="col">Quatity</th>
               <th scope="col">Total</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row"></th>
               <td><b>Book Name</b><br><i> Author Name</i></td>
               <td>1000</td>
               <td>2</td>
               <td>2000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
            <tr>
               <th scope="row"><img src="./education.jpg" alt=""></th>
               <td><b>Book Name</b><br><i> Author Name</i></td>
               <td>4000</td>
               <td>1</td>
               <td>4000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
            <tr>
               <th scope="row"><img src="./education.jpg" alt=""></th>
               <td><b>Book Name</b><br><i> Author Name</i></td>
               <td>5000</td>
               <td>2</td>
               <td>10000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="container header d-flex justify-content-between align-items-center p-4 text-primary">
      <h3 class="fw-bolder"></h3>
      <div>
         <table class="table table-borderless text px-4">
            <thead>
               <tr>
                  <th colspan="2" class="text-primary">Total Price</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th scope="row">Java</th>
                  <td>1*1000</td>
               </tr>
               <tr>
                  <th scope="row">PHP</th>
                  <td>2*2000</td>
               </tr>
               <tr>
                  <th scope="row">Delivery Price</th>
                  <td>0</td>
               </tr>
               <tr>
                  <th scope="row">TOTAL COST</th>
                  <td>5000</td>
               </tr>
            </tbody>
            <tr>
            <tr>
            <td colspan="3" class="container d-flex justify-content-between align-items-center px-4 "><button class="btn btn-primary text-light text-align-center"><b>BUY NOW</b></button></td>
            </tr>
         </table>

      </div>
   </div>
   <!-- footer -->
   <footer id="footer" class="container-fluid commom-bg">

   </footer>
   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/js/common.js" defer></script>
   <script src="../resource/js/footerCommon.js" defer></script>
   <script type="text/javascript" defer>
      $(".slider").click({
         prevArrow: '<span class="priv_arrow btn  btn-primary "><i class="fas fa-angle-left"></i></span>',
         nextArrow: '<span class="next_arrow btn btn-primary "><i class="fas fa-angle-right"></i></span>'
      });
   </script>
</body>

</html>