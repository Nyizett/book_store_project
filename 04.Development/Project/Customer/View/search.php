<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/search.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>

   <div class="container-fluid header d-flex justify-content-between align-items-center p-4 bg-light">
      <h3 class="ms-5">Search</h3>
      <div class="me-5">
         <b>Home</b> -> Search
      </div>
   </div>


   <section class="container">
      <br />
      <div class="row justify-content-center">
         <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm">
               <div class="card-body row no-gutters align-items-center">
                  <div class="col-auto">
                     <button class="btn btn-lg commom-bg   text-white" type="submit">Search</button>
                  </div>
                  <div class="col">
                     <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Books here...">
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-search h4 text-body font-color-primary"></i>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>


   <section class="container">
      <div class="row">
         <div class="col-12 col-lg-2 col-xl-2">
            <div class="card mt-5 card-width">
               <img src="../resource/img/book cover/jsEi.png" class="img-fluid w-75 mx-auto mt-3" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                     JavaScript
                  </p>
                  <small>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star text-warning"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                     Ei Maung
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary">5000 MMK</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
</body>

</html>