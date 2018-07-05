$(document).ready(function () {
   $('header').on('mouseenter mouseleave',function () {
     $("body").css("background","#A85859");
     $('#msg').text("vous etes entrer ou sorti");
   });
});