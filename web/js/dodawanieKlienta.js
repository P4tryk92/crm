
jQuery(function($)
{ //przewijanie do sekcji
    $.scrollTo(0);
    $('#podstawowe').click(function()
    {
        $.scrollTo($('#podstaw'), 400);
    });
    $.scrollTo(0);
    $('.przewijanie').click(function()
    {
        $.scrollTo($('body'), 400);
    });
});

jQuery(function($)
{ //przewijanie do sekcji
    $.scrollTo(0);
    $('#dodatkowe').click(function()
    {
        $.scrollTo($('#dodatk'), 400);
    });
    $.scrollTo(0);
    $('.przewijanie').click(function()
    {
        $.scrollTo($('body'), 400);
    });
});

jQuery(function($)
{ //przewijanie do sekcji
    $.scrollTo(0);
    $('#kontaktowe').click(function()
    {
        $.scrollTo($('#kontakt'), 400);
    });
    $.scrollTo(0);
    $('.przewijanie').click(function()
    {
        $.scrollTo($('body'), 400);
    });
});

jQuery(function($)
{ //przewijanie do sekcji
    $.scrollTo(0);
    $('#wynagrodzeniu').click(function()
    {
        $.scrollTo($('#wynagr'), 500);
    });
    $.scrollTo(0);
    $('.przewijanie').click(function()
    {
        $.scrollTo($('body'), 500);
    });
});

//powrót do góry
$(window).scroll(function()
{
    if($(this).scrollTop()>70) $('.przewijanie').fadeIn();
    else $('.przewijanie').fadeOut();
                
});

