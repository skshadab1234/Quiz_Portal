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

$("#cart_list").click( () => {
  $("#cart_list").addClass('animate_cart_icon_show');
  $(".cartshow").addClass('open');
  $(".close_bar").removeClass('animate_cart_icon_hide');
});
  
$(".close_bar").click( () => {
  $("#cart_list").addClass('animate_cart_icon_hide');
  $(".cartshow").removeClass('open');
  $("#cart_list").removeClass('animate_cart_icon_show');
});

 $(".modal_coupon").click( () => {
    $(".modal_coupon").addClass("animate_ovelary_coupon_hide");
    $(".modal_coupon").removeClass("animate_ovelary_coupon_show");
    $(".modal_coupon_content").addClass("animate_coupon_div_hide");
     $(".modal_coupon_content").removeClass("animate_coupon_div");
     setTimeout(function() { $(".modal_coupon_content").hide(); }, 1000);
     setTimeout(function() { $(".modal_coupon").hide(); }, 1000);
    setTimeout(function() { $("#top_cart_bar").show(); }, 1000);
    
 });

$("#close_coupon_code_modal").click( () => {
    $(".modal_coupon").addClass("animate_ovelary_coupon_hide");
    $(".modal_coupon").removeClass("animate_ovelary_coupon_show");

    $(".modal_coupon_content").addClass("animate_coupon_div_hide");
   $(".modal_coupon_content").removeClass("animate_coupon_div");
   setTimeout(function() { $(".modal_coupon_content").hide(); }, 1000);
   setTimeout(function() { $(".modal_coupon").hide(); }, 1000);
   setTimeout(function() { $("#top_cart_bar").show(); }, 1000);

});

$("#apply_coupon").click( () => {
  $("#top_cart_bar").hide();
  $(".modal_coupon").addClass("animate_ovelary_coupon_show");
  $(".modal_coupon").removeClass("animate_ovelary_coupon_hide");

   $(".modal_coupon_content").addClass("animate_coupon_div");
   $(".modal_coupon_content").removeClass("animate_coupon_div_hide");
   $(".modal_coupon").show();
   $(".modal_coupon_content").show();
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

 function slide_effect_id_no(id) {
    $("#"+id+"_img").clone().appendTo("body");
    $(".hero-mobile").addClass("body_slide");
}
