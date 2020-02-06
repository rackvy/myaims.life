$(document).ready(function () {
    $('.js-click-goal-tab').on('click', function () {
        $('.js-click-goal-tab').removeClass('tab-goal-active');
        $(this).addClass('tab-goal-active');

        var id = $(this).data('idgoal');

        $('.js-aim-tab').hide();
        $('.js-aim-number-'+id).show();

        return false;
    });


    $('.js-menu-open').on('click', function(){
        $('body').addClass('overflow-hidden');
        $('.js-xs-menu').css('left', '0px');
        return false;
    });
    $('.js-menu-close').on('click', function(){
        $('body').removeClass('overflow-hidden');
        $('.js-xs-menu').css('left', '-100vw');
        return false;
    });

});