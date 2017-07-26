<?php /* Template Name: Alumni Overview */ ?>

<?php get_header(); ?>

  <!-- Show image in div -->
  <div class="fullscreen-header-img" style="background:transparent url('<?php echo get_template_directory_uri(); ?>/assets/img/header-1.jpg') center top no-repeat; background-size:cover;"></div>

  <!-- Custom Post Type Loop -->
  <?php
  $args = array( 'post_type' => 'alumni', 'posts_per_page' => 10 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
    <div class="alumni-post-wrapper col-md-4">
      <?php $photo = get_field('alumni_photo');
      if ($photo) : ?>
        <div class="alumni-photo" style="background:transparent url('<?php echo $photo; ?>') center top no-repeat; background-size:cover;"></div>
        <h5><?php the_title() ?></h5>
        <p><?php the_field('alumni_excerpt'); ?></p>
        <a href="<?php the_permalink(); ?>">Read more</a>
      <?php endif; ?>
    </div>
  <?php
  endwhile;
  ?>

<?php get_footer(); ?>
