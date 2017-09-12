<?php $galery = new WP_Query (array('post_type' => 'galery', 'posts_per_page' => -1, )); ?>
<?php if($galery -> have_posts() ): ?>
<div class="container">
    <div id="gallery-grid">
        <div class="title">
            <h2><?php echo esc_attr(get_theme_mod("zoo_gallery_title"));?></h2>
        </div>
<div class="grid">
<div class="grid-sizer"></div>
<?php while($galery -> have_posts() ) : $galery -> the_post();?>
<?php
    $image_id = get_post_thumbnail_id();
    $image_url = wp_get_attachment_image_src($image_id,350,350);
    $image_url = $image_url[0];
?>
<div class="grid-item">
    <a href="<?php echo "$image_url"; ?>" class="lightbox" rel="lightbox" data-lightbox="roadtrip">
        <?php  the_post_thumbnail(); ?>
    </a>
</div>
<?php wp_reset_query();?>
<?php endwhile; ?>
</div>
</div>
</div>
<?php else : ?>
    <div style="display:none"></div>
<?php endif; ?>