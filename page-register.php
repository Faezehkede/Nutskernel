<?php
/* Template Name: Login/Register */

get_header();
?>

<div class="login-box">
    <div class="login-logo">
        <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/main-logo.webp" alt="Logo" class="logo">
    </div>
    <div class="login-text">
        <h1>Welcome!</h1>
        <p>Thousands of wholesalers await.</p>
    </div>

    <?php if (!empty($_GET['error'])): ?>
        <p style="color:red;"><?php echo esc_html($_GET['error']); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

        <div class="email-wrapper">
            <input type="hidden" name="action" value="custom_auth">
            <label for="email">Email*</label>
            <input type="email" name="email" required placeholder="Enter your email">
            <a href="<?php echo home_url('/register-step2'); ?>">Get Started</a>
        </div>

        <div class="continue-google">
            <hr>
            <span>OR</span>
            <hr>

            <button disabled style="opacity: 0.6;">Continue with Google</button>
        </div>        

    </form>

    
</div>

