<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shops</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/shops.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">
</head>

<body>
  <!-- Header -->
 <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
      
      </nav>
      <!-- Header -->
   <div class="container text-primary header d-flex justify-content-between align-items-center p-4">
            <h3>Shops</h3>
            <div>
                <b>Home</b> -> Shop
            </div>
        </div>
        <div class="container d-flex justify-content-between align-items-center p-4 mx-6 col-12 col-md-12 col-lg-4">
        <button class="btn text-primary border border-primary">Yangon</button>
        <button class="btn text-primary border border-primary">Mandalay</button>
        <button class="btn text-primary border border-primary">Naypyidaw</button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row g-0">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="my-card m-5 border border-primary rounded-2">
                            <div class="my-card-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXg49v2amwPoDctZcQClmNEYTIlAHx_0SbHQ&usqp=CAU" alt="">
                                <h6 class="text-primary mt-4"><b> Yar Pyae Book Shop</b></h6>
                                <div class="text-primary m-2 shop_info">U Tun Lin Chan,Hlae Tan ,Kamayout,Yangon</div>
                                <div class="text-primary m-2 shop_info">097665577,0876567899</div>
                                <div class="text-primary m-2 shop_info">www.yarpyae.com</div>
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
    <footer id="footer" class="container-fluid commom-bg  mt-5">
     
     </footer>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
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