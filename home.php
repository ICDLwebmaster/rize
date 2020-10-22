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
			<div class="banner">
				<div class="banner-inner d_fl">
					<div class="l-banner">
						<figure class="l-bannertext">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-text.svg" alt="お客様を第一に考えた提案を">
						</figure>
					</div>
					<div class="r-banner">
						<div class="pc">
							<div class="banner-slider">
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-img01pc.jpg" alt="お客様を第一に考えた提案を">
								</figure>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-img02.jpg" alt="お客様を第一に考えた提案を">
								</figure>
							</div>
						</div>
						<div class="sp">
							<div class="banner-slider">
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-img01sp.jpg" alt="お客様を第一に考えた提案を">
								</figure>
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-img02.jpg" alt="お客様を第一に考えた提案を">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="top-news d_fl">
					<p class="top-newsL">NEWS</p>
					<div class="top-newslist">
						<?php
							$args = array(
								'orderby'  => 'date',
								'order' => 'asc',
								'posts_per_page' => 1,
								'post_type'=>'news');
							$wp_query = new WP_Query($args);
							if($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<article><span><?php the_time('Y.m.d'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></article>
						<?php endwhile;endif ?>
					</div>
				</div>
			</div>
			<div class="content top">
				<div class="top-sec01">
					<figure class="top-ttl01">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mission.svg" alt="COUTION">
					</figure>
					<h3>屋根は常に自然の影響に晒されています。<br />保険を正しく使い、正しく修繕しませんか？</h3>
					<div class="top-sec01inn d_fl inner01">
						<div class="top-sec01item">
							<span class="top-sec01num">01</span>
							<figure class="top-sec01img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/building-icon.svg" alt="屋根は常に自然の影響に晒されています。保険を正しく使い、正しく修繕しませんか？">
							</figure>
							<p class="top-sec01text">雨漏り・雨樋の破損など、屋根のお困りごとをお気軽にご相談ください。<span>			確かな品質・確かな技術で</span>屋根修理を行います。</p>
						</div>
						<figure class="plus-sign">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus-icon.svg" alt="Plus">
						</figure>
						<div class="top-sec01item">
							<span class="top-sec01num">02</span>
							<figure class="top-sec01img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/yen-icon.svg" alt="屋根は常に自然の影響に晒されています。保険を正しく使い、正しく修繕しませんか？">
							</figure>
							<p class="top-sec01text">ご負担金0円での屋根修繕・修理をご提案します。※当社施工実績においてほぼ100％のお客様が該当しています。</p>
						</div>
						<figure class="plus-sign">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus-icon.svg" alt="Plus">
						</figure>
						<div class="top-sec01item">
							<span class="top-sec01num">03</span>
							<figure class="top-sec01img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/worker-icon.svg" alt="屋根は常に自然の影響に晒されています。保険を正しく使い、正しく修繕しませんか？">
							</figure>
							<p class="top-sec01text">施工実績3000件以上。多くの施工実績が、私達の信頼の証です。</p>
						</div>
					</div>
				</div>
				<div class="top-sec02">
					<figure class="top-ttl01">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/coution.svg" alt="COUTION">
					</figure>
					<div class="top-sec02inner d_fl inner01">
						<figure class="l-sec02img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-img01.png" alt="あなたの思っている以上に、破損が進んでいる場合があります。">
						</figure>
						<div class="r-sec02text">
							<figure class="pc">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/coution-titlepc.svg" alt="あなたの思っている以上に、破損が進んでいる場合があります。">
							</figure>
							<figure class="sp">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/coution-titlesp.svg" alt="あなたの思っている以上に、破損が進んでいる場合があります。">
							</figure>
							<p>屋根は常に風雨にさらされています。<br>私達は屋根の診断を行い屋根の状態を見た上で、修理にはどんな処理が必要か、塗装はどのような方法で行えばいいのかを、的確に判断してまいります。<br>様々なプランの中からあなたに最適な修理プランを、ご提案させていただきます。</p>
						</div>
					</div>
				</div>
				<div class="top-sec03">
					<div class="inner01">
						<p class="top-sec03ttl">なかなか気づきにくい不具合の例<span>（弊社実績）</span></p>
						<div class="works-inner d_fl">
							<?php
							$args = array(
								'orderby'  => 'id',
								'order' => 'asc',
								'posts_per_page' => 3,
								'category_name'=>'works');
								$wp_query = new WP_Query($args);
								if($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<article class="works-item">
									<a href="<?php the_permalink(); ?>">
										<h3 class="works-itemttl"><?php the_title() ?></h3>
										<figure>
											<?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
										</figure>
										<p class="works-itemprice">認定金額<span><?php echo CFS()->get('price'); ?></span>円</p>
									</a>
								</article>
							<?php endwhile;endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		

	</main><!-- #main -->

<?php
get_footer();
