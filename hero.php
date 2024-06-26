<!-- Variables -->

<?php
    $title = get_field('main_title');
    $subtitle = get_field('subtitle');
    $backgroundImage = get_field('background_image');
    $cta = get_field('cta');
?>

<!-- End of Variables -->

<section class="hero-section" style="background: .<?php echo $backgroundImage ?> .">
    <h2 class="title"><?php echo $title ?></h2>
    <h3 class="Subtitle"><?php echo $subtitle ?></h3>
    <a class="btn cta"><?php echo $cta ?></a>
</section>