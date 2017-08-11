$(document).ready(function() {
    
    $('#my-slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: true,
        arrows: true,
        dots: true
    });
    
     $('#slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '#slider-nav'
    });
    
    $('#slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '#slider-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });

    $('.hover').hover(function() {
        $(this).toggleClass('nav-active'); 
    });
      
    $('.hover-design').hover(function() {
        $(this).toggleClass('img-active');
    });
    
    
    $('.switch').click(function() {
      $('.switch-active').removeClass('switch-active');
    $(this).addClass('switch-active');
    });
    
    $('.proj-nav > a').click(function() {
        
        var ix = $(this).index();
    
        $('#design').toggle( ix === 0 )
        $('#web').toggle( ix === 1 );
    });
    
    $('#about').mouseenter(function() {
        $('.mouseEnter').addClass('h1-active');
    });
    
    $('#projects').mouseenter(function() {
        $('.mouseEnter2').addClass('h1-active');
    });
    
    $('#contact').mouseenter(function() {
        $('.mouseEnter3').addClass('h1-active');
    });
    
    $('.social-lockup .icon-fb').mouseenter(function() {
        $(this).effect('bounce',500);
    });
    $('.icon-insta').mouseenter(function() {
        $(this).effect('bounce',500);
    });
    $('.icon-twitter').mouseenter(function() {
        $(this).effect('bounce',500);
    });
    $('.icon-pinterest').mouseenter(function() {
        $(this).effect('bounce',500);
    });
    
    $('#btn-hover').hover(function() {
        $('.prev').toggleClass('prev-active'); 
    });
    
    $('#btn-hover2').hover(function() {
        $('.next').toggleClass('next-active'); 
    });
    
    $('.logo img').hide().show("slide", { direction: "left" }, 1500);
    
    $('.kicker').hide().show("slide", { direction: "right" }, 1500);
});

