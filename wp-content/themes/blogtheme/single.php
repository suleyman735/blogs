<?php 


get_header();

while (have_posts()) {
    the_post(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
        <div class="page-banner__intro">
          <p>Don't formget me replace later.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">

    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent);?></a> <span class="metabox__main"><?php echo the_title();?></span>
        </p>
      </div>



        <div>
            <?php the_content(); ?>
        </div>
    </div>


<?php } ?>





<?php get_footer(); ?>