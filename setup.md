1. create directory on wp-content
    1.2 index.php
    1.3. style.css
    1.4 screemshot.png 

2. function.php
    2.1    // css file
    wp_enqueue_style( 'animate', get_template_directory_uri() .'/lib/animate/animate.css');
    2.2     //scripts
    wp_enqueue_script('appear', get_template_directory_uri().'/lib/appear/jquery.appear.js',array(),'1.0.0',true);
    3.3 add_action( 'wp_enqueue_scripts', 'function_name' );


3. check has parent page has or not 
        <?php if (wp_get_post_parent_id(get_the_ID())) {
      ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main"><?php echo the_title();?></span>
        </p>
      </div>
      <?php
        
    }  ?>
