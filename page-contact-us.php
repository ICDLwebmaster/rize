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
					<h2 class="sub-title">お問い合わせ</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="sub_page contact_us">
		<div class="inner_wrap">
			<h3>お問い合わせはこちらからお気軽にお送りください。</h3>
			<p><span class="red-star">*</span>は入力必須です。</p>
			<div class="inner_content">
				<?php echo do_shortcode('[contact-form-7 id="26" title="Contact Us"]'); ?>
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
