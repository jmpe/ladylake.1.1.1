<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="https://www.ladylake.1.1.1.dev.cc/scripts/typeface-0.15.js"></script>
<script type="text/javascript" src="https://www.ladylake.1.1.1.dev.cc/scripts/optimer_regular.typeface.js"></script>
<script type="text/javascript" src="https://www.ladylake.1.1.1.dev.cc/scripts/optimer_italic.typeface.js"></script>
<script type="text/javascript" src="https://www.ladylake.1.1.1.dev.cc/scripts/optimer_bold_italic.typeface.js"></script>
<script type="text/javascript" src="https://www.ladylake.1.1.1.dev.cc/scripts/optimer_bold.typeface.js"></script>
<script type="text/javascript" src="https://www.ladylake.1.1.1.dev.cc/scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="https://www.ladylake.1.1.1.dev.cc/scripts/jquery.cross-slide.js"></script>
<script type="text/javascript" > 
  $(function() {
    $('#slideshow').crossSlide({sleep: 5, fade: 1}, 
      [
        { src: 'https://www.ladylake.1.1.1.dev.cc/wp-content/themes/lady-lake/images/slideshow/ladylake_blvd.jpg' },
        { src: 'https://www.ladylake.1.1.1.dev.cc/wp-content/themes/lady-lake/images/slideshow/lake1.jpg'   },
        { src: 'https://www.ladylake.1.1.1.dev.cc/wp-content/themes/lady-lake/images/slideshow/crossroads.jpg'  },
        { src: 'https://www.ladylake.1.1.1.dev.cc/wp-content/themes/lady-lake/images/slideshow/sunset.jpg' }
      ]);      
  });
</script> 

<?php wp_head(); ?>
</head>

<body>
<div id="top"></div>
<div id="contentBg">
  <div id="shell">
  	<div id="sideNav">
      <a href="<?php echo get_option('home'); ?>/"><img src="/wp-content/themes/lady-lake/images/logo.png" alt="lady lake logo" border="0" class="logo" /></a>
        <ul>
          <?php $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0'); 
            if ($children) { ?>
					  <?php echo $children; ?>
					  </ul>
					  <?php } ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar2') ) : ?>
			    <?php endif; ?>
    </div>

    <div id="nav">
      <ul>
        <?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
      </ul>
    </div>