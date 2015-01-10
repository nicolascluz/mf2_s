<?php
/**
 * @package MF2_S
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); mf2_s_semantics("post"); ?>>
        <?php get_template_part( 'templates/entry', 'header' ); ?>
	<?php
	if (function_exists('response_display')) { response_display(); }
	if (is_search() ) {
		echo '<div class="entry-summary p-summary" itemprop="description">';
		the_excerpt();
		echo '</div><!-- .entry-summary -->';
	     }
	else {
		echo '<div class="entry-content e-content" itemprop="description articleBody">';
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'mf2_s' ),
			'after'  => '</div>',
		) );
	      
		echo '</div><!-- .entry-content -->';
	     }

	?>
	<?php get_template_part( 'templates/entry', 'footer' ); ?>
</article><!-- #post-## -->