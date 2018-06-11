<?php get_header(); ?>

    <div id="content">
    	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
    			<div class="header"><?php if (get_post_meta($post->ID, 'header', true)) { ?>
	<img src="<? bloginfo('url'); ?>/wp-content/uploads/<? echo get_post_meta($post->ID, 'header', true) ?>" alt="<? bloginfo('name'); ?>" width="576px" height="195px" />
<? } else { ?>
	<img src="<? bloginfo('template_directory'); ?>/images/about_header.jpg" />
<? } ?></div>
    	<div id="contentContent">
          <?php the_content('Read the rest of this entry &raquo;'); ?>
          <?php endwhile; ?>

			<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

		  <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
            <?php get_search_form(); ?>
    
           <?php endif; ?>
   	  </div>
        <p class="copyright">Copyright 2018 Town of Lady Lake.<br /></p>
		<p class="copyright">index.php<br /></p>
    </div>
   <?php get_sidebar(); ?>
  </div></div>

<?php get_footer(); ?>
