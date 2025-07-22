<?php get_header(); ?>

<div class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    
    <?php 
    while(have_posts()){
        the_post();?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    <?php
    }
    ?>
</div>

<?php get_footer(); ?>