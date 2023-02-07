<?php
/**
 * Index template
 *
 * @author   Informatyk Kraków
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<?php the_content(); ?>
		</article>
		<?php
	}
}
get_footer();
