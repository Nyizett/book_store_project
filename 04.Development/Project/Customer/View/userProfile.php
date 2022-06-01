<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Profile</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/user_profile.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>

   <div class="container-fluid header d-flex justify-content-between align-items-center p-4 bg-light">
      <h3 class="ms-5 font-color-primary">View Profile</h3>
      <div class="me-5 font-color-primary"><b>Home</b> -> Profile</div>
   </div>
   <section class="container mt-5">
      <div class="row">
         <div class="col-12 col-lg-4">
            <form>
               <div class="mb-3">
                  <label for="formFile" class="form-label font-color-primary fw-bold">UPLOAD PHOTO</label>
                  <input class="form-contro" type="file" id="formFile" />
               </div>
            </form>
         </div>

         <div class="col-12 col-lg-4">
            <form>
               <div class="mb-3">
                  <label for="exampleInputName" class="form-label font-color-primary fw-bold">NAME</label>
                  <input type="text" class="form-control" id="exampleInputName" />
               </div>
            </form>
         </div>

         <div class="col-12 col-lg-4">
            <form>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label font-color-primary fw-bold">EMAIL</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
               </div>
            </form>
         </div>
      </div>

      <div class="row mt-5">
         <div class="col-12 col-lg-4">
            <form>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label font-color-primary fw-bold">PASSWORD</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" />
               </div>
            </form>
         </div>

         <div class="col-12 col-lg-4">
            <form>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label font-color-primary fw-bold">PHONE</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" />
               </div>
            </form>
         </div>

         <div class="col-12 col-lg-4">
            <form>
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label font-color-primary fw-bold">ADDRESS</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
            </form>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <button type="submit" class="btn btn-primary me-5 commom-bg">SAVE</button>
            <button type="submit" class="btn btn-primary commom-bg">CANCEL</button>
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