$(document).ready( () => {
    $( "#open_dropdown" ).click(function() {     
       $('.profile_dropdown').toggle(500);
    });

    $(".app,.header-start,.header-center,nav").click( () => {
       $('.profile_dropdown').hide(500); 
    });

    // mobile menu nav 

    $("#menu_icon").click( () => {
      $(".overlay_nav").show("slow");
      $(".mobile-wide-nav").css({"left":"0px"});
      $("body").css({"overflow":"hidden"});
    });

    $(".overlay_nav").click( () => {
      $(".mobile-wide-nav").css({"left":"-767px"});
      $(".overlay_nav").fadeOut();
      $("body").css({"overflow":"unset"});
    });

    $("#search_mobile_nav").click(() => {
      $(".header1").css("top","0px");
    });

    $("#hide_search_bar").click(() => {
      $(".header1").css("top","-100px");
    });
    
setInterval( () => {
  if(window.innerWidth <= 540) {
    $(".video-thumbnail").addClass('mobile_view_thumbnail');
    $(".main-attr").attr("id","main_c_mv");
    $(".item_video_mb .video-footer").css({"padding":"0px"});
    $("#my_mobile_view img").css({"height": "calc(100vh - 40vh)","width":"100%"});
  }else
  {
    $("#main_c_mv").removeAttr("id","");
    $(".video-thumbnail").removeClass('mobile_view_thumbnail');
    $(".item_video_mb .video-footer").show();
    $(".item_video_mb .video-footer").css({"padding":"0px 10px"});
    $("#my_mobile_view img").css({"height": "calc(100vh - 30vh)","width":"100%"});
  }
  }, 100);
});

    function logout(){
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut();
      jQuery.ajax({
              url:'logout.php',
              success:function(result){
                      window.location.href="index.php";
              }
          });
    }

    function onLoad(){
           gapi.load('auth2',function (){
                  gapi.auth2.init();
           }); 
    }

    function gmailLogIn(userInfo){
            var userProfile=userInfo.getBasicProfile();
            var user_id = userProfile.getId();
            var name = userProfile.getName();
            var image = userProfile.getImageUrl();
            var email = userProfile.getEmail();
            $.ajax({
                    url:"http://shadabzone.onlinewebshop.net/login_check.php",
                    type:"POST",
                    data:{
                      user_id: user_id,
                      name : name,
                      image : image,
                      email : email
                    },
                    success:function(result){
                            window.location.href="index.php";
                    }
            });
    }

