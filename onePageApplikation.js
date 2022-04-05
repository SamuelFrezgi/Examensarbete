
$("#firstButton").on("click", function () {
    $("#pageTwo").hide();
    $("#pageOne").show();
});

$("#secondButton").on("click", function () {
    $("#pageTwo").show();
    $("#pageOne").hide();
});
