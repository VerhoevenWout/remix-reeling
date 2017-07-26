
  <?php $image = get_field('work_image');
  if ($image) : ?>
    <div class="individual-work" style="background:transparent url('<?php echo $image; ?>') center top no-repeat; background-size:cover;">
      <div class="individual-work-content">
        <h3><?php the_field('work_title') ?></h3>
        <p><?php the_field('work_subtitle') ?></p>
        <p><?php the_field('work_function') ?></p>
        <a class="individual-work-button individual-work-button1" href="<?php the_field('work_link'); ?>">watch video</a>
        <a class="individual-work-button individual-work-button2" href="<?php the_permalink(); ?>">more details</a>
      </div>
    </div>
  <?php else : ?>
    <div class="fullscreen-header-img" style="background:transparent url('<?php echo get_template_directory_uri(); ?>/images/header-image.jpg') center top no-repeat; background-size:cover;"></div>
  <?php endif; ?>
