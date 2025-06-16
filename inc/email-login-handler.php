<?php

// add_action('admin_post_nopriv_email_login', 'handle_email_login');

// function handle_email_login() {
//     if (!isset($_POST['user_email']) || !is_email($_POST['user_email'])) {
//         wp_redirect(home_url('/login?error=invalid_email'));
//         exit;
//     }

//     $email = sanitize_email($_POST['user_email']);
//     $user = get_user_by('email', $email);

//     if ($user) {
//         wp_set_auth_cookie($user->ID, true);
//         wp_redirect(home_url('/dashboard')); // Change as needed
//     } else {
//         $password = wp_generate_password();
//         $user_id = wp_create_user($email, $password, $email);
//         wp_set_auth_cookie($user_id, true);
//         wp_redirect(home_url('/dashboard'));
//     }

//     exit;
// }
