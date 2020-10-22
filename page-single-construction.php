<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rise_test
 */

get_header();
?>

	<main id="primary" class="site-main">
    <div class="wrapper">
			<div class="sub-header">
        <div class="sub-content">
          <div class="sub-head">
            <h2 class="sub-title">岐阜県K様</h2>
          </div>
        </div>
      </div>
      <div class="sub-body-consingle">
        <div class="sub-content">
          
        </div>
      </div>
      <div class="sub-body-contact">
        <div class="sub-content">
          <h2>ライズは被災鑑定と</h2>
          <h2>保険申請・修繕施工のスペシャリストです</h2>
          <div>
            <p>
              一度「無料屋根鑑定調査」をご依頼ください。<br>
              被害が深刻になる前にしっかりと保険で直しましょう。
            </p>
          </div>
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-black.svg" alt="">
          </a>
        </div>
      </div>
		</div>
	</main><!-- #main -->

<?php
get_footer(); 
