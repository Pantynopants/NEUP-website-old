<?php get_header(); ?>
    <?php 
    	if (have_posts()) 
    	{
    		the_post();  
    	?>
		<h3 ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p>分类：<?php the_category(); ?> </p>
		<p><?php the_tags('标签：', ', ', ''); ?> &bull;<?php the_time('Y年n月j日') ?> &bull; </p>
		<?php the_content(); ?>
		<p > <a href="<?php echo get_option('home'); ?>"  >&lt;&lt; 返回首页</a> </p>
    <?php
    	}
    	else{ ?>
        没有文章！
    <?php } ?>
<?php get_footer(); ?>