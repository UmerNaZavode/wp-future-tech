</div><!-- #page -->

<footer class="footer">
  <div class="footer__inner container">
    <div class="footer__body">
      <nav class="footer__menu">
        <div class="footer__menu-column">
          <!-- <a href="/" class="footer__menu-main-link h6">Home</a> -->
          <?php get_template_part('template-parts/footer/footer-left'); ?>
        </div>
        <div class="footer__menu-column">
          <!-- <a href="/" class="footer__menu-main-link h6">News</a> -->
          <?php get_template_part('template-parts/footer/footer-center-left'); ?>
        </div>
        <div class="footer__menu-column">
          <!-- <a href="/" class="footer__menu-main-link h6">Blogs</a> -->
          <?php get_template_part('template-parts/footer/footer-center-right'); ?>
        </div>
        <div class="footer__menu-column">
          <!-- <a href="/" class="footer__menu-main-link h6">Podcast</a> -->
          <?php get_template_part('template-parts/footer/footer-right'); ?>
        </div>
        <div class="footer__menu-column">
          <!-- <a href="/" class="footer__menu-main-link h6">Resources</a> -->
          <?php get_template_part('template-parts/footer/footer-resources'); ?>
        </div>
      </nav>
    </div>
    <div class="footer__extra">
      <?php get_template_part('template-parts/footer/footer-extra'); ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
