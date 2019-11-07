<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jd
 */

?>
	<footer>
    <div class="redes-sociais">
      <img src="<?php echo get_template_directory_uri() ?>/imgs/facebook-icon.svg" class="facebook" alt="Facebook">
      <img src="<?php echo get_template_directory_uri() ?>/imgs/instagram-icon.svg" class="instagram" alt="Instagram">
      <img src="<?php echo get_template_directory_uri() ?>/imgs/mail-icon.svg" alt="Mail">
    </div>
    <div class="link">
      <p>WWW.UAUBOX.COM.BR</p>
    </div>
    <div class="direitos">
      <p>TODOS OS DIREITOS RESERVADOS</p>
    </div>
	</footer>
	
</div>
<?php wp_footer(); ?>

<script defer type="text/javascript">
	SITE_KEY = '<?php echo SITE_KEY; ?>';
</script>
</body>
</html>