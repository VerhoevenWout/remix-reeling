<?php get_header(); ?>
<?php $home = get_page_by_path( 'home' ); ?>

	<div class="homepage-wrapper">
    <div id="intro-wrapper" class="section">
			<div id="embed-container">
        <!-- <div class="intro-overlay"></div> -->
				<div class="content-big">

					<?php $image = get_field('header_background_image_load');?>
					<div class="loading-background" style="background:transparent url('<?php echo $image; ?>') center top no-repeat; background-size:cover;"></div>
					<img class="loading-svg" src="<?php echo get_bloginfo('template_url') ?>/assets/img/ring.svg"/>
					<img class="play-button" src="<?php echo get_bloginfo('template_url') ?>/assets/img/play-button.png"/>
					<span>introducing</span>
					<h1>Remix Reeling</h1>
					<iframe id="backgroundIframe" src="https://player.vimeo.com/video/<?php the_field(video_id) ?>?background=1&loop=100" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					<!-- <video autoplay loop muted playsinline>
						<source src="<?php echo get_bloginfo('template_url') ?>/assets/img/FD_HomepageLoop.mp4" type="video/mp4">
					</video> -->

					<div class="scroll-down-container">
					  <div class="chevron"></div>
					  <div class="chevron"></div>
					  <div class="chevron"></div>
					</div>
				</div>

				<!-- <div class="content-small">
					<?php $image = get_field('header_image_fallback');
					if ($image) : ?>
						<div class="intro-background" style="background:transparent url('<?php echo $image; ?>') center top no-repeat; background-size:cover;"></div>
					<?php else : ?>
						<div class="intro-background" style="background:transparent url('<?php echo get_template_directory_uri(); ?>/assets/img/header-image.jpg') center top no-repeat; background-size:cover;"></div>
					<?php endif; ?>
				</div> -->

			</div>
		</div>

    <div id="picture-wrapper" class="section">
      <div class="col-md-12 col-md-offset-0">
        <div class="row">
					<div class="picture-blurb-container">
						<p class="picture-burb-1">
							<?php the_field('picture_blurb_1', $home->ID) ?>
						</p>
						<p class="picture-burb-2">
							<?php the_field('picture_blurb_2', $home->ID) ?>
						</p>
					</div>

          <?php $picture = get_field('picture', $home->ID);
          if($picture) : ?>
            <div class="picture-container-overlay"></div>
  					<div class="picture-container" style="background:transparent url('<?php echo $picture; ?>') center top no-repeat; background-size:cover;"></div>
          <?php endif; ?>
					<!-- <a class="button button-scroll-contact" href="#contact-wrapper">Join now</a> -->
	      </div>
		  </div>
		</div>

    <div id="contact-wrapper" class="section">
      <div class="col-md-10 col-md-offset-1">
        <div class="contact-inner">
          <h3><?php the_field('contact_form_header', $home->ID) ?></h3>
					<?php gravity_form( 1, false, false, false, '', false ); ?>
        </div>
      </div>
    </div>

		<div id="outro-wrapper" class="section">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<a href="<?php the_field('social_link_1') ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i><?php the_field('social_link_1_text') ?></a>
				</div>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
