$(".card").on("click", function(){
    $(".detail").addClass("show")
});

$(".close-detail").on("click", function(){
    $(".detail").removeClass("show")
});

$(".menu-bar").on("click", function(){
    $(".sidebar").addClass("show")
});

$(".sidebar").on("click", function(){
    $(".sidebar").removeClass("show")
});