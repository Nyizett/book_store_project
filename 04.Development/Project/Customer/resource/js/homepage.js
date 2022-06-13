$(document).ready(function () {
  $.ajax({
    type: "post",
    url: "../Controller/newBooksFindController.php",
    success: function (data) {
      console.log(data);
      let json = JSON.parse(data);

      for (const book of json) {
        $("#newsBookAppend").append(
          `
        <div class="col-6 col-lg-3 col-xl-2 content goBookDetail" id="${book.id}">
            <div class="card mb-5 mb-lg-0 card-width" style="min-height:65vh">
              <img src="../../Images/${book.book_image}" class="img-fluid  mx-auto mt-3 " alt="" width="80%" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold  font-color-primary">${book.book_name}</p>
                  <small class="my-2">
                  <i class="fa-solid fa-star star0" ></i>
                  <i class="fa-solid fa-star star1" ></i>
                  <i class="fa-solid fa-star star2" ></i>
                  <i class="fa-solid fa-star star3" ></i>
                  <i class="fa-solid fa-star star4" ></i>
                  </small>
                  <small class="card-text  d-block mb-3 font-color-secondary ">
                    ${book.author_name}
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                    <p class="fw-bold mb-0 font-color-primary">${book.book_price} MMK</p>
                  </div>
              </div>
            </div>
        </div>
        `
        );
        for (let index = 0; index < book.rating; index++) {
          $(".star" + index).addClass("text-warning");
          $(".star" + index).removeClass("star" + index);
          // console.log("#star" + index);
        }
        for (let x = 0; x < 5; x++) {
          $(".star" + x).removeClass("star" + x);
          // console.log("#star" + index);
        }
      }
      $bookId = "";
      $(".goBookDetail").click(function () {
        $bookId = $(this).attr("id");

        window.location.href =
          "../../Customer/View/bookDetails.php?id=" + $bookId;
      });
    },
  });
  //TOTAL BOOK SHOW
  $.ajax({
    type: "post",
    url: "../Controller/totalBooksController.php",
    success: function (data) {
      let json = JSON.parse(data);
      $("#totalBookShow").text(json.length);
    },
  });
  //TOTAL AUTHOR SHOW
  $.ajax({
    type: "post",
    url: "../Controller/totalAuthorController.php",
    success: function (data) {
      let json = JSON.parse(data);
      $("#totalAuthorShow").text(json.length);
    },
  });
  //TOTAL USER SHOW
  $.ajax({
    type: "post",
    url: "../Controller/totalUserController.php",
    success: function (data) {
      let json = JSON.parse(data);
      $("#totalUserShow").text(json.length);
    },
  });
});
