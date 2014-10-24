//Initial load of page
$(document).ready(sizeContent);

//Every resize of window
$(window).resize(sizeContent);

//Dynamically assign height
function sizeContent() {
    var newHeight = $("html").height() - $(".header").height() - $(".footer").height() + "px";
    $("#content-mci").css("height", newHeight);
}

// Refresh na tela ao redimensionar
$(window).resize(function(){location.reload();});