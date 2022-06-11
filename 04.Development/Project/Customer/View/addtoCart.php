<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart List</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />

   <link rel="stylesheet" href="../resource/css/addtoCart.css">
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
   <div class="container header d-flex justify-content-between align-items-center p-4 text-primary">
      <h3 class="fw-bolder">Cart List</h3>
      <div>
         <b>Home</b> -> Detail Book -> Book Cart
      </div>
   </div>
   <!-- <h5 class="fw-bolder text-primary">Order History</h5> -->
   <div>
      <?php
      // print_r($result);


      if (count($result) > 0) {
         echo "<table class='table mt-5 '>";
         echo " <thead class='text-light bg-primary'>";
         echo "<tr>
            <th scope='col'>Items</th>
            <th scope='col'></th>
            <th scope='col'>Price</th>
            <th scope='col' colspan='2'>Quatity</th>
            <th scope='col'>Total</th>
            <th></th>
           </tr>
           </thead>
           <tbody class='itembody'>";
         foreach ($result as $key => $value) {
            echo "<tr  class='items'>";
            echo " <th scope='row'><img src='../../Images/" .$value['0']['book_image']. "' alt=''></th>";
            echo "<td><span class='name'>" .$value['0']['book_name']. "</span></b>";
            if ($value['0']['author_name'] == 'None') {
               echo "<br><i>Anonymous</i></td>";
            } else {
               echo "<br><i>" . $value['0']['author_name'] . " </i></td>";
            }
            echo "<td>" . number_format($value['0']['book_price']) . "</td>";
            echo "<td  colspan='2' class='quantity'>
                  <div class='d-flex justify-content-start rounded qty '>
                  <span class='minus'>-</span>
                  <input type='number' class='counts' id='qty' name='qty' value='1'>
                  <span class='plus'>+</span>
               </div></td>";
            echo "<td class='total' colspan='1'>" . number_format($value['0']['book_price']) . "</td>";
            echo "<td >
                  <ion-icon  class='close' name='close-circle-outline'></ion-icon>
                  </td>";
            echo "</tr>";
         }
         echo "</tbody>
               </table>";
      } else {
         echo 'There is no item in your cart.';
      }

      ?>



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
               <?php
               foreach ($result as $key => $value) {

                  echo "<tr id=".$value['0']['id']." class='voucher'>";
                  echo "<th scope='row' class='bookname'>"  . $value['0']['book_name'] .  "</th>";
                  echo "<td class='cal'><span class='bookquantity'>1</span>*<span class='bookprice'>" . number_format($value['0']['book_price']) . "</span></td>";
                  echo "</tr>";
              
               }
               ?>
               <?php
               echo "<tr>";
               echo "<th scope='row'>Delivery Price</th>";
               
               if(isset($delivery['0']['delivery_fees'])){
                  echo "<td>".number_format($delivery['0']['delivery_fees'])."</td>";
                 
               }else{
                  echo "<td>".number_format($delivery)."</td>";
               }
             

               ?>

               <tr>
                  <th scope="row">TOTAL COST</th>
                  <td class="all"></td>
               </tr>
            </tbody>

            
         </table>
               <div  class="container d-flex justify-content-between align-items-center px-4 ">
               <button class="btn btn-primary text-light text-align-center cancel"><b>CANCEL</b></button>
               <button class="btn btn-primary text-light text-align-center mx-3 buy"><b>BUY NOW</b></button>

            </div>
      </div>
   </div>
   <!-- footer -->
   <footer id="footer" class="container-fluid commom-bg">
      <?php require "../View/footerCommon.php" ?>
   </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/js/addtoCart.js"></script>
   <script type="text/javascript" defer>

   </script>
</body>

</html>