// JavaScript Document

// スムーズスクロール

jQuery.easing.quart = function (x, t, b, c, d) {
    return -c * ((t=t/d-1)*t*t*t - 1) + b;
};
 

jQuery(document).ready(function(){
 
    // <a href="#***">の場合、スクロール処理を追加
    jQuery('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var $target = jQuery(this.hash);
            $target = $target.length && $target || jQuery('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                jQuery('html,body').animate({ scrollTop: targetOffset }, 1500, 'quart');
                return false;
            }
        }
    });
 
});


$(function(){
	if (jQuery(window).width() < 768) {
		// sp
	} else {
        // pc
	}
});

// modal-navi
$(function(){
    $('#btn_menu_open').click(function(){
        $('body').append('<div class="modal-overlay"></div>');
        $('.modal-overlay').fadeIn;

        var modal = '#' + $(this).attr('data-target');
        modalResize();
        $(modal).fadeIn();

        $('.modal-overlay, #btn_menu_close').off().click(function(){
            $(modal).fadeOut();
            $('.modal-overlay').fadeOut(function(){
                $('.modal-overlay').remove();
            });
        });

        $(window).on('resize', function(){
            modalResize();
        });

        function modalResize(){
            var w = $(window).width();
            var h = $(window).height();

            var x = (w - $(modal).outerWidth(true)) / 0;
            var y = (h - $(modal).outerHeight(true)) / 0;

            $(modal).css({'left': x + 'px','top': y + 'px'});
        }

    });
});
