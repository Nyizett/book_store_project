let cartBooks = [];
$(document).ready(function () {
  $("#cum_navbar").load("./common.html");
  $("#cum_navbar").load("/Project/Customer/View/common.html");

  getCategories();
  checkLoggedIn();

  // cart local storage
  if (localStorage.getItem("cart") != null) {
    let cart = JSON.parse(localStorage.getItem("cart"));
    console.log(cart);
    for (let index = 0; index < cart.length; index++) {
      cartBooks.push(cart[index]);
    }
    console.log(cartBooks);

    $("#cartCount2").text(`${JSON.parse(localStorage.getItem("cart")).length}`);
  }
  function getCategories() {
    $.ajax({
      type: "post",
      url: "../Controller/categoriesGetController.php",
      success: function (data) {
        let json = JSON.parse(data);
        for (const categories of json) {
          $("#categoriesShowDropdown").append(
            `
            <li><a class="dropdown-item" href="../View/categories.php?id=${categories.id}">${categories.category_name}</a></li>
            `
          );
        }
      },
    });
  }
  function checkLoggedIn() {
    if (localStorage.getItem("user") === null) {
      $("#userLoginSignup").append(
        `
        <li><a class="text-dark dropdown-item" href="../View/signin.php">Signup</a></li>
        
        `
      );
    } else {
      // var userProfile = JSON.parse(localStorage.getItem("user"));
      // console.log(userProfile);
      //
      $("#userLoginSignup").append(
        `
        <li><a class="text-dark dropdown-item" href="../View/userProfile.php">User Profile</a></li>
        <li><a class="text-dark dropdown-item" href="../View/orderHistory.php">Order History</a></li>
        <li><a class="text-dark dropdown-item" id="logout">Logout</a></li>
        `
      );
    }
  }
  $("#logout").click(function () {
    localStorage.removeItem("user");
    localStorage.removeItem("cart");
    window.location.href = `../../Customer/View/homepage.php`;
  });

  $(".dropdown-toggle").dropdown();
});

function shopCart() {
  if (localStorage.getItem("user") != null) {
    let data = JSON.stringify(cartBooks);
    let user = JSON.parse(localStorage.getItem("user"));
    let deliver = {
      address: user["user_address"],
    };
    window.location.href = `../../Customer/Controller/cartListController.php?data=${data}&address=${JSON.stringify(
      deliver
    )}`;
  } else {
    let data = JSON.stringify(cartBooks);
    let deliver = {
      address: "Default",
    };
    window.location.href = `../../Customer/Controller/cartListController.php?data=${data}&address=${JSON.stringify(
      deliver
    )}`;
  }
}
