<?php
/*
Template Name: Projects
*/

get_header(); ?>

<div class="wrap">
    <h1>Projects</h1>
    <p>Discover all of my projects!</p>
    
    <div class="selector">
        
            <select name="tools" id="tools">
                <option value="">Tools</option>
                <option value="Photoshop">Photoshop</option>
                <option value="Illustrator">Illustrator</option>
                <option value="Figma">Figma</option>
                <option value="VS Code">VS Code</option>
			  <option value="Wordpress">Wordpress</option>
			  			  <option value="Observable">Observable</option>
            </select>
            <select name="fields" id="fields">
                <option value="">Fields</option>
                <option value="Web Design">Web Design</option>
                <option value="Graphic Design">Graphic Design</option>
			  <option value="UI/UX">UI/UX</option>
                <option value="Development">Development</option>
                <option value="Branding">Branding</option>
                <option value="Print">Print</option>
			  <option value="Data visualisation">Data visualisation</option>
            </select>
        
        <button id="reset-filters" class="button button_select">Show all</button>
    </div>
    
    <div class="projects-container">
        <?php
        // Initial query to show all projects by default
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => -1
        );
        $projects = new WP_Query($args);
    
        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="card ">
                            <h3 class="card_title center"><?php the_title(); ?></h3>
                            <div class="card_img_cover"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="card_img"/></div>
                    </a>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('No projects found.', 'portfolio'); ?></p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php get_footer(); ?>
