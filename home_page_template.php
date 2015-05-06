<?php
/*
Template Name: My Custom Page
*/
get_header(); ?>

	<div id="full-page" class="content-area">


  <?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);
      if($post_query->have_posts() ) {
          while($post_query->have_posts() ) {
            $post_query->the_post();

            if ( has_post_thumbnail() ) : ?>
            <div class="grid-image">
          	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          	<?php the_post_thumbnail(); ?>
          	</a>
          </div>
            <?php endif;

  }
}
?>

	</div><!-- #primary -->


<?php get_footer(); ?>
