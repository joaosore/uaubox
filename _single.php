<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jd
 */

get_header(); ?>
<div class="barba-container" data-namespace="pageconteudosinterna">
		<div class=" container content-area">
			<div class="row">
							
				<main id="main" class="site-main col col-md-8" role="main">
					<div class="box-conteudo">
						<div class='box-img'>
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
						</div>
						<?php echo get_post(get_the_ID())->post_content; ?>
					</div>
				</main><!-- #main -->

				<div class="col col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div><!-- #primary -->
	</div>
<?php
get_footer();
