<?php

/**
 * Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if ( $is_preview ) {
    $className .= ' is-admin';
}

// Load values and assing defaults.


?>
<section id="<?php echo esc_attr($id) ?>" class="block block-slider ">
  <div class="container">
    <div class="cols <?php echo esc_attr($className) ?>">
    <?php if( have_rows('slides')): ?>
      <div class="col item slides">
        <?php while ( have_rows('slides') ) : the_row();
            $image = get_sub_field('image');
        ?>
            <div>
                <?php echo wp_get_attachment_image( $image['id'], 'full' ); ?>
            </div>
        <?php endwhile ?>
      </div><!-- .item -->
    <?php else: ?>
        <p>Add slides</p>
    <?php endif; ?>
    </div>
  </div>
</section><!-- .block -->