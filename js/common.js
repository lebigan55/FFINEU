$(function() {
 

  
  $(window).on('load', function () {
    var $preloader = $('.preloader-wrap'),
        $spinner   = $preloader.find('.preloader-inner');
    $spinner.fadeOut();
    $preloader.delay(300).fadeOut('slow');
});

  var burger = document.querySelector('.burger-container'),
  header = document.querySelector('.header');
  
  burger.onclick = function() {
    header.classList.toggle('menu-opened');
}
}());

$(document).ready(function() {


 //--- Плавный скрол до блока ---// 
 $(".reg-sidebar-menu a").mPageScroll2id({ 
  offset : 160, 
  scrollSpeed : 800
});
 //---Плавный скрол до блока конец --// 

 $('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',

    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,
    
    midClick: true,
    mainClass: 'mfp-with-fade',
    removalDelay: 10, //delay removal by X to allow out-animation
      callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  });
});



$('#main-form').validate ();
$('#modal-form-1').validate ();




