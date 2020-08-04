<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>
<footer class="footer">
  <div class="footer-menu">
      <?php wp_nav_menu(['theme_location' => 'footer_menu']);?>
  </div>
  <div class="foot">
  7525 SE 24TH STREET, SUITE 670 :: MERCER ISLAND, WASHINGTON 98040 :: P / 206 275 2277 F / 206 275 2278 :: <a class="email" href="mailto:INFO@KAUFMANKAMPE.COM">INFO@KAUFMANKAMPE.COM</a> © 2020 KAUFMAN KAMPE ADVISORS LLC
</div>
  <div class="social-menu">
    <?php wp_nav_menu(['theme_location' => 'social_menu']);?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>