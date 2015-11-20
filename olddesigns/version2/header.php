<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
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
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo get_bloginfo('charset'); ?>"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/style/base.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/style/home.css" type="text/css" media="screen" charset="utf-8">

    <link href="<?php bloginfo('template_url'); ?>/assets/style/dropdown.css" rel="stylesheet" media="screen" type="text/css"/>
    <link href="<?php bloginfo('template_url'); ?>/assets/style/notice.css" rel="stylesheet" media="screen" type="text/css"/>

    <link href="<?php bloginfo('template_url'); ?>/assets/style/dedecms.css" rel="stylesheet" media="screen" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/assets/style/image_roll.css" rel="stylesheet" media="screen" type="text/css">

    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">
        function ScrollText(content, btnPrevious, btnNext, autoStart, timeout, isSmoothScroll) {
            this.Speed = 10;
            this.Timeout = timeout;
            this.stopscroll = false;//是否停止滚动的标志位
            this.isSmoothScroll = isSmoothScroll;//是否平滑连续滚动
            this.LineHeight = 20;//默认高度。可以在外部根据需要设置
            this.NextButton = this.$(btnNext);
            this.PreviousButton = this.$(btnPrevious);
            this.ScrollContent = this.$(content);
            this.ScrollContent.innerHTML += this.ScrollContent.innerHTML;//为了平滑滚动再加一遍

            if (this.PreviousButton) {
                this.PreviousButton.onclick = this.GetFunction(this, "Previous");
                this.PreviousButton.onmouseover = this.GetFunction(this, "MouseOver");
                this.PreviousButton.onmouseout = this.GetFunction(this, "MouseOut");
            }
            if (this.NextButton) {
                this.NextButton.onclick = this.GetFunction(this, "Next");
                this.NextButton.onmouseover = this.GetFunction(this, "MouseOver");
                this.NextButton.onmouseout = this.GetFunction(this, "MouseOut");
            }
            this.ScrollContent.onmouseover = this.GetFunction(this, "MouseOver");
            this.ScrollContent.onmouseout = this.GetFunction(this, "MouseOut");

            if (autoStart) {
                this.Start();
            }
        }
        ScrollText.prototype = {

            $: function (element) {
                return document.getElementById(element);
            },
            Previous: function () {
                this.stopscroll = true;
                this.Scroll("up");
            },
            Next: function () {
                this.stopscroll = true;
                this.Scroll("down");
            },
            Start: function () {
                if (this.isSmoothScroll) {
                    this.AutoScrollTimer = setInterval(this.GetFunction(this, "SmoothScroll"), this.Timeout);
                }
                else {
                    this.AutoScrollTimer = setInterval(this.GetFunction(this, "AutoScroll"), this.Timeout);
                }
            },
            Stop: function () {
                clearTimeout(this.AutoScrollTimer);
                this.DelayTimerStop = 0;
            },
            MouseOver: function () {
                this.stopscroll = true;
            },
            MouseOut: function () {
                this.stopscroll = false;
            },
            AutoScroll: function () {
                if (this.stopscroll) {
                    return;
                }
                this.ScrollContent.scrollTop++;
                if (parseInt(this.ScrollContent.scrollTop) % this.LineHeight != 0) {
                    this.ScrollTimer = setTimeout(this.GetFunction(this, "AutoScroll"), this.Speed);
                }
                else {
                    if (parseInt(this.ScrollContent.scrollTop) >= parseInt(this.ScrollContent.scrollHeight) / 2) {
                        this.ScrollContent.scrollTop = 0;
                    }
                    clearTimeout(this.ScrollTimer);
                    //this.AutoScrollTimer = setTimeout(this.GetFunction(this,"AutoScroll"), this.Timeout);
                }
            },
            SmoothScroll: function () {
                if (this.stopscroll) {
                    return;
                }
                this.ScrollContent.scrollTop++;
                if (parseInt(this.ScrollContent.scrollTop) >= parseInt(this.ScrollContent.scrollHeight) / 2) {
                    this.ScrollContent.scrollTop = 0;
                }
            },
            Scroll: function (direction) {

                if (direction == "up") {
                    this.ScrollContent.scrollTop--;
                }
                else {
                    this.ScrollContent.scrollTop++;
                }
                if (parseInt(this.ScrollContent.scrollTop) >= parseInt(this.ScrollContent.scrollHeight) / 2) {
                    this.ScrollContent.scrollTop = 0;
                }
                else if (parseInt(this.ScrollContent.scrollTop) <= 0) {
                    this.ScrollContent.scrollTop = parseInt(this.ScrollContent.scrollHeight) / 2;
                }

                if (parseInt(this.ScrollContent.scrollTop) % this.LineHeight != 0) {
                    this.ScrollTimer = setTimeout(this.GetFunction(this, "Scroll", direction), this.Speed);
                }
            },
            GetFunction: function (variable, method, param) {
                return function () {
                    variable[method](param);
                }
            }
        }
        function ignoreError() {
            return true;
        }
        window.onerror = ignoreError;
    </script>

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
            document.banner.src = banArray[counter].src; //sets a new banner
            counter++;
        }
        var timer = window.setInterval("changeBanner()", 4000);
        function show(number) {
            clearInterval(timer);
            document.banner.src = "<?php bloginfo('template_url'); ?>/static/" + number + ".jpg";
            counter = number;
            timer = window.setInterval("changeBanner()", 4000);
        }
    </script>
    <?php wp_head();?>
</head>