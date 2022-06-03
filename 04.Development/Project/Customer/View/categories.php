<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Categories</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/categories.css">
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
   <div class="container-fluid header p-4">
      <div class="container d-flex justify-content-between align-items-center">
      <h3 class="text-primary">Language</h3>
      <div class="text-primary">
         <b>Home</b> -> Language
      </div>
      </div>
   </div>
   </div>
   <div class="container-fluid d-flex justify-content-between align-items-center my-4">
      <div class="container">
         <div class="row g-0">
            <?php for ($i = 0; $i < 12; $i++) : ?>
               <div class="col-12 col-md-6 col-lg-3 text-light header d-flex justify-content-between align-items-center my-2">
                  <div class="my-card">
                     <div class="my-card-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXg49v2amwPoDctZcQClmNEYTIlAHx_0SbHQ&usqp=CAU" alt="">
                     </div>
                     <div class="my-card-info">
                        <h5>Book Name</h5>
                        <div class="mb-2">
                           <span style="font-size:x-small">
                              <?php for ($s = 0; $s < 5; $s++) : ?>
                                 <?php $star = 3; ?>
                                 <?php if ($star > $s) : ?>
                                    <i class="fa-solid fa-star"></i>
                                 <?php else : ?>
                                    <i class="fa-regular fa-star"></i>
                                 <?php endif ?>
                              <?php endfor ?>
                           </span><br>
                           <span style="font-size:x-small">Author Name</span>
                        </div>
                        <p style="font-weight:500 ;">3500 MMK</p>
                        <button class="btn card-button px-1 rounded-1 me-1"><i class="fa-solid fa-cart-shopping me-1"></i>add
                           to
                           cart</button>
                        <span class="btn btn-primary card-button"><i class="fa-solid fa-eye"></i> 4</span>
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