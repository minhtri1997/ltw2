$(document).ready(function() {
    $('.dropdown').hover(function() {
        $(this).find('.toggleMenu').css({ display: 'block' });
    }, function() { $(this).find('.toggleMenu').css({ display: 'none' }); });
    // $('.dropdown-submenu').hover(function(){
    //    $(this).find('.dropdown-menu-1').css({display:'block'});
    // }, function(){$(this).find('.dropdown-menu-1').css({display:'none'});});

    $('.dropdown').click(function() {
        $(this).find('.dropdown-menu').toggle();
    });
    $('.dropdown-submenu').click(function() {
        $(this).find('.dropdown-menu').toggle();
    });
    //-----------btn-menu click-------
    $('.btn-menu').click(function() {
        $('.navbar').slideToggle();
    });

});