<?php/*Template Name: Crud */ ?>
<?php get_header(); ?>

<h1><?php the_titile(); ?></h1>

<php query_posts('post_type=geekwise_courses'); ?>
    
<?php while (have_posts() ) : the_post(); ?>

<li><?php the_title(); ?></li>
<li><?php the_content(); ?></li>
<li><?php the_field('day_time'); ?></li>
<li><?php the_field('duration'); ?></li>
<li><?php the_field('instructors'); ?></li>
<li><?php the_field('fee'); ?></li>



<?php endwhile; ?>





















