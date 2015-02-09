<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package stillhouse
 */

function sh_footer_newsletter_signup() {
  ?>
  
  <p class="footer-subheading">Sign Up For STILLHOUSE News</p>
  <div class="row">
    <form role="form" id="footer-newsletter" class="clearfix" action="//moonshine.us8.list-manage.com/subscribe/post-json?u=b724c70d0a885bc83badc56b7&amp;id=3b5362fe55" method="post" name="mc-embedded-subscribe-form">
      <div class="form-group clearfix">
        <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-8">
          <input id="footer-newsletter-email" type="email" class="form-control" placeholder="enter email address" />
          <button id="footer-newsletter-submit" type="submit" title="Subscribe">Subscribe</button>
          <div id="footer-newsletter-email-response" style="display:none"></div>
        </div>
      </div>
    </form>
  </div>

  <?php 

}
          
          