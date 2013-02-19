<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<a id="admin_link" href="<?php print $base_path; ?>admin">Admin</a>


<header id="header">
  <div class="container">
    <div class="row">

      <nav class="twelve columns">
        <?php print render($page['navigation']); ?>
      </nav><!--End NAVIGATION-->

      <div class="twelve columns" id="establishment">
        <?php print render($page['establishment_bar']); ?>
      </div><!--End Establishment-->

      <?php if($is_front): ?>
        <div class="twelve columns" id="introduction">
          <?php print render($page['introduction']); ?>
        </div><!--End Introduction-->
      <?php endif; ?>
      
      <?php if($is_front): ?>
        <div class="twelve columns" id="featured_images">
          <?php print render($page['featured_images']); ?>
        

          <img  class="first" src="<?php print $base_path; ?>sites/all/themes/amazon/images/feat_one.png" />
          <img  src="<?php print $base_path; ?>sites/all/themes/amazon/images/feat_two.png" />
          <img  class="last" src="<?php print $base_path; ?>sites/all/themes/amazon/images/feat_three.png" />
        </div><!--End Featured Images-->
      <?php endif; ?>

      <?php if(!$is_front): ?>
        <div class="page_title">
          <?php print $title; ?>
        </div>
      <?php endif; ?>


    <?php print render($page['header']); ?>
    </div>
  </div>
</header>

<div class="container">

  <div class="row"> 
    <div id="paper">
      <div id="content_container_top"></div>
        <div id="content_container">

          <div class="twelve columns" id="drupal_native">
            <?php print $messages; ?>
            <?php print render($tabs); ?>
          </div>

          <?php if ($page['twelve_col_top']): ?>
            <div class="twelve columns container_shadow" id="region_twelve_content_top">
              <?php print render($page['twelve_col_top']); ?>
            </div><!--End Region Twelve Content Top-->
          <?php endif; ?>

           <?php if ($page['twelve_col_view']): ?>
            <div class="twelve columns container_view" id="region_twelve_content_view">
              <?php print render($page['twelve_col_view']); ?>
            </div><!--End Region Twelve Content Top-->
          <?php endif; ?>


          <?php if ($page['five_col_left']): ?>
            <div class="five columns container_shadow" id="region_five_sidebar_left">
              <?php print render($page['five_col_left']); ?>
            </div><!--End Region Five Left Sidebar-->
          <?php endif; ?>

          <?php if ($page['seven_col']): ?>
            <div class="seven columns container_shadow" id="region_seven_content">
              <?php print render($page['seven_col']); ?>
            </div><!--End Region Seven Content-->
          <?php endif; ?>

          <?php if ($page['featured_comment']): ?>
            <div class="five columns container_shadow" id="region_featured_comment">
              <div id="featured_comment_wrapper">
                <?php print render($page['featured_comment']); ?>
              </div>
            </div><!--End Region Featured Comment-->
          <?php endif; ?>

          <?php if ($page['five_col_right']): ?>
            <div class="five columns container_shadow" id="region_five_sidebar_right">
              <?php print render($page['five_col_right']); ?>
            </div><!--End Region Five Sidebar Right-->
          <?php endif; ?>
          

          <?php if ($page['twelve_col_bottom']): ?>
            <div class="twelve columns container_shadow" id="region_twelve_content_bottom">
              <?php print render($page['twelve_col_bottom']); ?>
            </div><!--End Region Twelve Content Bottom-->
          <?php endif; ?>


        </div>
      <div id="content_container_bottom"></div>
    </div><!--End Paper-->
  </div><!-- /#Content -->



<footer class="container">

  <div class="row" id="footer_container">
    

  </div><!-- /#Footer Container -->

</footer>

<?php print render($page['bottom']); ?>
