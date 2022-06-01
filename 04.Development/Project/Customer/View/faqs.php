<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FAQs</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/faq.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>
   <div class="container-fluid header d-flex justify-content-between align-items-center p-4 bg-light">
      <h3 class="ms-5">FAQs</h3>
      <div class="me-5">
         <b>Home</b> -> FAQs
      </div>
   </div>


   <section class="container">
      <div class="row">
         <div class="col-12 col-lg-5">
            <div class="mt-5">
               <div class="border rounded faq-list"></div>
            </div>
         </div>
         <div class="col-12 col-lg-2"></div>
         <div class="col-12 col-lg-5">
            <div class="mt-5">
               <div class="border rounded faq-list"></div>
            </div>
         </div>
      </div>
   </section>

   <script src="../resource/js/faq.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script>
      let lists = [{
            userId: 1,
            id: 1,
            title: "<b>1.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 2,
            title: "<b>2.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 3,
            title: "<b>3.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 4,
            title: "<b>4.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 5,
            title: "<b>5.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 6,
            title: "<b>6.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 7,
            title: "<b>7.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 8,
            title: "<b>8.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 9,
            title: "<b>9.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
         {
            userId: 1,
            id: 10,
            title: "<b>10.What are your delivery time?</b>",
            body: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
         },
      ];

      lists.map((list) => {
         $(".faq-list").append(`
        <div class="faq-item">
            <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                <p class="mb-0 text font-weight-bold faq-item-title">
                    ${list.title}
                </p>
                <ion-icon name="add-circle-outline"></ion-icon>
            </div>
            <div class="p-3 bg-light faq-item-body">
                <p>
                ${list.body}
                </p>
            </div>
        </div>
        `);
      });

      $(".faq-item").click(function() {
         // close to open
         $(".faq-item-body").fadeOut();
         //  click to open
         $(this).children(".faq-item-body").fadeToggle();
         $(this).find(".faq-icon").toggleClass("rotate");
      });
   </script>
</body>

</html>