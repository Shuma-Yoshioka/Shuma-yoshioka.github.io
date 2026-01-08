
    <footer class="footer">
        <div class="talk">Let's talk</div>
        <a href="<?php echo home_url().'/contact'; ?>" class="btn ctt-btn"><span>Contact</span></a>
        <ul class="footer-link">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url().'/about'; ?>">About</a></li>
            <li><a href="<?php echo get_post_type_archive_link('work'); ?>">Work</a></li>
            <li><a href="<?php echo home_url().'/contact'; ?>">Contact</a></li>
        </ul>
    </footer>

<script src="<?php echo get_template_directory_uri().'/assets/JS/jquery-3.7.1.js';?>"></script>
<script src="<?php echo get_template_directory_uri().'/assets/JS/main.js'?>"></script>
<?php wp_footer(); ?>
</body>
</html>