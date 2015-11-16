<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=<? echo get_bloginfo('charset'); ?>" />
    <meta name="description" content="<? bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- html document -->
    <!--<meta name="viewport"-->
    <!--content="-->
    <!--height = [pixel_value | device-height] ,-->
    <!--width = [pixel_value | device-width ] ,-->
    <!--initial-scale = float_value ,-->
    <!--minimum-scale = float_value ,-->
    <!--maximum-scale = float_value ,-->
    <!--user-scalable = [yes | no] ,-->
    <!--target-densitydpi = [dpi_value | device-dpi | high-dpi | medium-dpi | low-dpi]-->
    <!--"-->
    <!--/>-->
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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen">
<?php wp_head();?>
</head>

