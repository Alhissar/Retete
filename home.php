<?php

/* -- home.php -- */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : if ( is_home() && ! is_front_page() ) : ?>

				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile; ?>

			<div class="postpagination">

				<?php the_posts_pagination(); ?>

			</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


		<?php setup_postdata( '296' );
		$post =  296;?>
			<article id="post-296" <?php post_class('animate-article'); ?>>
				<div <?php post_class('animate-article post-base');	?>>
					<header class="entry-header">
						<?php	the_title( '<h2>', '</h2>' );
						?>

					</header><!-- .entry-header -->


					<div class="entry-content">

						<?php
							the_content();
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php seos_photography_entry_footer(); ?>
					</footer><!-- .entry-footer -->

				</div>
			</article><!-- #post-## -->

		</main>
	</div>
	
<?php
get_sidebar();
get_footer();
