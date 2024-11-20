<?php get_header(); ?>

<div class="hero">
    <video class="hero-video" autoplay loop muted playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/media/video/bg_opt.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero404">
    <h1>404: Page Not Found</h1>
    <p>Sorry, it looks like the page you wanted to reach doesn't exist :(</p>
        <div class="links404">
            <a href="/" class="button">Return to homepage</a>
            <a href="/projects" class="button">Take a look at my projects</a>
        </div>
    </div>
</div>


<?php get_footer(); ?>