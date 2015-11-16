<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo get_bloginfo('charset'); ?>"/>
    <base target="_blank"/>
    <title>
        <?php 
        if(is_home())
        {
            bloginfo('name');
        }
        elseif(is_category())
        {
            single_cat_title();
            echo ' - ';
            bloginfo('name');
        }
        elseif(is_search())
        {
            echo "搜索结果 - ";
            bloginfo('name');
        }
        elseif(is_404())
        {
            echo "页面不存在";
        }
        else{
            wp_title('',true);
        }
        ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/body.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/image_roll.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/style.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/footer.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/multipage.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/navbar.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/tagPage.css" type="text/css">


    <script language="javascript" type="text/javascript"
            src="<?php bloginfo('template_url'); ?>/mod/jquery-nav.js"></script>
    <script language="javascript" type="text/javascript"
            src="<?php bloginfo('template_url'); ?>/mod/jquery.min.js"></script>
    <!--第一行左侧，换图-->
    <script type="text/JavaScript">
        var banArray = new Array(3);
        var counter = 1;
        if (document.images) {
            for (i = 0; i < 3; i++) {
                banArray[i] = new Image(468, 60);
                banArray[i].src = "<?php bloginfo('template_url'); ?>/static/" + (i + 1) + ".jpg";
            }
        }
        function changeBanner() {
            if (counter > 2)
                counter = 0;
            document.image_roll.src = banArray[counter].src; //sets a new banner
            counter++;
        }
        var timer = window.setInterval("changeBanner()", 4000);
        function show(number) {
            clearInterval(timer);
            document.image_roll.src = "<?php bloginfo('template_url'); ?>/static/" + number + ".jpg";
            counter = number;
            timer = window.setInterval("changeBanner()", 4000);
        }
    </script>

    <script language="javascript" type="text/javascript"
            src="<?php bloginfo('template_url'); ?>/mod/jquery-1.js"></script>
    <script type="text/javascript"
            src="<?php bloginfo('template_url'); ?>/mod/common.js"></script>
    <!--换图结束-->

    <!--导航栏-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            <!---------导航显示信息--------  -->
            $('.naviterm .iterms').each(function () {
                $('.onli').css("background", "#db261f");
                $('.onli').css("color", "#fff");
                $(this).mouseover(function () {
                    $('.onli').css("background", "none");
                    $('.onli').css("color", "#111");
                    $(this).find('.ws1').css("background", "#db261f");
                    $(this).find('.ws1').css("color", "#fff");
                    $(this).find('.pp').css("display", "block");
                    $(this).find('.bgsty').mouseover(function () {
                        $(this).css("background", "#db261f");
                        $(this).find('.ws2').css("color", "#fff");
                    })
                    $(this).find('.bgsty').mouseout(function () {
                        $(this).css("background", "none");
                        $(this).find('.ws2').css("color", "#111");
                    })

                })
                $(this).mouseout(function () {
                    $(this).find('.ws1').css("background", "none");
                    $(this).find('.ws1').css("color", "#111");
                    $(this).find('.pp').css("display", "none");
                    $('.onli').css("background", "#db261f");
                    $('.onli').css("color", "#fff");
                })
            })
        })
    </script>
    <!--导航栏结束-->

    <!--标签页-->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/mod/tabPage.js"></script>
    <!--标签页结束-->
    <?php wp_head();?>
</head>