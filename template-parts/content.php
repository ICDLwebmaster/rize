<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rise_test
 */

?>

<article class="roof-item">
    <a href="<?php the_permalink(); ?>">
        <div class="roof-item-box">
            <h3><?php the_title() ?></h3>
            <figure>
                <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
            </figure>
            <h3 class="img-title">認定金額 <span><?php echo CFS()->get('price'); ?></span>円</h3>
        </div>
    </a>
</article>
