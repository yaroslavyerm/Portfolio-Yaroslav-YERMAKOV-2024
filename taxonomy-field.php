<?php get_header(); ?>

  <div class="wrap">

    <h1><?php single_term_title(); ?></h1>
<div class="projects-container">
  
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="card">
              <h3 class="card_title center"><?php the_title(); ?></h3>
                 <div class="card_img_cover"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="card_img"/></div>
            </a>
        <?php endwhile; ?>
      <?php endif; ?>
</div>
  </div>

<?php get_footer(); ?>
