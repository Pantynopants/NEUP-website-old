<?php 
    get_header();
?>

<body>
<div class="container">
    <div class='dummy'></div>
    <div class="content">
        <div class="one">
            <!--<div class="log">
                <span>用户名：123456789 密码：123123 验证码：123 登录</span>
            </div>
             -->
            <div class="banner">
                <span>先锋网</span>
            </div>
        </div>
        <div class="two">
            <div class="nav">

                <table border="0px" cellspacing="0">
                    <tr>
                        <td><a href="" style="text-decoration: none"><span>首页</span></a></td>
                        <td><a href="" style="text-decoration: none"><span>东大共青团</span></a></td>
                        <td><a href="" style="text-decoration: none"><span>素质拓展</span></a></td>
                        <td><a href="" style="text-decoration: none"><span>网上团支部</span></a></td>
                        <td><a href="" style="text-decoration: none"><span>青年组织</span></a></td>
                        <td><a href="" style="text-decoration: none"><span>先锋网络</span></a></td>
                        <td><a href="" style="text-decoration: none"><span>文件下载</span></a></td>
                    </tr>
                </table>
            </div>
            <div class="notice">
                <table border="0px" cellspacing="0">
                    <tr>
                        <td style="padding: 0%;margin: -1%;font-size: 1.5vw">欢迎来到东北大学团委先锋网</td>
                        <td>
                            <input type="submit" value="提交"
                                   style="float: right; width: 4vw;height: 2vw; font-size: 1.1vw">
                            <input type="text" placeholder="请输入关键词"
                                   style="float: right;width: 14vw;height: 1.2vw;font-size: 1.1vw">
                        </td>
                    </tr>

                </table>
            </div>
            <div class="context">
                <div class="left">
                    <table border="1px">
                        <tr>
                            <td colspan="1" rowspan="3" height="70%" width="70%">
                                <span>图片</span>
                            </td>
                            <td height="20%" width="20%">
                                <span>图片</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>图片</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>图片</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span>description</span></td>
                            <td><a style="text-decoration: none" href="#"><span>更多></span></a></td>
                        </tr>
                    </table>
                </div>
                <div class="right">
                    <div style="height: 35%;width: 98%;border: solid 1px black;margin: 1%;">
                        <span>头条新闻</span>
                        <?php
                            if(have_posts())
                            {
                                while(have_posts())
                                {
                                    the_post();
                                    $category = get_the_category();
                                    if($category[0]->cat_name=="头条新闻")
                                    {
                        ?>
                        <div><a href="<?php the_permalink(); ?>"><?php the_title()?></a></div>
                        <?php
                                    }
                                }

                            }
                        ?>
                    </div>
                    <div style="height: 55%;width: 98%;border: solid 1px black;margin: 1%;">
                        <ul style="list-style: none">
                            <li><span>新闻</span></li>
                            <?php
                            if(have_posts())
                            {
                                while(have_posts())
                                {
                                    the_post();
                                    $category = get_the_category();
                                    if($category[0]->cat_name=="新闻")
                                    {
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title()?></a></li>
                        <?php
                                    }
                                }

                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="link">
                <span>some link</span>
            </div>
        </div>
        <div class="three">
            <!--这里面内容较多，不一一列举div，自行设计-->
            <div id="notice1"><span>最新公告</span>
            <?php
                if(have_posts())
                    {
                        while(have_posts())
                        {
                            the_post();
                            $category = get_the_category();
                            if($category[0]->cat_name=="公告")
                            {
                        ?>
                        <div><a href="<?php the_permalink(); ?>"><?php the_title()?></a></div>
                        <?php
                            }
                            }

                    }
            ?>
            </div>
            <div id="notice2"><span>最新公告</span>
            <?php
                if(have_posts())
                    {
                        while(have_posts())
                        {
                            the_post();
                            $category = get_the_category();
                            if($category[0]->cat_name=="公告")
                            {
                        ?>
                        <div><a href="<?php the_permalink(); ?>"><?php the_title()?></a></div>
                        <?php
                            }
                            }

                    }
            ?>
            </div>
            <div id="calendar"><span>先锋校历</span>
            <?php
                if(have_posts())
                    {
                        while(have_posts())
                        {
                            the_post();
                            $category = get_the_category();
                            if($category[0]->cat_name=="校历")
                            {
                        ?>
                        <div><a href="<?php the_permalink(); ?>"><?php the_title()?></a></div>
                        <?php
                            }
                            }

                    }
            ?>
            </div>
            <div id="paihang">
                <span>排行榜</span>
                <?php
                if(have_posts())
                {
                    while(have_posts())
                    {
                        the_post();
                        $category = get_the_category();
                            if($category[0]->cat_name=="排行榜")
                            {
                        ?>
                        <div><a href="<?php the_permalink(); ?>"><?php the_title()?></div>
                        <?php
                    }
                    }

                }
            ?>
                <div id="spe1"></div>
                <div id="spe2"></div>
                <div id="spe3"></div>
                <div id="spe4"></div>
                <div id="spe5"></div>
            </div>
            <div id="special"><span>专题信息</span></div>
            <div id="mail"><span>书记信箱</span></div>
            <div id="depart"><span>部门在线</span></div>
        </div>
        
<?php get_footer(); ?>