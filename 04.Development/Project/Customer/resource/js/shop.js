$(document).ready(function () {
    showShops("Yangon");
  $(".cityBtn").click(function () {
    var CityName = $(this).text();
    showShops(CityName);
  });
});
function showShops(CityName){
        var name=CityName
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
                                <div class="text-primary m-2 shop_info">${shop.shop_address}</div>
                                <div class="text-primary m-2 shop_info">${shop.shop_phone_no}</div>
                                <div class="text-primary m-2 shop_info">${shop.shop_website}</div>
                            </div>
                        </div>
                    </div>`
                    )
                }
            },
            error: function (err) {
                console.log(err)
            }
            
        })
}