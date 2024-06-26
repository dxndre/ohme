<?php
/**
 * Template Name: Page (Test Block)
 * Description: Page Template for the test block.
 *
 */

get_header();

the_post();
?>

<!-- Variables -->

<?php
    $title = get_field('main_title');
    $subtitle = get_field('subtitle');
    $backgroundImage = get_field('background_image');
    $cta = get_field('cta');
?>

<!-- End of Variables -->

<section class="hero-section" style="background:<?php echo $backgroundImage['url'] ?>">
    <h2 class="title"><?php echo $title ?></h2>
    <h3 class="Subtitle"><?php echo $subtitle ?></h3>
    <a class="btn cta" href="<?php echo $cta['url'] ?>" target="<?php $cta['target'] ?>"><?php echo $cta['title'] ?></a> 
</section>

<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
