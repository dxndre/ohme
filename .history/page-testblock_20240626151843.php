<?php
/**
 * Template Name: Page (Test Block)
 * Description: Page Template for the test block.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'ohme-technical-exam' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'ohme-technical-exam' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'ohme-technical-exam' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
