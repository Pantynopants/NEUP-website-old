<?php get_header();?>
<body>
<div id="container" style="background-color: red;">

    <div id="header">
        <div id="header_pic">
            <div class="banner">
                <embed src="<?php bloginfo('template_url'); ?>/static/banner1.swf"
                       pluginspage="http://www.neupioneer.com/go/getflashplayer" type="application/x-shockwave-flash"
                       name="obj1" palette="white|white" height="200" width="1200px">
            </div>
            <!-- /banner -->
        </div>
        <div id="navigator">
            <div id="welcome"><span>欢迎访问东北大学团委先锋网</span>

                <div id="search">
                    <input type="text" style="width: 200px;" placeholder="请输入要查找的内容"><input type="button" value="提交">
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#">先锋网首页</a></li>
                    <li><a href="#">东大共青团</a>
                        <ul>
                            <li><a href="#">团委简介</a></li>
                            <li><a href="#">机构设置</a></li>
                            <li><a href="#">工作职责</a></li>
                            <li><a href="#">光辉历程</a></li>
                        </ul>
                    </li>
                    <li><a href="#">素质拓展</a>
                        <ul>
                            <li><a href="http://www2.neupioneer.com/enac/">思想教育中心</a></li>
                            <li><a href="http://suz.neupioneer.com/">素质拓展中心</a></li>
                            <li><a href="http://219.216.96.15/spc/">社会实践中心</a></li>
                            <li><a href="http://www2.neupioneer.com/kechuang/">科技创新中心</a></li>
                            <li><a href="http://www2.neupioneer.com/enac/">文化素质中心</a></li>
                        </ul>
                    </li>
                    <li><a href="#">网上团支部</a>
                        <ul>
                            <li><a href="http://tzb.neupioneer.com/">网上团支部</a></li>
                            <li><a href="http://tzb.neupioneer.com/home.php">支部博客联盟</a></li>
                            <li><a href="http://tzb.neu-pioneer.cn/tzb/static/video/play.html">团日视频展播</a></li>
                        </ul>
                    </li>
                    <li><a href="#">青年组织</a>
                        <ul>
                            <li><a href="http://suneu.neupioneer.com/">学生会</a></li>
                            <li><a href="http://neugu.neu.edu.cn/">研究生会</a></li>
                            <li><a href="http://sl.neupioneer.com">社团联合会</a></li>
                            <li><a href="http://zyz.neupioneer.com/">志愿者协会</a></li>
                        </ul>
                    </li>
                    <li><a href="#">先锋网络</a>
                        <ul>
                            <li><a href="http://tech.neupioneer.com/">先锋技术部</a></li>
                            <li><a href="http://tree.neup.me/">先锋树</a></li>
                            <li><a href="http://planet.neup.me/">先锋星球</a></li>
                            <li><a href="http://blog.neupioneer.com/summary.php">先锋博客</a></li>
                            <li><a href="http://www2.neupioneer.com/audio">先锋广播</a></li>
                            <li><a href="http://www2.neupioneer.com/tv">先锋电视</a></li>
                            <li><a href="http://bbs.neupioneer.com/">先锋论坛</a></li>
                        </ul>
                    </li>
                    <li><a href="#">文件下载</a></li>
                </ul>
            </nav>

        </div>

        <div id="content">
            <div id="top_news">
                <div id="image_roll">
                    <div class="image">
                        <div id="left_image">
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/static/1.jpg" width=400px height=300px
                                             border=0 name="banner"></a>

                            <div id="description">
                                <span>description...</span>
                            </div>
                        </div>
                        <div id="right_image">
                            <div class="small_image">
                                <a onclick="show(1)">
                                    <img src="<?php bloginfo('template_url'); ?>/static/1.jpg" width="88px" height="66px">
                                </a>
                            </div>
                            <div class="small_image">
                                <a onclick="show(2)">
                                    <img src="<?php bloginfo('template_url'); ?>/static/2.jpg" width="88px" height="66px">
                                </a>
                            </div>

                            <div class="small_image">
                                <a onclick="show(3)">
                                    <img src="<?php bloginfo('template_url'); ?>/static/3.jpg" width="88px" height="66px">
                                </a>
                            </div>
                            <div class="more"><a href="" style="text-decoration: none;color: red"> 更多> </a></div>
                        </div>
                    </div>
                </div>
                <div id="news_list">
                    <div class="top_news">
                        <div id="news">
                            头条新闻
                        </div>
                    </div>

                    <div id="detail" style="margin-bottom: 0px;">
                        <a href="" style="text-decoration: none; float: right;"> 详情 > </a>
                    </div>

                        <div class="normal_news">
                            news1
                        </div>
                        <div class="normal_news">
                            news2
                        </div>
                        <div class="normal_news">
                            news3
                        </div>
                    </div>
                </div>
                <div id="middle_links">
                    <div style="width: 1200px;margin: 0px auto" class="banner has-dots">
                        <ul>
                            <li style="background-image: url(static/1.gif); width: 1200px;height: 250px"></li>
                            <li style="background-image: url(static/2.png); width: 1200px;height: 250px"></li>
                            <li style="background-image: url(static/3.png); width: 1200px;height: 250px"></li>
                        </ul>
                    </div>
                </div>
                <script src="mods/jquery_002.js"></script>
        <script src="mods/unslider.js"></script>
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
                <div id="middle_2">
                    <div class="content_block_1">
                        <div class="block_1_header"><span class="Title_text">站内公告</span>

                            <div class="more"><a href="http://www.neupioneer.com/plus/list.php?tid=6">更多</a></div>
                        </div>
                        <div class="block_1_content">
                            <div class="announce mt1">
                                <ul class="c1 ico2" id="breakNewsList">
                                    <?php
                                    query_posts('category_name=站内公告');
                                    if(have_posts())
                                    {
                                        while(have_posts())
                                        {
                                            the_post();?>
                                            <li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <!--<li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14987.html"
                                           title="关于评选2014-2015学年度东北大学优秀团员和优秀团干部的通知">关于评选2014-2015学年度东北大学优秀团员和优秀团干部的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14988.html"
                                           title="关于开展东北大学首届最美班长、最美寝室长评选网络投票的通知">关于开展东北大学首届最美班长、最美寝室长评选网络投票的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14986.html"
                                           title="关于做好东北大学2014-2015学年度本科生单项奖评选工作的通知">关于做好东北大学2014-2015学年度本科生单项奖评选工作的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14985.html"
                                           title="关于组织开展2014-2015学年度团员民主评议工作的通知">关于组织开展2014-2015学年度团员民主评议工作的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1007/14703.html"
                                           title="关于开展“示范团支部”创建和“十佳团支书”评选工作的通知">关于开展“示范团支部”创建和“十佳团支书”评选工作的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1007/14702.html"
                                           title="关于开展十月份主题团日活动的通知">关于开展十月份主题团日活动的通知</a></li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0922/14668.html"
                                           title="东北大学第十八届研究生支教团拟录取名单公示">东北大学第十八届研究生支教团拟录取名单公示</a></li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0630/14598.html"
                                           title="&lt;strong&gt;东北大学2015年大学生暑期社会实践校级重点团队名单公示&lt;/strong&gt;"><strong>东北大学2015年大学生暑期社会实践校级重点团队名单公示</strong></a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0619/14521.html"
                                           title="&lt;strong&gt;2015年东北大学“理论之光”暑期社会实践校级重点团队名单&lt;/strong&gt;"><strong>2015年东北大学“理论之光”暑期社会实践校级重点团队名单</strong></a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0608/14449.html"
                                           title="&lt;strong&gt;东北大学2015年大学生暑期社会实践立项启动通知&lt;/strong&gt;"><strong>东北大学2015年大学生暑期社会实践立项启动通知</strong></a>
                                    </li>


                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14987.html"
                                           title="关于评选2014-2015学年度东北大学优秀团员和优秀团干部的通知">关于评选2014-2015学年度东北大学优秀团员和优秀团干部的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14988.html"
                                           title="关于开展东北大学首届最美班长、最美寝室长评选网络投票的通知">关于开展东北大学首届最美班长、最美寝室长评选网络投票的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14986.html"
                                           title="关于做好东北大学2014-2015学年度本科生单项奖评选工作的通知">关于做好东北大学2014-2015学年度本科生单项奖评选工作的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1020/14985.html"
                                           title="关于组织开展2014-2015学年度团员民主评议工作的通知">关于组织开展2014-2015学年度团员民主评议工作的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1007/14703.html"
                                           title="关于开展“示范团支部”创建和“十佳团支书”评选工作的通知">关于开展“示范团支部”创建和“十佳团支书”评选工作的通知</a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/1007/14702.html"
                                           title="关于开展十月份主题团日活动的通知">关于开展十月份主题团日活动的通知</a></li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0922/14668.html"
                                           title="东北大学第十八届研究生支教团拟录取名单公示">东北大学第十八届研究生支教团拟录取名单公示</a></li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0630/14598.html"
                                           title="&lt;strong&gt;东北大学2015年大学生暑期社会实践校级重点团队名单公示&lt;/strong&gt;"><strong>东北大学2015年大学生暑期社会实践校级重点团队名单公示</strong></a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0619/14521.html"
                                           title="&lt;strong&gt;2015年东北大学“理论之光”暑期社会实践校级重点团队名单&lt;/strong&gt;"><strong>2015年东北大学“理论之光”暑期社会实践校级重点团队名单</strong></a>
                                    </li>
                                    <li>
                                        <a href="http://www.neupioneer.com/html/zhanneigonggao/2015/0608/14449.html"
                                           title="&lt;strong&gt;东北大学2015年大学生暑期社会实践立项启动通知&lt;/strong&gt;"><strong>东北大学2015年大学生暑期社会实践立项启动通知</strong></a>
                                    </li>-->

                                </ul>
                                <!-- 站内公告滚动代码调用开始 -->
                                <script language="JavaScript" type="text/javascript">
                                    var scroll2 = new ScrollText("breakNewsList", "pre2", "next2", true, 40, true);
                                    scroll2.LineHeight = 200;
                                </script>
                                <!-- 站内公告滚动代码调用结束 -->
                            </div>
                        </div>
                    </div>
                    <div class="content_block_1">
                        <div class="block_1_header"><span class="Title_text">本月热点</span>

                            <div class="more"><a href="#">更多</a></div>
                        </div>
                        <div class="block_1_content">
                            <?php
                                query_posts("category_name=本月热点");
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
                    <div class="content_block_1">
                        <div class="block_1_header"><span class="Title_text">先锋校历</span>
                            
                            <div class="more"><a href="#">更多</a></div>
                        </div>
                        <div class="block_1_content">
                            hello
                        </div>
                    </div>
                </div>
                <div id="middle_left">
                    <div id="left_part">
                        <div class="big_content">
                            <div class="content_header"><span class="Title_text">青春正能量</span>
                            <?php
                                query_posts("category_name=青春正能量");
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
                                <div class="more"><a href="#">更多</a></div>
                            </div>
                        </div>
                        <div class="big_content">
                            <div class="content_header"><span class="Title_text">学习之路</span>
                            <?php
                                query_posts("category_name=学习之路");
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
                                <div class="more"><a href="#">更多</a></div>
                            </div>
                        </div>
                    </div>
                    <div id="right_part">
                        <div class="small_content">
                            <div class="content_header"><span class="Title_text">热点追踪</span>
                                <br>
                            <?php
                                query_posts("category_name=热点追踪");
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
                                <div class="more"><a href="#">更多</a></div>
                            </div>
                        </div>
                        <div class="small_content">
                            <div class="content_header"><span class="Title_text">学院风采</span>
                            <?php
                                query_posts("category_name=学院风采");
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
                                <div class="more"><a href="#">更多</a></div>
                            </div>
                        </div>
                        <div class="small_content">
                            <div class="content_header"><span class="Title_text">东大社团</span>
                            <?php
                                query_posts("category_name=东大社团");
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
                                <div class="more"><a href="#">更多</a></div>
                            </div>
                        </div>
                        <!--<div class="small_content">
                            <div class="content_header"><span class="Title_text">理论学习</span>
                            <?php
                                query_posts("category_name=理论学习");
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
                                <div class="more"><a href="#">更多</a></div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div id="middle_right">
                    <div id="spec_info">
                        <div class="right_header"><span class="Title_text">专题信息</span>

                            <div class="more"><a href="#">更多</a></div>
                        </div>
                        hello
                    </div>
                    <div id="leader_mail">

                    </div>
                    <div id="branch_links">
                        <div class="right_header"><span class="Title_text">部门在线</span></div>
                        hello
                    </div>
                </div>
            </div>
            <?php get_footer();?>