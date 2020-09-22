window.onload = function() {

$("#search_bar").click( () => {
  $("#search_bar").addClass('animate_cart_icon_show');
  $(".search_bar").addClass('open');
  $(".close_bar").removeClass('animate_cart_icon_hide');
});
  
$(".close_bar").click( () => {
  $("#cart_list").addClass('animate_cart_icon_hide');
  $(".search_bar").removeClass('open');
  $("#cart_list").removeClass('animate_cart_icon_show');
});

$("#menu_bar").click( () => {
  $(".menu_overlay").addClass("open");
  $(".menu_overlay").removeClass("hide_menu");
});

$("#close_menu").click( () => {
  $(".menu_overlay").addClass("hide_menu");
   $(".menu_overlay").removeClass("open");
});

$("#subjects_sidebar").click( () => {
  $(".qp_all_list").addClass("slide_to_left");
  $(".subject_sidebar_show").addClass("slide_to_right");
  $(".qp_all_list").removeClass("slide_to_left_show");
  $(".subject_sidebar_show").removeClass("slide_to_right_show");
});

$("#rank_sidebar").click( () => {
  $(".qp_all_list").addClass("slide_to_left");
  $(".Ranking_sidebar_show").addClass("slide_to_right");
  $(".qp_all_list").removeClass("slide_to_left_show");
  $(".Ranking_sidebar_show").removeClass("slide_to_right_show");
});

$("#setting_sidebar").click( () => {
  $(".qp_all_list").addClass("slide_to_left");
  $(".setting_sidebar_show").addClass("slide_to_right");
  $(".qp_all_list").removeClass("slide_to_left_show");
  $(".setting_sidebar_show").removeClass("slide_to_right_show");
});

$("#Question_sidebar").click( () => {
  $(".qp_all_list").addClass("slide_to_left");
  $(".Question_sidebar_show").addClass("slide_to_right");
  $(".qp_all_list").removeClass("slide_to_left_show");
  $(".Question_sidebar_show").removeClass("slide_to_right_show");
});


// back click functionality

$("#back_subject").click(()=>{
  $(".qp_all_list").removeClass("slide_to_left");
  $(".subject_sidebar_show").removeClass("slide_to_right");
  $(".qp_all_list").addClass("slide_to_left_show");
  $(".subject_sidebar_show").addClass("slide_to_right_show");
});

$("#back_rank").click(()=>{
  $(".qp_all_list").removeClass("slide_to_left");
  $(".Ranking_sidebar_show").removeClass("slide_to_right");
  $(".qp_all_list").addClass("slide_to_left_show");
  $(".Ranking_sidebar_show").addClass("slide_to_right_show");
});

$("#back_setting").click(()=>{
  $(".qp_all_list").removeClass("slide_to_left");
  $(".setting_sidebar_show").removeClass("slide_to_right");
  $(".qp_all_list").addClass("slide_to_left_show");
  $(".setting_sidebar_show").addClass("slide_to_right_show");
});

$("#back_question").click(()=>{
   $(".qp_all_list").removeClass("slide_to_left");
   $(".Question_sidebar_show").removeClass("slide_to_right");
  $(".qp_all_list").addClass("slide_to_left_show");
  $(".Question_sidebar_show").addClass("slide_to_right_show");
});

// Dark Light Theme

$("#myonoffswitch").change(()=>{
  if ($("#myonoffswitch").prop("checked")) {
    $(".onoffswitch-label .onoffswitch-inner").css("margin-left","0");
    $(".onoffswitch-label .onoffswitch-switch").css({"right":"0","background":"#fff","border":"2px solid #fff"});
    $(".setting_sidebar_show .text_label small").html("Your are Using Dark Theme");
    darktheme();
  }
  else
  {
    $(".onoffswitch-label .onoffswitch-inner").css("margin-left"," -100%");
    $(".onoffswitch-label .onoffswitch-switch").css({"right":"45px","background":"#121212","border":"1px solid #121212"});
    $(".setting_sidebar_show .text_label small").html("Your are Using Light Theme"); 
    lighttheme();
  }
});

  // Light Theme 
  function lighttheme() {
    // Changing Boby color
    $(".hero-mobile,body").css({"background":"#eee","color":"#000"});

    // Navbar
    $("nav").css({"background":"#fff"});

    // Navbar menu bar icon
    $(".navbar-menu").css({"background":"var(--second-color)"});
    $('head').append('<style>.navbar-menu:before{background:var(--second-color) !important;}.navbar-menu:after{background:var(--second-color) !important;}</style>');

    // to change all text  color to original state 
    $(".menu_overlay .bottom_bar .text_label,.sidebar_top i,.sidebar_top h5,.right-side .fa").css("color","#000");
    $(".bottom_side .navbar-text").css("color","var(--second-color");
    $(".bottom_side .navbar-text span").css("color","var(--font-color)");

    // main menu parent changing background and text color this will effect on chil class also
    $(".menu_overlay").css({"background":"#fff","color":"#000"});

    // Menu bar Top bar 
    $(".menu_overlay .top_bar").css({"background":"linear-gradient(360deg,#00B9F1,#002E6E)"});

    // Changing arrow button color on Bottom bar
    $(".menu_overlay .bottom_bar #arrow_label i").css({"color":"#000","background":"#c7dcf0"});

    // Changing icon of dark/light theme
    $("#change_theme_img").css("background-image","url(https://www.iconfinder.com/data/icons/canoopi-mobile-contact-apps/32/Light_Theme-512.png)");

    // Inverting the image on Light Theme
    $(".icon_img").css("filter","invert(0%");
  }

  // Dark Theme
  function darktheme() {
    // Changing Boby color
    $(".hero-mobile,body").css({"background":"#26282b","color":"#fff"});

    // disabling transition on menu bar when we click on theme checkbox
    $(".menu_overlay").css("transition","0s");

    // Navbar
    $("nav").css({"background":"#353941"});

    // Navbar menu bar icon
    $(".navbar-menu").css({"background":"#fff"});
    $('head').append('<style>.navbar-menu:before{background:#fff !important;}.navbar-menu:after{background:#fff !important;}</style>');

    // to change all text  color to white 
    $(".menu_overlay .bottom_bar .text_label,.sidebar_top i,.sidebar_top h5,.bottom_side .navbar-text,.bottom_side .navbar-text span,.right-side .fa").css("color","#fff");

    // main menu parent changing background and text color this will effect on chil class also
    $(".menu_overlay").css({"background":"#000","color":"#fff"});

    // Menu bar Top bar 
    $(".menu_overlay .top_bar").css({"background":"#121212"});

    // Changing arrow button color on Bottom bar
    $(".menu_overlay .bottom_bar #arrow_label i").css({"color":"#fff","background":"transparent"});

    // Inverting the image on dark Theme
    $(".icon_img").css("filter","invert(200%");

    // Changing icon of dark/light theme
    $("#change_theme_img").css("background-image","url(https://static.thenounproject.com/png/2853798-200.png)");

    //Enabling transition afetr all the effect done
     setTimeout( function(){
      $('.menu_overlay').css("transition",".5s ease-in-out");
       },1000);
  }
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav-scroll").style.top = "0";
  } else {
    document.getElementById("nav-scroll").style.top = "-170px";
  }
  prevScrollpos = currentScrollPos;
}

