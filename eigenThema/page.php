<?=get_header()?>
<main>
    <?php if(have_posts()):
        while(have_posts()): the_post() ?>
            <article class="post">
                <h2><?=the_title()?></h2>
                <?=the_content()?>
            </article>
        <?php endwhile;
    else : 
        echo '<p>Het lijkt erop dat hier niks is...</p>';
    endif; ?>
    
</main>
<?=get_footer()?>