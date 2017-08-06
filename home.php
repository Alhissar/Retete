<?php

/* -- home.php -- */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<!-- affichage du post 196 (galerie) -->


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




<?php setup_postdata( '196' );
$post =  196;?>
<article id="post-196" <?php post_class('animate-article'); ?>>
	<div <?php post_class('animate-article post-base');	?>>
		<header class="entry-header">
			<?php	the_title( '<h2 class="entry-title">', '</h2>' );
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


		<!-- <article class="animate-article">
			<div class="post-base galerie">
				[ngg_images source="galleries" container_ids="1" display_type="photocrati-nextgen_basic_thumbnails" override_thumbnail_settings="0" thumbnail_width="240" thumbnail_height="160" thumbnail_crop="1" images_per_page="20" number_of_columns="0" ajax_pagination="0" show_all_in_lightbox="0" use_imagebrowser_effect="0" show_slideshow_link="1" slideshow_link_text="&#91;Montrer sous forme de diaporama&#93;" order_by="sortorder" order_direction="ASC" returns="included" maximum_entity_count="500"]
			</div>

		</article>

		</main><!-- #main -->

	</div><!-- #primary --> -->

<?php
get_sidebar();
get_footer();
