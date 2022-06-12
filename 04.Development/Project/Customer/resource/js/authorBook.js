let books = [];
let ids = [];
let numbers = [1, 2, 4, 4];
let coreNumber;
let subNumber;
$(document).ready(function () {
  for (let x = 0; x < numbers.length; x++) {
    for (let index = 0; index < numbers.length; index++) {
      if (x == index) {
        subNumber = 0;
        coreNumber = 0;
      } else {
        coreNumber = numbers[x];
        subNumber = numbers[index];
      }
      sum = coreNumber + subNumber;
      if (sum == 8) {
        console.log(coreNumber + "," + subNumber);
      } else {
        console.log(false);
      }
    }
  }

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
