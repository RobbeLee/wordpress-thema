<footer class="footer">
    <nav> 
         <?php $arguments = array('theme_location' => 'footer', ) ?>
         <?php wp_nav_menu($arguments); ?> 
    </nav>
        <div class="footer__copyright">
            &copy;
            <?php the_author(); ?> ~ <?php echo date('Y'); ?>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>