jQuery(document).ready(function($) {
$('.hamburger').click(function(ev) {
    $('.js-nav').toggleClass('nav__content--open');
    $('.nav').toggleClass('nav--open');
    $('.hamburger').toggleClass('hamburger--close');
    //$('.nav-logo').toggleClass('nav-logo--menu-open');
    $('body').toggleClass('menu-open');
    ev.preventDefault();
    ev.stopPropagation();
});



var aosOn = false;
$(window).scroll(function() {
    if(aosOn === false) {

  AOS.init({
    duration: 1000
    }); 
  aosOn = true;
}
 
});

setTimeout(function() {
    if(aosOn === false) {

  AOS.init({
    duration: 1000
    }); 
  aosOn = true;
}
     }, 3000);



$(window).scroll(function() {
    /*
    var theta = $(window).scrollTop() / 50;
    var neg_theta = theta * (-1);
    var foo = theta + 'px,' + theta + 'px,' + theta * 0.2 + 'px,' + neg_theta * 1.2 + 'px,' + neg_theta + 'px,' + neg_theta + 'px,' + neg_theta + 'px, 0px';
    */
    $('.js-ticker-top').css({ 'transform': 'translateX('+($(window).scrollTop()/2)+'px)'});
    $('.js-ticker-bottom').css({ 'transform': 'translateX(-'+($(window).scrollTop()/2)+'px)'});
    //$('.alternating-block__visual-pattern').css({ 'background-position-y': ($(window).scrollTop()/2)+'px'});
    $('.js-pattern').css({ 'background-position-y': ''+($(window).scrollTop()/10)+'px'});
    $('.js-pattern').css({ 'background-position-x': ''+($(window).scrollTop()/10)+'px'});
});
});