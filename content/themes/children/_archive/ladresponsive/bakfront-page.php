<?php get_header(); ?>
<?php genesis_home(); ?>

<div id="home-top-bg">
	<div id="home-top">
        <?php if (!dynamic_sidebar('home-slider')) : ?>
			
			<?php endif; ?>
			
        <div class="clear"></div>
				
	</div><!-- end #home-top -->
</div><!-- end #home-top-bg -->

<div id="home-middle-bg">
	<div id="wave"></div>
	<div id="home-middle">
		<div class="home-left">
			<?php if (!dynamic_sidebar('Home Left')) : ?>
			
			<?php endif; ?>
		</div><!-- end .home-middle-1 -->
		
		<div class="home-middle">
			<?php if (!dynamic_sidebar('Home Middle')) : ?>
			
			<?php endif; ?>
		</div><!-- end .home-middle-2 -->
        
        <div class="home-right">
			<?php if (!dynamic_sidebar('Home Right')) : ?>
			
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
		
    </div><!-- end #home-middle -->
</div><!-- end #home-middle-bg -->


<?php get_footer(); ?>