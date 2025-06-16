<?php
/* Template Name: Login/Register */

get_header();
?>

<div class="login-box">
    <h2>Welcome!</h2>
    <p>Thousands of wholesalers await.</p>

    <?php if (!empty($_GET['error'])): ?>
        <p style="color:red;"><?php echo esc_html($_GET['error']); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="custom_auth">
        <label for="email">Email*</label>
        <input type="email" name="email" required placeholder="Enter your email">
        <a href="<?php echo home_url('/register-step2'); ?>">Get Started</a>
    </form>

    <div style="margin: 20px 0; text-align: center;">
        <hr>
        <span>OR</span>
        <hr>
    </div>

    <!-- Placeholder for Google login -->
    <button disabled style="opacity: 0.6;">Continue with Google</button>
</div>

<?php get_footer(); ?>
