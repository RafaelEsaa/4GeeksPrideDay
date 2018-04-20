<?php 
    get_header(); 
?>
<?php 
    $argsAboutUs = array(
	    'post_type' => 'aboutus',
	    'post_status' => 'publish',
	    'posts_per_page' => 1,
    );
    $argsContactUs = array(
	    'post_type' => 'contactus',
	    'post_status' => 'publish',
	    'posts_per_page' => 1,
    );
    $argsBanner = array(
	    'post_type' => 'bannerprincipal',
	    'post_status' => 'publish',
	    'posts_per_page' => 1,
    );
?>
    <?php 
            $bannerPrincipal = new WP_Query( $argsBanner );
            while ( $bannerPrincipal->have_posts() ) : $bannerPrincipal->the_post();
    ?>
<div class="row align-items-center event-description" style="background-image:url('<?php echo the_field('image_front'); ?>'); background-size:cover; height:100vh; width:100%; margin:0">
    <div class="col-md-12">
        <img class="img-fluid rounded mx-auto d-block img-event" src="<?php echo the_field('image'); ?>"></img>
        <h2 class="text-center title-event"><?php the_title();?></h2>
        <div class="row align-items-start">
            <div class="col-12">
                <?php the_content();?>
            </div>
        </div>
        <?php endwhile;
            wp_reset_postdata();
    ?>
        <div class="container container-countdown">
        </div>
    </div>
    <div class="left-triangle-holder">
		<div class="triangle-bottomleft" id="triangle-left"></div>
		<div class="subscribe" id="subscribe">
			<i class="fa fa-plus"></i>
			<h4>Join us</h4>
		</div>
	</div>
	<div class="right-triangle-holder">
		<div class="triangle-bottomright" id="triangle-right"></div>
		<div class="aboutus" id="aboutus">
		    <a href="<?php echo get_site_url().'/more'?>" class="fixed-menu">
    			<i class="fa fa-plus"></i>
    			<h4>More</h4>
			</a>
		</div>
	</div>
</div>

<div class="container">
    <div class="row justify-content-md-center row-form-delay ocult-form">
        <div class="col-6 form-delay">
            <h2 class="text-center">Join Us</h2>
            <?php gravity_form( 2, false, false, false, '', false ); ?>
            <div class="row-icon-x">
                <i class="fa fa-times-circle" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row about-us justify-content-md-center">
        <?php
            $aboutUs = new WP_Query( $argsAboutUs );
            while ( $aboutUs->have_posts() ) : $aboutUs->the_post(); ?>
                <div class="col-md-12">
                    <h1 class="title-about-us text-center"><?php the_title()?></h1>
                </div>
                <div class="col-md-7">
                    <p class="text-about-us">
                        <?php the_content() ?>
                    </p>
                </div>
        <?php endwhile;
            wp_reset_postdata();
        ?>
    </div>
    <div class="row contact justify-content-md-center">
        <?php
            $contactUs = new WP_Query( $argsContactUs );
            while ( $contactUs->have_posts() ) : $contactUs->the_post(); ?>
        <div class="col-md-12">
            <h1 class="title-contact text-center"><?php the_title()?></h1>
        </div>
        <div class="col-md-7">
            <?php the_content() ?>
        </div>
        <?php endwhile;
            wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>