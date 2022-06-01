$(document).ready(function () {
    $(".changemaster").click(function () {
        if ($(this).text() == "App Master") {
            $(".stm").addClass("closemaster");
            $(".lgm").addClass("closemaster");
            $(".custom").removeClass("closemaster");
            $(".custom").addClass("viewmaster");
        } else if ($(this).text() == "Site Master") {
            $(".custom").addClass("closemaster");
            $(".lgm").addClass("closemaster");
            $(".stm").removeClass("closemaster");
            $(".stm").addClass("viewmaster");
        } else if ($(this).text() == "Login Master") {
            $(".custom").addClass("closemaster");
            $(".stm").addClass("closemaster");
            $(".lgm").removeClass("closemaster");
            $(".lgm").addClass("viewmaster");
        }
    });
    console.log($(this).text());
});
