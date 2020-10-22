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
					<h2 class="sub-title">屋根にお困りの方</h2>
					<h3 class="sub-title-sm">お宅の屋根破損、ひょっとして風災かも！？</h3>
					<div class="d_fl roof-head-img">
						<div>
							<div class="roof-head-box">
								<h3>岐阜県 K 様</h3>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roof-head1.png" alt=""> 
								<h3 class="img-title">認定金額 <span>1,425,000</span>円</h3>
								<p>（見積満額認定）</p>
							</div>
						</div>
						<div class="d_fl">
							<div class="roof-head-box">
								<h3>無料調査～施工完了まで約70日</h3>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roof-head1.png" alt=""> 
								<h3 class="img-title">お客様の持ち出し費用 <span>0</span>円</h3>
							</div>
						</div>
					</div>
					<div class="roof-head-desc">
						<p>上記案件は写真を見てもわかるように明らかな不具合です。</p>
						<p>お客様ご自身「先日の台風で雨樋が壊れた」というご自覚をお持ちでした。</p>
						<p>しかし、屋根の不具合というものは</p>
						<p><span>住人ご自身が気付かないまま生活しているケース</span> も非常に多くあります。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-body-roof">
			<div class="sub-content">
				<h3>素人ではわかりにくい不具合の例</h3>
				<p>（弊社実績）</p>
				<div class="roof-desc">
					<p>すべて2014年の大雪被害の案件です。</p>
					<p>パッと見だとわかりにくいかもしれませんが放っておいたら数年後に雨漏りなど深刻な状況に繋がる不具合が隠れています。</p>
					<p>弊社の調査および申請サポートを経て修繕金額が満額認定。</p>
					<p>すでに十分な修繕施工が完了し、お客様からもお喜びの声をいただいております。</p>
				</div>
			</div>
		</div>
		<div class="sub-body-roofimg">
			<div class="sub-content">
				<div class="d_fl roof-box">
					<div class="roof-item">
						<div class="roof-item-box">
							<h3>岐阜県 K 様</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roof-img2.png" alt=""> 
							<h3 class="img-title">認定金額 <span>842,720</span>円</h3>
						</div>
					</div>
					<div class="roof-item">
						<div class="roof-item-box">
							<h3>桶川市 S 様</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roof-img2.png" alt=""> 
							<h3 class="img-title">認定金額 <span>326,840</span>円</h3>
						</div>
					</div>
					<div class="roof-item">
						<div class="roof-item-box">
							<h3>大田区 T K 様</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/roof-img2.png" alt=""> 
							<h3 class="img-title">認定金額 <span>555,000</span>円</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-body-roofdesc"> 
			<div class="sub-content">
				<h2 class="roof-desc-title">まずはご相談ください</h2>
				<div class="roof-desc">
					<p>まずはお気軽にご相談ください。</p>
					<p>屋根に関する不具合や、ご不安な点、火災保険申請に関する疑問など、親身にお話をお伺いいたします。</p>
					<p>弊社サービス該当案件に関しましては手出し０円（※）</p>
					<p>かつ確かな屋根修繕を提案・実現いたします。</p>
					<p>※3,000件を超える当社施工実績においてほぼ100％のお客様が該当しています。</p>
				</div>
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