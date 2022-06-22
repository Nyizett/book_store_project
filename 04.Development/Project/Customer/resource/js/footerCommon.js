$(document).ready(function () {
  // $("#footer").load("./footerCommon.html");
  // $("#logo").removeClass("d-inline-block  main-logo position-fixed");

  $.ajax({
    type: "post",
    url: "../Controller/headerTextGetController.php",
    success: function (data) {
      let json = JSON.parse(data);

      $("#FooterPhoneNumber").text(json[0].web_phno);
      $("#FooterEmail").text(json[0].web_email);
      $("#FooterAddress").text(json[0].web_address);
    },
  });
});
