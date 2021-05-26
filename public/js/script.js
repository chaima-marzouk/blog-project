$(function() {
   
    $(".email").on("blur", function() {
        if ($(this).val().length < 1) {
            $(this).css("border", "1px solid #F00");
            $(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            $(this).css("border", "1px solid #080");
            $(this).parent().find(".custom-alert").fadeOut(200);
        }
    });

    $(".password").on("blur", function() {
        if ($(this).val().length < 5) {
            $(this).css("border", "1px solid #F00");
            $(this).parent().find(".custom-alert").fadeIn(200);
        } else {
            $(this).css("border", "1px solid #080");
            $(this).parent().find(".custom-alert").fadeOut(200);
        }
    });

});