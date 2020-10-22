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
					<h2 class="sub-title">火災保険併用修繕</h2>
					<h3 class="sub-title-bg">お宅の屋根破損、ひょっとして風災かも！？</h3>
					<div class="sub-desc">
						<h3>その屋根破損は</h3>
						<h3>火災保険を使って</h3>
						<h3>修繕できるかもしれません。</h3>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/repair-circle.svg" alt="">
				</div>
			</div>
		</div>
		<div class="sub-body-preview">
			<div class="sub-content">
				<div class="sub-body-title">
					<p>日本全国で施工／申請サポート実績多数の「ライズ」にお任せください。</p>
					<p><span>施工完了まで責任 </span>を持って承ります。</p>
					<p>注※ 被災のないお客様の火災保険申請は行っておりません。ご了承ください。</p>
				</div>
				<div class="image-preview">
					<h3>屋根修理前後の比較</h3>
					<div class="d_fl preview-row">
						<div class="d_fl preview-col">
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-before1.png" alt="">
								<p>BEFORE</p>
							</div>
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-after1.png" alt="">
								<p>AFTER</p>
							</div>
							<img class="preview-arrow-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-arrow.svg" alt="">
						</div>
						<div class="d_fl preview-col">
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-before2.png" alt="">
								<p>BEFORE</p>
							</div>
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-after2.png" alt="">
								<p>AFTER</p>
							</div>
							<img class="preview-arrow-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-arrow.svg" alt="">
						</div>
						<div class="d_fl preview-col">
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-before3.png" alt="">
								<p>BEFORE</p>
							</div>
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-after3.png" alt="">
								<p>AFTER</p>
							</div>
							<img class="preview-arrow-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-arrow.svg" alt="">
						</div>
						<div class="d_fl preview-col">
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-before4.png" alt="">
								<p>BEFORE</p>
							</div>
							<div class="preview-box">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-after4.png" alt="">
								<p>AFTER</p>
							</div>
							<img class="preview-arrow-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/preview-arrow.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-body-links">
			<div class="sub-content">
				<h3 class="links-title">台風など自然災害による屋根破損には</h3>
				<h3><span>火災保険が適用</span>されます</h3>
				<div class="links-desc">
					<p>
						数十万円、ときには百万円以上かかる屋根の修理が、
						<br>
						すでに加入している火災保険で賄えること、あなたはご存知でしたか？
					</p>
				</div>
				<div class="d_fl links-box">
					<a href="#">無料は<span>不安</span><span>という方</span></a>
					<a href="#">うちの屋根は<span>大丈夫</span><span>という方</span></a>
					<a href="#">うちの屋根を<span>見て欲しい</span><span>という方</span></a>
				</div>
			</div>
		</div>
		<div class="sub-body-desc">
			<div class="sub-content">
				<div class="desc-title">
					<h3>保険は正しく活用しましょう</h3>
				</div>
				<div class="d_fl desc-body">
					<div>
						<p>自動車を運転していて事故に遭ったらどうしますか。</p>
						<p>まず警察に、次に自動車保険の会社へ連絡するのが一般的ですよね。</p>
						<p>しかし、</p>
						<p>住宅の保険となるとしっかり活用していない方もまだまだ多いようです。</p>
						<p>火災保険という名前によって「火事のときだけ」という印象を持たれているのが</p>
						<p>原因の一つかもしれません。</p>
						<p>一般的に「火災保険」といわれるお住まいにかける保険は、</p>
						<p>火災以外にも風災や落雷、水災など多くの自然災害も補償の対象となっています。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-body-table">
			<div class="sub-content">
				<div class="table-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/repair-table.svg" alt="">
				</div>
				<h3 class="table-title">10年以上風雨に晒された屋根は要注意</h3>
				<div class="table-desc">
					<p>小さな破損でもそこから雨が浸入し、雨漏りの原因となります。</p>
					<p>雨漏りを起こして被害が深刻になる前に、風で破損した屋根を修繕しましょう。</p>
					<p>しかし、屋根に最も影響を与える風災は最も診断が難しい部分でもあります。</p>
					<p>まずは弊社の無料屋根鑑定調査で専門家に無料で屋根を見てもらいましょう。</p>
				</div>
			</div>
		</div>
		<div class="sub-body-exp">
			<div class="sub-content">
				<h3>「ライズ」と</h3>
				<h3>他無料屋根修理業者の違いとは？</h3>
				<div class="exp-desc">
					<p>まずはじめに、</p>
					<p>ライズは、火災保険を正しく活用しお客様に適切な修繕を提供することをお約束します。</p>
					<p>インターネットで検索してみればお分かりのとおり、無料屋根修理をすすめる業者は数え切れないほど存在します。</p>
					<p>お客様に法外な手数料を要求したり、被災を捏造し火災保険を悪用するなどといった</p>
					<p>悪質な業者がいることも知っておいてください。</p>
					<p>そういった業者の多くは、下りた保険金から自社利益を差し引いた金額で下請けの屋根業者に工事を任せています。</p>
					<p>下請け業者にももちろん利益は必要。</p>
					<p>となると…</p>
					<p>過剰な利益を含んだ高い見積もり、もしくは施工実費を抑えるための手抜き工事</p>
					<p>が生まれます。こうなると悪質といわれても仕方がありません。</p>
				</div>
				<h3>でも安心してください</h3>
				<h3>ライズは</h3>
				<h3><span>日本トップクラス</span> の</h3>
				<h3>災保険申請工事実績を誇る施工店です。</h3>
			</div>
		</div>
		<div class="sub-body-survey">
			<div class="sub-content">
				<div class="d_fl survey-box">
					<h2>まずは無料屋根鑑定調査を</h2>
					<div class="survey-txt">
						<h3>最後に屋根を</h3>
						<h3>調査したのはいつですか？</h3>
						<p>
							風災診断の難しいところは、実際に屋根に上ってみない
							と被災箇所を発見できないところにあります。そして専
							門家でもない限り見過ごしてしまうような小さな破損
							が、雨漏りなど深刻な被害に結びつくことも少なくあり<br>
							ません。
						</p>
						<p>（※非常に危険ですので、決してご自分で屋根に上ることはおやめください）</p>
					</div>
					<div class="survey-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/repair-survey.png" alt="">
					</div>
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
		<div class="sub-body-list">
			<div class="sub-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/repair-list.svg" alt="">
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer(); 
