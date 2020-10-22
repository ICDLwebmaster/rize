<?php
/**
 * The template for displaying archive pages
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
                        <h2 class="sub-title">施工事例</h2>
                    </div>
                </div>
            </div>
            <div class="sub-body-construction">
                <div class="sub-content">
                    <h3>弊社の携わった施工案件を紹介いたします。</h3>
                    <h3>少しずつではありますが、過去のものも含めて定期的にアップして参ります。</h3>

                    <div class="d_fl roof-box">

                        <?php if ( have_posts() ) : ?>
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                    </div>
                    <div class="construction-readmore">
                        <a href="" class="readmore-link">もっと見る</a>
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
