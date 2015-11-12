/*
 Copyright (c) 2012-2013, loyjers@qq.com. All rights reserved.
 全局类：常用方法
 */

var C = {
    /*
     半透明提示层
     支持：1）直接创建提示；2）页面内隐藏层变半透明显示
     width 提示层宽度
     height 提示层高度
     title 提示层标题内容
     content 提示层 提示内容
     timeout 友情提示 （错误提示） 显示时间， top 友情提示 上边距
     alert_style 设置 错误消息提示样式
     border 设置弹窗层边框粗细
     border_radius 设置边框圆角幅度
     */
    "alert": {
        /*
         始终显示在屏幕中间 obj:始终居中的弹出层对象
         */
        "display_center": function (obj) {
            if (arguments[0]) alert_obj = '.div_tips';
            //弹出层居中
            function setMask() {
                var top = parseInt(($(window).scrollTop() + ($(window).height() - $(obj).height()) / 2)) + "px";
                var left = parseInt(($(window).scrollLeft() + ($(window).width() - $(obj).width()) / 2)) + "px";
                $(obj).css({top: top, left: left});
            }

            //缩放滚动同步
            $(window).bind('resize', setMask);
            $(window).bind('scroll', setMask);
        }

    },
    "tabs": function (__params) {
        //默认选中
        var selected = __params.selected;
        if (__params.selected) {
            selected = __params.selected
        } else {
            selected = __params.params[0].nav;
        }
        //切换动作
        var event = __params.event;
        if (__params.event) {
            event = __params.event
        } else {
            event = 'click';
        }
        //默认样式选中和不选中
        if (!__params.style) __params.style = {"sclass": "selected", "nclass": "selected_no"};
        //切换卡参数
        var params = __params.params;
        //遍历切换卡参数
        for (var i = 0; i < params.length; i++) {
            var tab = params[i];
            //选项卡自定义了样式
            var sclass = __params.style.sclass;
            if (tab.sclass) sclass = tab.sclass;
            var nclass = __params.style.nclass;
            if (tab.nclass) nclass = tab.nclass;
            //判断选中选项卡
            if (selected == tab.nav) {
                $(tab.nav).removeClass(nclass);
                $(tab.nav).addClass(sclass);
                $(tab.con).css({'display': ''});
            } else {
                $(tab.nav).removeClass(sclass);
                $(tab.nav).addClass(nclass);
                $(tab.con).css({'display': 'none'});
            }//alert(event);
            //绑定事件
            $(tab.nav).unbind(event);
            $(tab.nav).bind(event, function () {
                C.tabs({
                    "selected": "#" + $(this).attr('id'),
                    "event": event,
                    "style": __params.style,
                    "params": params
                });
            });
        }
    },
    /*lib库中nbslide幻灯片组件增加功能，使用增加缩略图预览功能
     在幻灯片下方循环输出幻灯广告缩略图 thumb，每个图片的元素加上 onclick="C.slide_click(obj,num)"
     obj 为幻灯片容器标识如 #abc,.abc，num为图片序号，0,1,2,....，反序的
     */
    "nbslide": {
        //缩略图点击显示对应幻灯
        "thumb_click": function (obj, num) {
            var btn = $(obj).find("#btnList li");
            btn.each(function (index) {
                if (index == num) {
                    $(this).click();
                }
            });
        },
        //左右方向按钮控制上一个下一个幻灯
        "pn_click": function (obj, pn) {
            var btn = $(obj).find(".sliderBtn");
            if (pn == 'prev') $(obj).find("#prevBtn").click();
            if (pn == 'next') $(obj).find("#nextBtn").click();
        }
    }
}