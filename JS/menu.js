$(document).ready(function(){
    largura = $(window).width();
    $(window).scroll(function(){
      if ($(this).scrollTop() > 300 && largura > 579) {
        $('header').css("position","fixed");
        $('header').css("background-color","white");
        $('header').css("-webkit-box-shadow","0 2px 5px 0 rgba(0,0,0,0.12), 0 1px 3px 0 rgba(0,0,0,0.24)");
        $('header').css("-moz-box-shadow","0 2px 5px 0 rgba(0,0,0,0.12), 0 1px 3px 0 rgba(0,0,0,0.24)");
        $('header').css("box-shadow","0 2px 5px 0 rgba(0,0,0,0.12), 0 1px 3px 0 rgba(0,0,0,0.24)");
        $('#imgLogoBranca').css("display","none");
        $('#imgLogoRoxa').css("display","block");
        $('header nav ul li a').css('color','#7B28F2');
        $('header nav ul').css('margin-top','0');
        if (largura <= 970) {
          $('#menuWhite').css('display','none');
          $('#menuBlack').css('display','block');
        }
      } else if(largura > 579) {
        $('header').css("position","absolute");
        $('header').css("background-color","transparent");
        $('header').css("-webkit-box-shadow","none");
        $('header').css("-moz-box-shadow","none");
        $('header').css("box-shadow","none");
        $('#imgLogoRoxa').css("display","none");
        $('#imgLogoBranca').css("display","block");
        $('header nav ul li a').css('color','white');
        $('header nav ul').css('margin-top','20px');
        if (largura <= 970) {
          $('#menuBlack').css('display','none');
          $('#menuWhite').css('display','block');
        }
      } 
    });
    $('.openMenu').click(function() {
      $('#menuMobile').css('right','0');
      $('body').css('overflow','hidden');
    })
    $('#closeMenu').click(function() {
      $('#menuMobile').css('right','-2000px');
      $('body').css('overflow','scroll');
    })
  })