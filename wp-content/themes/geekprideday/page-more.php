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
?>
<div class="row align-items-center event-description" style="background-image: url('http://lorempixel.com/1600/800/'); background-size:cover; height:100vh; width:100%; margin:0">
    <div class="col-md-12">
        <img class="img-fluid rounded mx-auto d-block img-event" src="https://geekprideday2-rafaelesaa.c9users.io/wp-content/uploads/2017/12/iloveparty.png"></img>
    </div>
</div>

<?php get_footer(); ?>