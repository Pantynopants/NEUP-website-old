<?php get_header(); ?>
<body>
<div class="header">
    <div class="header_img">
        <img src="<?php bloginfo('template_url'); ?>/static/neupioneer.png">
    </div>
    <div class="nav">
        <ul class="naviterm">
            <li class="iterms">
                <a style="background: rgb(219, 38, 31) none repeat scroll 0% 0%;
                color: rgb(255, 255, 255);" target="_blank" href="http://www.zgzyz.org.cn/"
                   class="ws1 onli">先锋网首页</a>
            </li>
            <li class="iterms">
                <a class="ws1">东大共青团</a>

                <div class="pp">
                    <div class="ul">
                        <span class="bgsty"><a class="ws2">团委简介</a></span>
                        <span class="bgsty"><a class="ws2">机构设置</a></span>
                        <span class="bgsty"><a class="ws2">工作职责</a></span>
                        <span class="bgsty"><a class="ws2">光辉历程</a></span>
                    </div>
                </div>
            </li>

            <li class="iterms"><a class="ws1">素质拓展</a>

                <div class="pp">
                    <div class="ul">

                        <span class="bgsty"><a class="ws2">思想教育中心</a></span>
                        <span class="bgsty"><a class="ws2">素质拓展中心</a></span>
                        <span class="bgsty"><a class="ws2">社会实践中心</a></span>
                        <span class="bgsty"><a class="ws2">科技创新中心</a></span>
                        <span class="bgsty"><a class="ws2">文化素质中心</a></span>
                    </div>
                </div>
            </li>
            <li class="iterms"><a class="ws1">网上团支部</a>

                <div class="pp">
                    <div class="ul">
                        <span class="bgsty"><a class="ws2">网上团支部</a></span>
                        <span class="bgsty"><a class="ws2">支部博客联盟</a></span>
                        <span class="bgsty"><a class="ws2">团日视频展播</a></span>
                    </div>
                </div>
            </li>
            <li class="iterms">
                <a class="ws1">青年组织</a>

                <div class="pp">
                    <div class="ul">
                        <span class="bgsty"><a class="ws2">学生会</a></span>
                        <span class="bgsty"><a class="ws2">研究生会</a></span>
                        <span class="bgsty"><a class="ws2">社团联合会</a></span>
                        <span class="bgsty"><a class="ws2">志愿者协会</a></span>
                    </div>
                </div>
            </li>
            <li class="iterms">
                <a class="ws1">先锋报刊</a>

                <div class="pp">
                    <div class="ul">
                        <span class="bgsty"><a class="ws2">东大青年报</a></span>
                        <span class="bgsty"><a class="ws2">共青团简报</a></span>
                        <span class="bgsty"><a class="ws2">先锋图吧</a></span>
                    </div>
                </div>
            </li>
            <li class="iterms">
                <a class="ws1">先锋网络</a>

                <div class="pp">
                    <div class="ul">
                        <span class="bgsty"><a class="ws2">先锋技术部</a></span>
                        <span class="bgsty"><a class="ws2">先锋树</a></span>
                        <span class="bgsty"><a class="ws2">先锋星球</a></span>
                        <span class="bgsty"><a class="ws2">先锋博客</a></span>
                        <span class="bgsty"><a class="ws2">先锋广播</a></span>
                        <span class="bgsty"><a class="ws2">先锋电视</a></span>
                        <span class="bgsty"><a class="ws2">先锋论坛</a></span>
                    </div>
                </div>
            </li>
            <li class="iterms">
                <a class="ws1">先锋论坛</a>
            </li>
            <li class="iterms">
                <a class="ws1">文件下载</a>
            </li>
            <div class="clear"></div>
        </ul>
    </div>
</div>
<div class="container">
    <div class="first_line">
        <div id="img_roll">
            <div class="image">
                <div id="left_image">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/static/1.jpg" width=360px height=330px
                                     border=0 name="image_roll"></a>

                    <div id="description">
                        <span>description...</span>
                    </div>
                </div>
                <div id="right_image">
                    <div class="small_image">
                        <a onclick="show(1)">
                            <img src="<?php bloginfo('template_url'); ?>/static/1.jpg" width="72px" height="66px">
                        </a>
                    </div>
                    <div class="small_image">
                        <a onclick="show(2)">
                            <img src="<?php bloginfo('template_url'); ?>/static/2.jpg" width="72px" height="66px">
                        </a>
                    </div>

                    <div class="small_image">
                        <a onclick="show(3)">
                            <img src="<?php bloginfo('template_url'); ?>/static/3.jpg" width="72px" height="66px">
                        </a>
                    </div>
                    <div class="more"><a href="" style="text-decoration: none;color: red"> 更多> </a></div>
                </div>
            </div>
        </div>
        <div id="multipage">
            <div id="up">
                <div class="mul_head">
                    先锋头条
                    <div class="my_border"></div>
                </div>
                <div class="mul_content">
                    <?php
                        query_posts("category_name=先锋头条");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <p><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></p>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="down">
                <div class="mul_head">
                    外媒报导
                    <div class="my_border"></div>
                </div>
                <div class="mul_content">
                    <?php
                        query_posts("category_name=外媒报导");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <p><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></p>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="second_line">
        <div class="block_head">
            专题
        </div>
        <div id="image">
            <div style="width: 1200px;margin: 0px auto" class="banner has-dots">
                <ul>
                    <li style="background-image: url(<?php bloginfo('template_url'); ?>/static/1.gif); width: 1000px;height: 90px"></li>
                    <li style="background-image: url(<?php bloginfo('template_url'); ?>/static/2.png); width: 1000px;height: 90px"></li>
                    <li style="background-image: url(<?php bloginfo('template_url'); ?>/static/3.png); width: 1000px;height: 90px"></li>
                </ul>
            </div>
        </div>
        <script src="<?php bloginfo('template_url'); ?>/mod/jquery_002.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/mod/unslider.js"></script>
        <script>
            if (window.chrome) {
                $('.banner li').css('background-size', '100% 100%');
            }

            $('.banner').unslider({
//        arrows: true,
                arrows: false,
                fluid: true,
                dots: true
            });

            //  Find any element starting with a # in the URL
            //  And listen to any click events it fires
            $('a[href^="#"]').click(function () {
                //  Find the target element
                var target = $($(this).attr('href'));

                //  And get its position
                var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

                //  jQuery will return false if there's no element
                //  and your code will throw errors if it tries to do .offset().left;
                if (pos) {
                    //  Scroll the page
                    $('html, body').animate({
                        scrollTop: pos.top,
                        scrollLeft: pos.left
                    }, 1000);
                }

                //  Don't let them visit the url, we'll scroll you there
                return false;
            });


        </script>
    </div>
    <div class="third_line">
        <div id="third_left">
            <div class="block_content" style="height: 220px">
                <div class="tl_title">
                    <ul>
                        <li id="tl_1" class="tl" style="background-color: red"><a href="#">东大要闻</a></li>
                        <li id="tl_2" class="tl"><a href="#">媒体东大</a></li>
                    </ul>
                </div>
                <div id="ktl_1" class="ktl">
                    <ul>
                    <?php
                        query_posts("category_name=东大要闻");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText_long"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>                       
                    </ul>
                </div>
                <div id="ktl_2" class="ktl">
                    <ul>
                    <?php
                        query_posts("category_name=媒体东大");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText_long"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="third_right">
            <div class="block_content" style="height: 220px">
                <div class="tr_title">
                    <ul>
                        <li id="tr_1" class="tr" style="background-color: red"><a href="#">title1</a></li>
                        <li id="tr_2" class="tr"><a href="#">title2</a></li>
                    </ul>
                </div>
                <div id="ktr_1" class="ktr">
                    <ul>
                        <?php
                        query_posts("category_name=title1");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div id="ktr_2" class="ktr">
                    <ul>
                        <?php
                        query_posts("category_name=title2");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_up_line">
        <div id="up_left">
            <div class="block_head">
                思想引领行动
                <div class="my_border"></div>
            </div>
            <div class="block_content">
                <div class="ful_title">
                    <ul>
                        <li id="ful_1" class="ful" style="background-color: red"><a href="#">title1</a></li>
                        <li id="ful_2" class="ful"><a href="#">title2</a></li>
                    </ul>
                </div>
                <div id="kful_1" class="kful">
                    <ul>
                        <?php
                        query_posts("category_name=title1");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div id="kful_2" class="kful">
                    <ul>
                        <?php
                        query_posts("category_name=title2");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="up_right">
            <div class="block_head">
                素质拓展行动
                <div class="my_border"></div>
            </div>
            <div class="block_content">
                <div class="fur_title">
                    <ul>
                        <li id="fur_1" class="fur" style="background-color: red"><a href="#">title1</a></li>
                        <li id="fur_2" class="fur"><a href="#">title2</a></li>
                    </ul>
                </div>
                <div id="kfur_1" class="kfur">
                    <ul>
                        <?php
                        query_posts("category_name=title1");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div id="kfur_2" class="kfur">
                    <ul>
                        <?php
                        query_posts("category_name=title2");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_down_line">
        <div id="down_left">
            <div class="block_head">
                权益服务行动
                <div class="my_border"></div>
            </div>
            <div class="block_content">
                <div class="fdl_title">
                    <ul>
                        <li id="fdl_1" class="fdl" style="background-color: red"><a href="#">title1</a></li>
                        <li id="fdl_2" class="fdl"><a href="#">title2</a></li>
                    </ul>
                </div>
                <div id="kfdl_1" class="kfdl">
                    <ul>
                        <?php
                        query_posts("category_name=title1");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div id="kfdl_2" class="kfdl">
                    <ul>
                        <?php
                        query_posts("category_name=title2");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="down_right">
            <div class="block_head">
                组织提升行动
                <div class="my_border"></div>
            </div>
            <div class="block_content">
                <div class="fdr_title">
                    <ul>
                        <li id="fdr_1" class="fdr" style="background-color: red"><a href="#">title1</a></li>
                        <li id="fdr_2" class="fdr"><a href="#">title2</a></li>
                    </ul>
                </div>
                <div id="kfdr_1" class="kfdr">
                    <ul>
                        <?php
                        query_posts("category_name=title1");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div id="kfdr_2" class="kfdr">
                    <ul>
                        <?php
                        query_posts("category_name=title2");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="fifth_line">
        <div id="fifth_left">
            <div class="block_head">
                微信
                <div class="my_border"></div>
            </div>
        </div>
        <div id="fifth_mid">
            <div class="block_head">
                微博
                <div class="my_border"></div>
            </div>
        </div>
        <div id="fifth_right">
            <div class="block_head">
                先锋排行
                <div class="my_border"></div>
            </div>
            <div class="block_content">
                <div class="fr_title">
                    <ul>
                        <li id="fr_1" class="fr" style="background-color: red"><a href="#">title1</a></li>
                        <li id="fr_2" class="fr"><a href="#">title2</a></li>
                    </ul>
                </div>
                <div id="kfr_1" class="kfr">
                    <ul>
                        <?php
                        query_posts("category_name=title1");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
                <div id="kfr_2" class="kfr">
                    <ul>
                        <?php
                        query_posts("category_name=title2");
                        if(have_posts())
                        {
                            while(have_posts())
                            {
                                the_post();?>
                                <li>
                                    <div class = "tagText"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sixth_line">
        <div id="sixth_left">
            <div class="block_head">
                先锋海报墙
                <div class="my_border"></div>
            </div>
        </div>
        <div id="sixth_right">
            <div class="block_head">
                先锋校历
                <div class="my_border"></div>
            </div>
            <div class="block_content">

            </div>
        </div>
    </div>
    <div class="some_links">
        <ul>
            <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
        </ul>
    </div>
</div>
<?php get_footer() ?>