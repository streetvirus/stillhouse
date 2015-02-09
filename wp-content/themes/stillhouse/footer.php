<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <p class="enjoy">Enjoy Responsibly</p>
          <p class="legalese">
            <strong>&copy; 2014 STILLHOUSE SPIRITS CO.</strong>. STILLHOUSE&reg; MOONSHINE WHISKEY IS PRODUCED AND BOTTLED BY STILLHOUSE SPIRITS&reg; CO. IN LOUISVILLE, KENTUCKY, USA.
          </p>
          <p class="legalese">
            STILLHOUSE&reg; ORIGINAL MOONSHINE&reg; IS 100% CORN WHISKEY, 40% ALC. BY VOL. STILLHOUSE APPLE CRISP, COCONUT AND PEACH TEA MOONSHINE ARE MADE OF CORN WHISKEY INFUSED WITH NATURAL FLAVOR AND 20% ALC. BY VOL.  STILLHOUSE&reg; RED HOT MOONSHINE IS MADE OF CORN WHISKEY INFUSED WITH NATURAL FLAVOR - 34.5% ALC. BY VOL.
          </p>
        </div>
        <div class="col-sm-5">
          <?php sh_footer_newsletter_signup(); ?>
          <p class="footer-subheading">connect with us</p>
          <ul class="social-link-list">
            <li>
              <a href="https://www.facebook.com/moonshine" target="_blank" title="Stillhouse on Facebook">
                <i class="social-icon social-icon--facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/MOONSHINE" target="_blank" title="Stillhouse on Twitter">
                <i class="social-icon social-icon--twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://instagram.com/stillhousemoonshine" target="_blank" title="Stillhouse on Instagram">
                <i class="social-icon social-icon--instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php if(is_home()): ?>
  <div id="age-check" style="display:none;">
    <div id="age-check-popup">
      <h3>Please Verify Your Age</h3>
      <h4>Are you over 21?</h4>
      <div class="age-verify-buttons">
        <button class="btn" id="age-check-yes">YES</button>
        <button class="btn" id="age-check-no">NO</button>
      </div>
      <p class="age-check-legal">
        By click the button you agree to the terms and conditions <a href="<?php echo get_permalink( get_page_by_title( 'Terms' )->ID ); ?>">found here</a>.
      </p>
      <p class="age-check-legal">stillhouse original moonshine &copy; 2014</p>
    </div>
    <div id="age-check-bg"></div>
  </div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
