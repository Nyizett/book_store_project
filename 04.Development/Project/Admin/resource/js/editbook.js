$(document).ready(function () {
    $("#fupload").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controller/updateDBBookController.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function () {
                $("#submitBtn").attr("disabled", "disabled");
                $("#fupload").css("opacity", "0.5");
            },
            success: function (res) {
                $("#submitBtn").removeAttr("disabled");
                $("#fupload").css("opacity", "1");
                $("#result").text(res);
            },
            error: function (err) {
                alert("Error");
            }
        })
    })
})
