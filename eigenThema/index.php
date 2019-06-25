<?=get_header()?>
<main>
    <div class="posts">
        <?php if (have_posts()):
            while (have_posts()): the_post() ?>
                <article class="post">
                    <a href="<?=the_permalink()?>"><h2><?=the_title()?></h2></a>
                    <?=the_content()?>
                </article>
            <?php endwhile;
        else:
            echo '<p>Het ziet er naar uit dat wat je hier zocht, niet bestaat...</p>';
        endif; ?>
    </div>
</main>
<?=get_footer()?>