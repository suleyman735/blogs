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




        <div>
            <?php the_content(); ?>
        </div>
        <?php 
        $releatedPrograms = get_field('related_programs');

        if ($releatedPrograms) {
            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Subject talks</h2>';
            echo '<ul class="link-list min-list">';
            foreach($releatedPrograms as $programs){ ?>
            <li>
                <a href="<?php echo get_the_permalink($programs); ?>"><?php echo get_the_title($program); ?></a>
            </li>


           <?php }
           echo '</ul>';
            # code...
        }
        ?>
    </div>


<?php } ?>





<?php get_footer(); ?>