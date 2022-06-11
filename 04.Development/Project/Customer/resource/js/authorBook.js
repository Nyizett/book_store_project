let books = [];
let ids = [];
$(document).ready(function () {
  $.ajax({
    type: "post",
    url: "../Controller/authorNameGetController.php",
    data: "id=" + authorId,
    success: function (data) {
      let json = JSON.parse(data);
      $(".authorName").text(json[0].author_name);
    },
  });
  $(".bookdetail").click(function (e) {
    console.log("hello");

    let id = this.id;

    window.location.href = `../../Customer/Controller/bookDetailController.php?id=${id}`;
  });

  $(".cart").click(function (e) {
    if (!ids.includes(this.id)) {
      ids.push(this.id);
      let data = {
        id: this.id,
      };

      console.log(data);
      $.ajax({
        type: "POST",
        url: "../Controller/cartController.php",
        data: { send: JSON.stringify(data) },
        success: function (res) {
          console.log(res);
          books.push(JSON.parse(res));

          $("#cartCount2").text(`${books.length}`);
        },
        error: function (err) {},
      });
    }
  });
});
function shopCart() {
  console.log(books);

  let data = JSON.stringify(books);
  window.location.href = `../../Customer/Controller/cartListController.php?data=${data}`;
}
