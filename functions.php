<?php

function mytheme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );


// Add theme support for thumbnails
add_theme_support('post-thumbnails');

// Register navigation menus
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu-mobile' => __('Header Menu Mobile'),
            'header-menu-desktop' => __('Header Menu Desktop'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');



function enqueue_project_scripts() {
    // Enqueue jQuery, if it’s not already enqueued
    wp_enqueue_script('jquery');

    // Enqueue your script.js file and make sure it loads after jQuery
    wp_enqueue_script('project-filter-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);

    // Localize the script to pass ajaxurl to your JS
    wp_localize_script('project-filter-script', 'ajaxurl', admin_url('admin-ajax.php'));
}

add_action('wp_enqueue_scripts', 'enqueue_project_scripts');





// Register AJAX handler for filtering projects
function filter_projects() {
    $tool = isset($_POST['tool']) ? sanitize_text_field($_POST['tool']) : '';
    $field = isset($_POST['field']) ? sanitize_text_field($_POST['field']) : '';

    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
        'tax_query' => array(
            'relation' => 'AND',
        ),
    );

    if (!empty($tool)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'tool',
            'field'    => 'slug',
            'terms'    => $tool,
        );
    }

    if (!empty($field)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'field',
            'field'    => 'slug',
            'terms'    => $field,
        );
    }

    $projects = new WP_Query($args);

    if ($projects->have_posts()) :
        while ($projects->have_posts()) : $projects->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="card">
                <h3 class="card_title center"><?php the_title(); ?></h3>
                <div class="card_img_cover"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="card_img"/></div>
            </a>
        <?php endwhile;
    else :
        echo '<p>No projects found.</p>';
    endif;

    wp_reset_postdata();
    die();
}

add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');

function enqueue_alpine_js() {
    // Enqueue Alpine.js
    wp_enqueue_script(
        'alpine-js', // Handle for this script
        'https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js', // CDN URL for Alpine.js
        [], // Dependencies (none needed)
        '3.10.2', // Version of Alpine.js being used
        true // Load in footer for better performance
    );
}
add_action('wp_enqueue_scripts', 'enqueue_alpine_js');


// Handle form submission for logged-in users
add_action('admin_post_custom_contact_form', 'handle_custom_contact_form');

// Handle form submission for non-logged-in users
add_action('admin_post_nopriv_custom_contact_form', 'handle_custom_contact_form');

function handle_custom_contact_form() {
    // Check if required fields are filled
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        // Send email
        $to = 'yaroslavyerm@gmail.com'; // Replace with your email address
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        wp_mail($to, $subject, $body, $headers);
    }

    // Redirect back to the form or another page after submission
    wp_redirect(home_url('/index.php'));
    exit;
}