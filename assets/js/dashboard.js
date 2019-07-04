$(document).ready((function ($) {

  $(".menu-icon").on("click", function() {
                    $("nav ul").toggleClass("showing");
              });
    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
}));


  $(window).on("scroll", function() {
        if($(window).scrollTop()) {
              $('nav').addClass('black');
        }

        else {
              $('nav').removeClass('black');
        }
  })


//####### delete
// var count = 0;

// function slide(form){
  
//   var count = form.value;
//   var btn = form.childNodes;
  
//   if (count === "1") {
//     form.nextElementSibling.style.display = 'none';
//     btn[3].innerHTML = '<i class="fa fa-angle-down" aria-hidden="true"></i>';   
//     form.value="0";
//   }
//   else{
//     btn[3].innerHTML = '<i class="fa fa-angle-up" aria-hidden="true"></i>'; 
//     form.nextElementSibling.style.display = 'block';
//     form.value="1";

//   }
// }

