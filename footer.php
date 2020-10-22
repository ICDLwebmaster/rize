<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rise_test
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info01">
			<figure class="ft-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="LOGO">
			</figure>
			<p class="ft01-text">ライズは被災鑑定と<br>保険申請・修繕施工のスペシャリストです</p>
			<div class="contact-btn01">
				<a href="#">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ph-number.svg" alt="Phone Number">
					</figure>
				</a>
			</div>
			<ul class="ft-nav d_fl">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company">会社概要</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>repair">火災保険併用修繕</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>roof">屋根にお困りの方</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">施工事例</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">お問い合わせ</a></li>
			</ul>
		</div>
		<div class="site-info02">
			<div class="inner01 d_fl">
				<a href="#">個人情報の取り扱いについて</a>
				<p>Copyright © 株式会社ライズ. All Rights Reserved.</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
