window.onload = function() {


  function setCurrentSlide(ele,index){
    $(".swiper1 .swiper-slide").removeClass("selected");
    ele.addClass("selected");
    swiper1.initialSlide=index;
  }
  
  var swiper1 = new Swiper('.swiper1', {
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 20,
        freeMode: false,
        loop: false,
        onTab:function(swiper){
          var n = swiper1.clickedIndex;
          alert(1);
        }
    });
  swiper1.slides.each(function(index,val){
    var ele=$(this);
    ele.on("click",function(){
      setCurrentSlide(ele,index);
      swiper2.slideTo(index, 500, true);
      swiper2.initialSlide=index;
    });
  });
  
  
var swiper2 = new Swiper ('.swiper2', {
    direction: 'horizontal',
    loop: false,
    autoHeight: true,
    onSlideChangeEnd: function(swiper){
      var n=swiper.activeIndex;
      setCurrentSlide($(".swiper1 .swiper-slide").eq(n),n);
      swiper1.slideTo(n, 500, false);
    }
  });
	$(".start").on('click',function(){
		$(".show").html('');
		var flag = true,j = 0;
			if(flag){
				flag = false;
				(function play(){
					if(j < poem.length){
						setTimeout(function(){
							play();
						},1200);
					}
					else{
						flag = true;
					}
				})();
			}
	});

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

