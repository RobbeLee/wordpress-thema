<?php
    //header
    get_header();
?>
 <div class="container">
        <main>
        <div class="allArticles">
<?php 
    //wordpress loop in al haar glorie.
    if( have_posts() ):
        while(have_posts()) : the_post(); ?>

   
            <article class="bericht">
                    <?php the_title() ?> </h2>
                    <?php the_content() ?>
            </article>

            <?php
            endwhile;
            else : 
                echo '<p>Er zijn geen berichten gevonden</p>';
            endif; 
            //einde van de wordpress loop.
            ?>
            <div class="postMeta">
                Geplaatst door:
                <?php the_author(); ?>
                op:
                <?php the_date(); ?>
                In de categorie:
                <?php the_category(); ?>
            </div>
            </div>
            
            <aside class="sidebar">
                <?php dynamic_sidebar('widget_aside'); ?>
            </aside>
        </main>
    </div>
    <?php
    //footer
    get_footer();
    ?>