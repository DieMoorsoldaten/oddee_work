$(document).ready(function () {
    $('.header__burger').click(function () {
        $('.header').toggleClass('open-menu');
        $('.header').removeClass('open-menu-second');
    });


    $('#menu-item-83').click(function (e) {
        e.preventDefault();
        $('.header').toggleClass('open-menu-second');
    });


    $('#menuBtn').click(function (e) {
        e.preventDefault();
        $('.header').removeClass('open-menu-second');
    });


    var btn = $('.to-up');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    function activeTab(link) {
        const id = link.parents("li").attr("id");
        link.addClass('act').parents("li").siblings("li").find("a").removeClass('act');

        $('.page-cases .cases').fadeOut(200);
        $('[data-tab="'+ id +'"]').fadeIn(200);
    }

    $('#menu-cases-menu li:first-child').find("a").addClass('act');
    $('.page-cases .cases:first-child').fadeIn(0);


    $('#menu-cases-menu a').click(function (e) {
        e.preventDefault();

        activeTab($(this));

        //     $('#menu-cases-menu a').removeClass('act');
        //     $(this).addClass('act');

        // if($('#menu-cases-menu a').hasClass('act')){
        //     $('.page-cases').addClass('case-action');
        // } else{
        //     $('.page-cases').removeClass('case-action');
        // }

        // if($('#menu-item-384 a').hasClass('act') && $('.page-cases').hasClass('case-action') ){
        //     $('.cases1').fadeIn();
        // } else{
        //     $('.cases1').fadeOut();
        // }

        // if($('#menu-item-385 a').hasClass('act') && $('.page-cases').hasClass('case-action') ){
        //     $('.cases2').fadeIn();
        // } else{
        //     $('.cases1').fadeOut();
        // }

        // if($('#menu-item-388 a').hasClass('act') && $('.page-cases').hasClass('case-action') ){
        //     $('.cases3').fadeIn();
        // } else{
        //     $('.cases1').fadeOut();
        // }

        // if($('#menu-item-386 a').hasClass('act') && $('.page-cases').hasClass('case-action') ){
        //     $('.cases4').fadeIn();
        // } else{
        //     $('.cases1').fadeOut();
        // }

        // if($('#menu-item-387 a').hasClass('act') && $('.page-cases').hasClass('case-action') ){
        //     $('.cases5').fadeIn();
        // } else{
        //     $('.cases1').fadeOut();
        // }

    });

    
});