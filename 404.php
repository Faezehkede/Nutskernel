<?php get_header(); ?>

<div class="container">

    <div class="page-404">
        <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/error-404.png" alt="Error 404">
        <h1>Page Not Found</h1>
        <p>
            Sorry, the page you are looking for doesn't exist or has been moved.
        </p>
        <a href="<?php echo home_url(); ?>">
            Go to Homepage
        </a>
    </div>

</div>

<?php get_footer(); ?>