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
		<div class="sub-head">
			<h2 class="sub-title">会社概要</h2>
		</div>
		<div class="company-wrap">
			<div class="sub-content">
				<h3 class="company-ttl01">株式会社ライズでは<br>
					企業理念を『お客様への誓い』と位置づけ、<br>
				ここにその内容を記します。</h3>
				<p class="comp-txt01">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-img.svg">
				</p>
				<p class="comp-txt02">
					住まいは暮らしの礎（いしずえ）です。お住まいに関する不安は、すなわち暮らしの不安です。<br>
					株式会社ライズはお客様の安心な暮らしを守るため、個々のお客様に適したそれぞれの施工提供いたします。
				</p>
				<div class="tbl-wrap">
					<h3 class="company-ttl02">会社概要</h3>
					<table>
						<tr>
							<th>名称</th>
							<td>株式会社ライズ</td>
						</tr>
						<tr>
							<th>所在地</th>
							<td>〒232-0018<br>
							横浜市南区花之木町2丁目32-1 ライオンズマンション蒔田公園108</td>
						</tr>
						<tr>
							<th>代表者</th>
							<td>代表取締役 橘尾 大介</td>
						</tr>
						<tr>
							<th>総合窓口</th>
							<td>0120-915-001</td>
						</tr>
						<tr>
							<th>TEL</th>
							<td>045-325-9500</td>
						</tr>
						<tr>
							<th>FAX</th>
							<td>045-325-9520</td>
						</tr>
						<tr>
							<th>資本金</th>
							<td>300万円</td>
						</tr>
						<tr>
							<th>事業内容</th>
							<td>住宅補修工事請負、施工</td>
						</tr>
					</table>
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
</div>
</main><!-- #main -->

<?php
get_footer();