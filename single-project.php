<?php get_header(); ?>
<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
       <article class="wrap wrap_post">
            <div class="post-top-wrap">
                
                  <div class="post-top-info">
                      <h1><?php the_title(); ?></h1>
                      <div class="project_tags">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'tool');
                            if ($terms && !is_wp_error($terms)) :
                                foreach ($terms as $term) : ?>
                                    <a href="<?php echo esc_url(get_term_link($term)); ?>" class="project-tag"><?php echo esc_html($term->name); ?></a>
                                <?php endforeach;
                            endif;
                            $fields = get_the_terms(get_the_ID(), 'field');
                            if ($fields && !is_wp_error($fields)) :
                                foreach ($fields as $field) : ?>
                                    <a href="<?php echo esc_url(get_term_link($field)); ?>" class="project-tag"><?php echo esc_html($field->name); ?></a>
                                <?php endforeach;
                            endif;
                            ?>
                        </div>
                        <p><?php echo get_field('paragraph_1');?></p>
                        <?php  if(get_field('link-adress')): ?>
                            <a href="<?php echo get_field('link-adress');?>" class="button button_post">Discover the project!</a>
                        <?php endif; ?>
                  </div>
                  <?php if(get_field('top_image')):?>
                  <img src="<?php echo get_field('top_image');?> " alt="<?php the_title();?>" class="post-img animate1">
                    <?php endif; ?>
            </div>
              <div class="content"><?php the_content(); ?></div>
       </article>
   <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
