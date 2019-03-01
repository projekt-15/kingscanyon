/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function($) {
    //menu control
    $('#menu-control').on('click',function(){
        $(this).toggleClass('menu-is-open');
        $('body').toggleClass('is-locked');
        $('#masthead').toggleClass('show-the-menu');
    });

    // create section nav items and add class to first
    var whatPage = '#' + $('.current-menu-item').attr('id');
    $('.page-section').each(function(){
        var sectionName = $(this).attr('data-section-name');
        var sectionId = $(this).attr('id');
        $('#page-menu').append('<a href=#'+ sectionId + ' class="section-nav">' + sectionName + '</a>');
    });

    // clicking on menu item section
    $('.section-nav').on('click',function(e){
        e.preventDefault();
        $('#menu-control').toggleClass('menu-is-open');
        $('#masthead').toggleClass('show-the-menu');
        $('body').toggleClass('is-locked');
        $(this).addClass('current-section');
        var goId = $(this).attr('href');
        setTimeout(function(){
            $('body').animate({
                scrollTop:$(goId).offset().top
            });
        },150);
    });

} )(jQuery);
