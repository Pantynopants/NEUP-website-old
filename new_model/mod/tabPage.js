/**
 * Created by zero on 15-11-15.
 */
$(function () {
    //$("#ktl_1").css({"z-index": "10"});
    //$("#ktl_2").css({"z-index": "9"});
    //$("#ktl_3").css({"z-index": "8"});
    $('.tl_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".ktl").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".ktl").not($("#k" + thisId)).css({"z-index": "0"});
        $(".tl").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
    $('.tm_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".ktm").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".ktm").not($("#k" + thisId)).css({"z-index": "0"});
        $(".tm").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
    $('.tr_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".ktr").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".ktr").not($("#k" + thisId)).css({"z-index": "0"});
        $(".tr").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
    $('.ful_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".kful").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".kful").not($("#k" + thisId)).css({"z-index": "0"});
        $(".ful").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
    $('.fur_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".kfur").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".kfur").not($("#k" + thisId)).css({"z-index": "0"});
        $(".fur").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
    $('.fdl_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".kfdl").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".kfdl").not($("#k" + thisId)).css({"z-index": "0"});
        $(".fdl").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
    $('.fdr_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".kfdr").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".kfdr").not($("#k" + thisId)).css({"z-index": "0"});
        $(".fdr").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
    $('.fr_title li').hover(function () {
        var thisId = $(this).attr("id");
        $(".kfr").not($("#k" + thisId)).animate({opacity: 0}, 300);
        $(".kfr").not($("#k" + thisId)).css({"z-index": "0"});
        $(".fr").not($("#" + thisId)).css("background-color", "#eeeeee");
        $(this).addClass("cur");
        $("#k" + thisId).stop(true, true).animate({opacity: 1.0}, 300);
        $("#k" + thisId).css({"z-index": "10"});
        $("#" + thisId).css("background-color", "red");
    }, function () {
        var thisId = $(this).attr("id");
        $(this).removeClass("cur");
    });
});