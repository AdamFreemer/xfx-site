<?php
/**
 * Title: Footer template.
 *
 * Description: Defines footer content.
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>
</div><!-- #wrapper .container-fluid -->
</div><!-- container -->
<footer class="container-full">
<div class="container">
<div class="row-fluid">
<?php if (cyberchimps_get_option('footer_show_toggle') == '1') { 
	
do_action('cyberchimps_before_footer_widgets'); ?>
<div id="footer-widgets" class="span6">
  <div id="footer-widget-container">
  <div class="row-fluid">
    <?php if ( !dynamic_sidebar('cyberchimps-footer-widgets')) : ?>
      
    <?php endif; ?>
    </div><!-- .row-fluid -->
  </div><!-- #footer-widget-container -->
</div><!-- #footer-widgets .row-fluid  -->

<?php do_action('cyberchimps_after_footer_widgets'); ?>

<?php } ?>	

<?php do_action('cyberchimps_before_footer_container'); ?>

<footer class="site-footer span6">
	<div class="row-fluid">
	
	<?php do_action('cyberchimps_footer'); ?>
	
  </div>
</footer><!-- .site-footer .row-fluid -->

<?php do_action('cyberchimps_after_footer_container'); ?>

<?php do_action('cyberchimps_after_wrapper'); ?>

</div><!-- row fluid -->
</div><!-- container -->
</footer><!-- container-full -->

<?php wp_footer(); ?>

</body>
</html>