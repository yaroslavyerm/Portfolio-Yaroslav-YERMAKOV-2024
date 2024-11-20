<?php
get_header();
?>

<div class="hero">
    <video class="hero-video" autoplay loop muted playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/media/video/bg_opt.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-content">
        <h1>Hello, I'm Yaroslav!</h1>
        <p>My goal is to show my vision of the world using my designs</p>
    </div>
</div>

<div class="wrap wrap_home">
    <h2 class="center">My favourite projects</h2>
    <div class="favourites_wrap">
        <?php
        function get_favourite_projects($favourite_value) {
            $args = array(
                'post_type' => 'project',
                'meta_key' => 'favourite',
                'meta_value' => $favourite_value,
                'posts_per_page' => 1,
            );

            $query = new WP_Query($args);
            $projects = [];

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $projects[] = [
                        'ID' => get_the_ID(),
                        'title' => get_the_title(),
                        'permalink' => get_the_permalink(),
                        'thumbnail' => get_the_post_thumbnail_url(),
                    ];
                }
                wp_reset_postdata();
            }

            return $projects;
        }

        for ($i = 1; $i <= 3; $i++) :
            $projects = get_favourite_projects($i);
            ?>
            
                    <?php if (!empty($projects)): ?>
                        <?php foreach ($projects as $project): ?>
                            <a href="<?php echo $projects[0]['permalink']; ?>" class="card card_link favourite<?php echo $i; ?>">
                                    <h3 class="card_title center"><?php echo $project['title']; ?></h3>
                            <div class="card_img_cover"><img src="<?php echo $project['thumbnail']; ?>" alt="<?php echo $project['title']; ?> cover image"  class="card_img"/></div>
                        </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No projects found for favourite <?php echo $i; ?>.</p>
                    <?php endif; ?>
        <?php endfor; ?>
    </div>
    <a href="https://yermakov.fr/projects" class="button button_all">Discover all projects</a>

<h2 id="about" class="center">About</h2>
    <div class="about">
        <div>
            <p>I'm a professional graphic designer from Ukraine, drawn to tech and design from a young age. Now, I'm pursuing this passion as a career while studying Multimedia and Internet Sciences at the University of Franche-Comté, constantly expanding my knowledge of the digital world.</p>
            <p>Skilled in tools like Photoshop, Illustrator, and Figma, I bring ideas to life with HTML, CSS, JavaScript, and WordPress. Currently, I'm also learning PHP and Blender to broaden my expertise.</p>
            <p>Outside of design, I love baking and exploring new places by train. Discovering new cultures and learning foreign languages are some of my favorite ways to spend my free time. Feel free to reach out if you have any questions or ideas!</p>
        </div>
        <div class="about_img">
            <img src="<?php echo get_template_directory_uri(); ?>/media/img/photo_about.webp" alt="Yaroslav Yermakov Photo"/>
        </div>
    </div>

<h2 id="contact" class="center">Contact me</h2>
    <div class="contact_wrap">
        <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="contact_form" autocomplete="on">
            <input type="hidden" name="action" value="custom_contact_form">
            <div class="contact_div">
                <label for="name" class="contact_label">Name</label>
                <input type="text" id="name" name="name" autocomplete="given-name" placeholder="Your Name..." class="contact_input">
            </div>
            <div class="contact_div">
                <label for="email" class="contact_label">Email</label>
                <input type="email" id="email" name="email" autocomplete="email" placeholder="Your Email..." class="contact_input">
            </div>
            <div class="contact_div">
                <label for="message" class="contact_label">Message</label>
                <textarea name="message" id="message" placeholder="Your message here..." class="contact_input"></textarea>
            </div>
            <button type="submit" class="button">Send!</button>
        </form>
    </div>
</div>

<?php
get_footer();
?>
