$(document).ready(function () {
  if (
    cityName == "Yangon" ||
    cityName == "Mandalay" ||
    cityName == "NayPyiTaw"
  ) {
    showShops(cityName);
    if (cityName == "Yangon") {
      $("#ygnBtn").addClass("activeCityBtn");
      $("#mdyBtn").removeClass("activeCityBtn");
      $("#nptBtn").removeClass("activeCityBtn");
    }
    if (cityName == "Mandalay") {
      $("#mdyBtn").addClass("activeCityBtn");
      $("#ygnBtn").removeClass("activeCityBtn");
      $("#nptBtn").removeClass("activeCityBtn");
    }
    if (cityName == "NayPyiTaw") {
      $("#nptBtn").addClass("activeCityBtn");
      $("#mdyBtn").removeClass("activeCityBtn");
      $("#ygnBtn").removeClass("activeCityBtn");
    }
  } else {
    alert("NO BOOK STORE!");
    location.replace(
      "http://localhost/book_store_project/04.Development/Project/Customer/View/shops.php"
    );
  }

  showShops(cityName);
  console.log(cityName);
  $(".cityBtn").click(function () {
    var CityName = $(this).text();
    if (CityName == "Yangon") {
      $("#ygnBtn").addClass("activeCityBtn");
      $("#mdyBtn").removeClass("activeCityBtn");
      $("#nptBtn").removeClass("activeCityBtn");
    }
    if (CityName == "Mandalay") {
      $("#mdyBtn").addClass("activeCityBtn");
      $("#ygnBtn").removeClass("activeCityBtn");
      $("#nptBtn").removeClass("activeCityBtn");
    }
    if (CityName == "NayPyiTaw") {
      $("#nptBtn").addClass("activeCityBtn");
      $("#mdyBtn").removeClass("activeCityBtn");
      $("#ygnBtn").removeClass("activeCityBtn");
    }
    showShops(CityName);
  });
});
function showShops(CityName) {
  var name = CityName;
  $.ajax({
    url: "../Controller/shopController.php",
    type: "POST",
    data: "cname=" + name,
    success: function (res) {
      let json = JSON.parse(res);
      $(".item").remove();
      for (const shop of json) {
        $("#shopContainer").append(
          `<div class="item col-12 col-md-12 col-lg-4">
                        <div class="my-card m-5 border border-primary rounded-2">
                            <div class="my-card-img">
                                <img src="../../Images/${shop.shop_image}" alt="">
                                <h6 class="text-primary mt-4"><b>${shop.shop_name} </b></h6>
                                <div class="text-primary m-2 shop-info">${shop.shop_address}</div>
                                <div class="text-primary m-2 shop-info">${shop.shop_phone_no}</div>
                                <div class="text-primary m-2 shop-info text-break">${shop.shop_website}</div>
                            </div>
                        </div>
                    </div>`
        );
      }
    },
    error: function (err) {
      console.log(err);
    },
  });
}
