<?php

/**
 * Shortcode handler
 */
 
$class = "fb-comments " . $class;

$x_facebook_comments_options = apply_filters( 'x_facebook_comments_options', get_option( 'x_facebook_comments' ) );
if ( $x_facebook_comments_options != '' ) {

  $x_facebook_comments_number_posts = $x_facebook_comments_options['x_facebook_comments_number_posts'];
  $x_facebook_comments_order_by     = $x_facebook_comments_options['x_facebook_comments_order_by'];
  $x_facebook_comments_color_scheme = $x_facebook_comments_options['x_facebook_comments_color_scheme'];

}
?>

<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
	<div id="comments" class="x-comments-area">
	  <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="<?php echo $x_facebook_comments_number_posts; ?>" data-colorscheme="<?php echo $x_facebook_comments_color_scheme; ?>" data-order-by="<?php echo $x_facebook_comments_order_by; ?>" data-width="100%" data-mobile="<?php echo $data_mobile; ?>"></div>
	</div>
</div>
