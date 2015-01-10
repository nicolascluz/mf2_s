<?php
/**
 * The template for displaying the Kind Taxonomy(if available)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MF2_S
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
                                    /* Include the Kind-specific template for the content, for Indieweb Post Kinds
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Kind name) and that will be used instead.
                                     */
                                     get_template_part( 'templates/content', get_post_kind() );
				?>

			<?php endwhile; ?>

                        <?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'templates/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
