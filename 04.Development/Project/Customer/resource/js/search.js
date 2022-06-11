$(document).ready(function () {
  $("#searchBtn").click(function () {
    $bookName = $("#searchInpt").val();
    showBooks($bookName);
  });

  function showBooks($bookName) {
    var name = $bookName;
    $.ajax({
      url: "../Controller/searchBookController.php",
      type: "POST",
      data: "name=" + name,
      success: function (data) {
        console.log(data);
        let json = JSON.parse(data);
        console.log(json);
         $(".Bookitems").remove();
        let booksCount = json.length;
        if (booksCount <= 0) {
          $("#Bookbox").append(
            `<div class="Bookitems my-5 text-center h2 text-danger">
                            There is no book with the name "${name}".
                            </div>`
          );
        } else {
          for (const book of json) {
            $("#Bookbox").append(
              `<div class="Bookitems col-12 col-lg-2 col-xl-2">
                                <div class="card mt-5 card-width">
                                   <img src="../resource/img/book cover/${book.book_image}" class="img-fluid w-75 mx-auto mt-3" alt="" />
                                   <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                      <p class="card-title fw-bold mb-0 font-color-primary">
                                        ${book.book_name}
                                      </p>
                                      <small>
                                         <i class="fa-solid fa-star text-warning"></i>
                                         <i class="fa-solid fa-star text-warning"></i>
                                         <i class="fa-solid fa-star text-warning"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                      </small>
                                      <small class="card-text d-block mb-3 font-color-secondary">
                                      ${book.author_name}
                                      </small>
                                      <div class="d-flex d justify-content-between align-items-center">
                                         <p class="fw-bold mb-0 font-color-primary"> ${book.book_price}</p>
                                      </div>
                                   </div>
                                </div>
                             </div>`
            );
          }
        }
      },
      error: function (err) {
        console.log(err);
      },
    });
  }
});
