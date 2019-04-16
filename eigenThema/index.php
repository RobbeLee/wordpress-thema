<?php
//header
get_header();

//wordpress loop in al haar glorie.
if( have_posts() ):
    while(have_posts()) : the_post(); ?>

<h2><?php the_title() ?> </h2>
    <?php the_content() ?>

<?php
endwhile;
else : 
    echo '<p>Er zijn geen berichten gevonden</p>';
endif;
//einde van de wordpress loop.

//footer
get_footer();
?>