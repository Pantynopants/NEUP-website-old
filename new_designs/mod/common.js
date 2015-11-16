$(function () {
    //工作聚焦地方传真
    C.neup_news({
        "params": [
            {"nav": "#neup_news_1", "con": "#neup_news_1con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#neup_news_2", "con": "#neup_news_2con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#neup_news_3", "con": "#neup_news_3con", "sclass": "cur1", "nclass": "cur1_no"}
        ]
    });
    C.mid_upl({
        "params": [
            {"nav": "#mid_upl_1", "con": "#mid_upl_1con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_upl_2", "con": "#mid_upl_2con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_upl_3", "con": "#mid_upl_3con", "sclass": "cur1", "nclass": "cur1_no"}
        ]
    });
    C.mid_upr({
        "params": [
            {"nav": "#mid_upr_1", "con": "#mid_upr_1con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_upr_2", "con": "#mid_upr_2con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_upr_3", "con": "#mid_upr_3con", "sclass": "cur1", "nclass": "cur1_no"}
        ]
    });
    C.mid_downl({
        "params": [
            {"nav": "#mid_downl_1", "con": "#mid_downl_1con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_downl_2", "con": "#mid_downl_2con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_downl_3", "con": "#mid_downl_3con", "sclass": "cur1", "nclass": "cur1_no"}
        ]
    });
    C.mid_downr({
        "params": [
            {"nav": "#mid_downr_1", "con": "#mid_downr_1con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_downr_2", "con": "#mid_downr_2con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#mid_downr_3", "con": "#mid_downr_3con", "sclass": "cur1", "nclass": "cur1_no"}
        ]
    });
    C.rank({
        "params": [
            {"nav": "#rank_1", "con": "#rank_1con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#rank_2", "con": "#rank_2con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#rank_3", "con": "#rank_3con", "sclass": "cur1", "nclass": "cur1_no"}
        ]
    });
    C.tabs({
        "params": [
            {"nav": "#tr_1", "con": "#tr_1con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#tr_2", "con": "#tr_2con", "sclass": "cur1", "nclass": "cur1_no"},
            {"nav": "#tr_3", "con": "#tr_3con", "sclass": "cur1", "nclass": "cur1_no"}
        ]
    });
});
var C = {
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
    "neup_news": function (__params) {
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
    "mid_upl": function (__params) {
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
    "mid_upr": function (__params) {
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
    "mid_downl": function (__params) {
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
    "mid_downr": function (__params) {
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
    "rank": function (__params) {
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
    }
};