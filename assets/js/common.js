$(document).ready(function() {

    $("#type_01").validationEngine();
    $("#type_02").validationEngine();
    $("#type_03").validationEngine();


    $('.wrap-sub_img li').click(function() {
        var imgpath = $(this).children().attr("src");
        $(".wrap-main_img img").attr("src",imgpath);
        $(".wrap-sub_img li").removeClass("active");
        var getClass = $(this).attr("class");
        switch (getClass) {
            case "box_1":
                $(".wrap-coment_img img").attr("src","assets/img/coment_01.png");
                break;
            case "box_2":
                $(".wrap-coment_img img").attr("src","assets/img/coment_02.png");
                break;
            case "box_3":
                $(".wrap-coment_img img").attr("src","assets/img/coment_03.png");
                break;
            case "box_4":
                $(".wrap-coment_img img").attr("src","assets/img/coment_04.png");
                break;
            case "box_5":
                $(".wrap-coment_img img").attr("src","assets/img/coment_05.png");
                break;
            default:
                $(".wrap-coment_img img").attr("src","assets/img/coment_01.png");
                break;
        }
        $(this).addClass("active");
    });
    var tableClass = ["table_type_01","table_type_02","table_type_03"];
    $('.wrap-contact .form_btn li').click(function() {
        $('.wrap-contact .form_btn li').removeClass("active");
        var getClass = $(this).attr("class");
        for (var i = 0; i < tableClass.length; i++) {
            if(tableClass[i] == getClass){
                $('.wrap-table.'+tableClass[i]).css("display","block");
            }else{
                $('.wrap-table.'+tableClass[i]).css("display","none");
            }
        }
        $(this).addClass("active");
    });
    //inview
    $("#header").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_01 .wrap-logo").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_01 .wrap-page_link").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_01 .wrap-text_box").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_01 #gallery").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_02 .wrap-img_ttl").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_02 .wrap-renovation_img").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_02 #azride_go").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_03 .wrap-img_ttl").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_03 .wrap-pic").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_03 .wrap-vr_img").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_04 .wrap-img_ttl").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_04 .wrap-experience").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_04 .wrap-contact").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_04 .wrap-event").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_01 .sp_wrap-header_ttl_detail").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    $("#sec_05 .wrap-text_box").on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
            $(this).stop().addClass('on');
        }
    });
    //pagelink
    $(function(){
        $('a[href^="#"]').click(function(){
            var speed = 1000;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
    });
    //AjaxZip3
    $(function(){
        $('.search-address_btn_1').click(function(){
            AjaxZip3.zip2addr('zip_1_1', 'zip_1_2', '住所','住所');
        });
        $('.search-address_btn_2').click(function(){
            AjaxZip3.zip2addr('zip_2_1', 'zip_2_2', 'address','address');
        });
        $('.search-address_btn_3').click(function(){
            AjaxZip3.zip2addr('zip_3_1', 'zip_3_2', 'address','address');
        });
    });
    //datepicker
    if(window.matchMedia('screen and (max-width:767px)').matches) {
        $('.datepicker').datepicker({
            beforeShow: function(input, inst) {
                inst.dpDiv.css({marginTop: 10 + 'px', marginLeft: 0 + 'px'});
            }
        });
    }else{
        $('.datepicker').datepicker({
            beforeShow: function(input, inst) {
                inst.dpDiv.css({marginTop: -40 + 'px', marginLeft: 290 + 'px'});
            }
        });
    }
});


function sp_link(type,name_id,name_class){
    var tableClass = ["table_type_01","table_type_02","table_type_03"];
    switch (type) {
        case 1:
        //見学予約する,DIY体験教室
            if($(".wrap-sp_menu_content").hasClass("active")){
                $(".wrap-sp_menu_content").removeClass("active");
            }
            break;
        case 2:
        //menu
            if($(".wrap-sp_menu_content").hasClass("active")){
                $(".wrap-sp_menu_content").removeClass("active");
            }else{
                $(".wrap-sp_menu_content").addClass("active");
            }
            break;
        case 3:
        //wrap-sp_link
            if($(".wrap-sp_menu_content").hasClass("active")){
                $(".wrap-sp_menu_content").removeClass("active");
            }
            var speed = 1000;
            var target = "#"+name_id;
            var position = $(target).offset().top;
            position = position - 44;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
            break;
        case 4:
            if($(".wrap-sp_menu_content").hasClass("active")){
                $(".wrap-sp_menu_content").removeClass("active");
            }
            $('.wrap-contact .form_btn li').removeClass("active");
            // var getClass = name_class;
            // console.log(getClass);
            // for (var i = 0; i < tableClass.length; i++) {
            //     if(tableClass[i] == getClass){
            //         $('.wrap-table.'+getClass).css("display","block");
            //     }else{
            //         $('.wrap-table.'+getClass).css("display","none");
            //     }
            // }
            // $('.wrap-contact .form_btn li.'+name_class).addClass("active");
            var speed = 1000;
            // var target = ".wrap-table."+name_class;
            var target = "#wrap-contact";
            var position = $(target).offset().top;
            console.log(position);
            // position = position - 280;
            position = position - 130;
            console.log(position);
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;

            break;
        default:

    }
}
