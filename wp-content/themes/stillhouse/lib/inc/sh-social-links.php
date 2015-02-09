<?php

function sh_social_menu() {
     add_theme_page( 'Social Links', 'Social Links', 'edit_theme_options', 'sh-social-links', 'sh_social_links_settings' );
}

add_action('admin_menu', 'sh_social_menu');

function sh_social_links_settings() {

  if (isset($_POST["update_settings"])) {
    // Do the saving
    
    $twitter = esc_attr($_POST["sh_twitter"]);
    $facebook = esc_attr($_POST["sh_facebook"]);
    $instagram = esc_attr($_POST["sh_instagram"]);

    update_option("sh_twitter", $twitter);
    update_option("sh_facebook", $facebook);
    update_option("sh_instagram", $instagram);

    echo '<div id="message" class="updated"><p><strong>Settings saved</strong></p></div>';
  }
?>

  <div class="wrap">
        <?php screen_icon('themes'); ?> <h2>Social Links</h2>
        <p>Enter the urls to various social platforms</p>
        <form action="" method="post">
          <input type="hidden" name="update_settings" value="Y" />
          <table class="form-table">
            <tr valign="top">
              <th scope="row">
                <label for="sh_twitter">
                  Twitter
                </label>
              </th>
              <td>
                <input type="text" name="sh_twitter" value="<?php echo get_option('sh_twitter'); ?>"/>
              </td>
            </tr> 
            <tr valign="top">
              <th scope="row">
                <label for="sh_facebook">
                  Facebook
                </label>
              </th>
              <td>
                <input type="text" name="sh_facebook" value="<?php echo get_option('sh_facebook'); ?>"/>
              </td>
            </tr>
            <tr valign="top">
              <th scope="row">
                <label for="sh_twitter">
                  Instagram
                </label>
              </th>
              <td>
                <input type="text" name="sh_instagram" value="<?php echo get_option('sh_instagram'); ?>"/>
              </td>
            </tr>      
            <tr valign="top">
              <th scope="row">
                <label></label>
              </th>
              <td>
                <input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" class="button button-primary button-large" />
              </td>
            </tr>                      
          </table>
        </form>
    </div>

<?php
}