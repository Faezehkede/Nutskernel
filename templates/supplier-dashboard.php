<?php

/**
 * Template Name: Supplier Dashboard
 * Template Post Type: page
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="dashboard-sidebar">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">Agrifoodz</div>
            <div class="user-info">
                <div class="user-avatar">
                    <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img.webp" alt="User Acatar">
                </div>
                <div class="user-info-text">
                    <div class="user-name">Pars Avesta</div>
                    <div class="user-country">Iran</div>
                </div>
            </div>
            <div class="role-switch">
                <button id="supplierBtn" class="role active">Supplier</button>
                <button id="buyerBtn" class="role"><a href="./buyer-dashboard.html">Buyer</a></button>
            </div>
            <nav class="nav-menu">
                <ul class="sidebar-nav">
                    <li><a href="#" class="tab-link" data-tab="myAgrifoodz">My Agrifoodz</a></li>
                    <li><a href="#" class="tab-link active" data-tab="newProduct">New Product</a></li>
                    <li><a href="#" class="tab-link" data-tab="messages">Messages</a></li>
                    <li><a href="#" class="tab-link" data-tab="newRFQ">New RFQ</a></li>
                    <li><a href="#" class="tab-link" data-tab="suggestedSuppliers">Suggested Suppliers</a></li>
                    <li><a href="#" class="tab-link" data-tab="verification">Verification</a></li>
                    <li><a href="#" class="tab-link" data-tab="saved">Saved</a></li>
                    <li><a href="#" class="tab-link" data-tab="feedback">Feedback</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="dashboard dashboard-content">
            <header class="dashboard-header">
                <a href="./" class="return-home">
                    <span>
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 
                    20.7881C2 19.5763 2 17.6258 2 13.725V12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 
                    2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M15 18H9" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </span>
                </a>
                <span>Pars Avesta</span>
            </header>

            <!-- tabs -->

            <div class="tab-panel" id="myAgrifoodz">

                <div id="supplierContent" class="role-content">

                    <div class="main-profile-detail">
                        <section class="profile-card">
                            <div class="profile-info">
                                <div class="avatar">
                                    <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img1.webp">
                                </div>
                                <div>
                                    <div class="name">Pars Avesta</div>
                                    <div class="role">Buyer</div>
                                </div>
                            </div>
                        </section>

                        <section class="profile-verfying">
                            <div class="profile-strength">
                                <span>Profile strength: <strong>Weak</strong></span>
                                <div class="strength-bar">
                                    <div class="progress" style="width: 20%;"></div>
                                </div>
                            </div>
                            <div class="verification-box">
                                <div class="Verify-text">
                                    <p>Verify your account</p>
                                    <p>Be the most reliable buyer for sellers by verifying your identity.</p>
                                </div>
                                <button class="btn-verify">Get Verified</button>
                            </div>
                        </section>

                        <section class="quick-links">
                            <a href="#" class="quick-link-suppliers">Suppliers</a>
                            <a href="#" class="quick-link-rfqs">My RFQs</a>
                            <a href="#" class="quick-link-saved">Saved</a>
                        </section>

                        <section class="important-links">
                            <a href="#" class="dashboard-link">
                                <span>
                                    <svg width="25px" height="25px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.1"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 10.0005H7.082C6.66587 9.99708 6.26541 10.1591 5.96873 10.4509C5.67204 10.7427 5.50343 
                                    11.1404 5.5 11.5565V17.4455C5.5077 18.3117 6.21584 19.0078 7.082 19.0005H9.918C10.3341 19.004 10.7346 18.842 11.0313 18.5502C11.328 18.2584 
                                    11.4966 17.8607 11.5 17.4445V11.5565C11.4966 11.1404 11.328 10.7427 11.0313 10.4509C10.7346 10.1591 10.3341 9.99708 9.918 10.0005Z"
                                                stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 4.0006H7.082C6.23326 3.97706 5.52559 4.64492 5.5 5.4936V6.5076C5.52559 7.35629 6.23326 
                                    8.02415 7.082 8.0006H9.918C10.7667 8.02415 11.4744 7.35629 11.5 6.5076V5.4936C11.4744 4.64492 10.7667 3.97706 9.918 4.0006Z" stroke="#000000"
                                                stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.082 13.0007H17.917C18.3333 13.0044 18.734 12.8425 19.0309 12.5507C19.3278 12.2588 19.4966 11.861 19.5 11.4447V5.55666C19.4966 5.14054 
                                    19.328 4.74282 19.0313 4.45101C18.7346 4.1592 18.3341 3.9972 17.918 4.00066H15.082C14.6659 3.9972 14.2654 4.1592 13.9687 4.45101C13.672 4.74282 
                                    13.5034 5.14054 13.5 5.55666V11.4447C13.5034 11.8608 13.672 12.2585 13.9687 12.5503C14.2654 12.8421 14.6659 13.0041 15.082 13.0007Z"
                                                stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.082 19.0006H17.917C18.7661 19.0247 19.4744 18.3567 19.5 17.5076V16.4936C19.4744 15.6449 18.7667 14.9771 17.918 15.0006H15.082C14.2333 
                                    14.9771 13.5256 15.6449 13.5 16.4936V17.5066C13.525 18.3557 14.2329 19.0241 15.082 19.0006Z" stroke="#000000" stroke-width="0.75"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <p>Dashboard</p>
                            </a>
                            <a href="#" class="edit-profile">
                                <span>
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M11 15C10.1183 15 9.28093 14.8098 8.52682 14.4682C8.00429 14.2315 7.74302 14.1131 7.59797 14.0722C7.4472 14.0297 7.35983 14.0143 7.20361 
                                    14.0026C7.05331 13.9914 6.94079 14 6.71575 14.0172C6.6237 14.0242 6.5425 14.0341 6.46558 14.048C5.23442 14.2709 4.27087 15.2344 4.04798 16.4656C4 
                                    16.7306 4 17.0485 4 17.6841V19.4C4 19.9601 4 20.2401 4.10899 20.454C4.20487 20.6422 4.35785 20.7951 4.54601 20.891C4.75992 21 5.03995 21 5.6 21H8.4M15 
                                    7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 
                                    14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 
                                    15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 
                                    18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z" stroke="#000000" stroke-width="0.72"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <p>Edit profile</p>
                            </a>
                            <a href="#" class="verification-link">
                                <span>
                                    <svg width="25px" height="25px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#000000" stroke-width="1.44">
                                            <path d="M4.39254 16.2614C2.64803 13.1941 1.66074 9.71783 1.51646 6.15051C1.50127 5.77507 1.70918 5.42812 2.04153 5.25282L11.5335 0.246091C11.8254 
                                    0.0920859 12.1746 0.0920859 12.4665 0.246091L21.9585 5.25282C22.2908 5.42812 22.4987 5.77507 22.4835 6.15051C22.3393 9.71783 21.352 13.1941 19.6075 
                                    16.2614C17.8618 19.3307 15.4169 21.8869 12.4986 23.7001C12.1931 23.8899 11.8069 23.8899 11.5014 23.7001C8.58313 21.8869 6.13817 19.3307 4.39254 16.2614Z"
                                                fill="#ffffff"></path>
                                            <path d="M8.25 12.75L11.25 15L17.25 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M4.39254 16.2614C2.64803 13.1941 1.66074 9.71783 1.51646 6.15051C1.50127 5.77507 1.70918 5.42812 2.04153 5.25282L11.5335 
                                    0.246091C11.8254 0.0920859 12.1746 0.0920859 12.4665 0.246091L21.9585 5.25282C22.2908 5.42812 22.4987 5.77507 22.4835 6.15051C22.3393 9.71783 21.352 13.1941 
                                    19.6075 16.2614C17.8618 19.3307 15.4169 21.8869 12.4986 23.7001C12.1931 23.8899 11.8069 23.8899 11.5014 23.7001C8.58313 21.8869 6.13817 19.3307 4.39254 
                                    16.2614Z" fill="#ffffff"></path>
                                            <path d="M8.25 12.75L11.25 15L17.25 9" stroke="#000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <p>Verification</p>
                            </a>
                            <a href="#" class="upgrade-link">
                                <span>
                                    <svg height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.091 197.091" stroke="#000000" stroke-width="0.00197091">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <g>
                                                        <path style="fill:#010002;" d="M32.131,184.928L32.131,184.928c-18.388,0-31.573-2.505-32.131-2.616l0.734-7.648 
                                    c32.349,0,55.555-8.45,68.964-25.098c15.174-18.835,13.532-43.34,12.394-51.811H25.918l85.588-85.592l85.585,85.592h-53.976 
                                    C136.315,173.487,70.922,184.928,32.131,184.928z M44.564,90.028h43.912l0.673,3.028c0.311,1.432,7.476,35.341-13.381,61.302 
                                    c-8.425,10.475-20.113,18.041-34.94,22.651c42.867-1.882,90.753-18.714,94.861-83.362l0.229-3.618h42.527l-66.939-66.946 L44.564,90.028z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p>Upgrade</p>
                            </a>
                            <a href="#" class="support-link">
                                <span>
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.7" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title id="supportIconTitle">Support</title>
                                            <path d="M18,9 L16,9 C14.8954305,9 14,9.8954305 14,11 L14,13 C14,14.1045695 
                                    14.8954305,15 16,15 L16,15 C17.1045695,15 18,14.1045695 18,13 L18,9 C18,4.02943725 13.9705627,0 9,0 C4.02943725,0 0,4.02943725 0,9 L0,13 
                                    C1.3527075e-16,14.1045695 0.8954305,15 2,15 L2,15 C3.1045695,15 4,14.1045695 4,13 L4,11 C4,9.8954305 3.1045695,9 2,9 L0,9" transform="translate(3 3)"></path>
                                            <path d="M21,14 L21,18 C21,20 20.3333333,21 19,21 C17.6666667,21 16,21 14,21"></path>
                                        </g>
                                    </svg>
                                </span>
                                <p>Support</p>
                            </a>
                        </section>
                    </div>

                    <div class="support-bot-button-wrapper">
                        <button type="button" id="supportBotButton" class="fixed-action">
                            <svg fill="#ffffff" height="35px" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path d="M413.906,65.669C371.559,23.322,315.481,0,256,0c-32.044,0-63.034,6.719-92.108,19.971 c-3.821,1.742-5.507,6.251-3.766,10.073c1.742,3.822,6.251,5.507,10.073,3.766C197.281,21.466,226.148,15.208,256,15.208 
                            c114.893,0,208.366,93.472,208.366,208.367v80.079h-17.584v-5.477c0-17.504-14.24-31.744-31.744-31.744h-35.026 c-4.199,0-7.604,3.404-7.604,7.604v16.79h-10.8c-11.445,0-20.758,9.312-20.758,20.758v98.398c0,11.445,9.312,20.758,20.758,20.758 
                            h10.8v16.789c0,4.2,3.405,7.604,7.604,7.604h35.026c17.139,0,31.14-13.656,31.716-30.656h25.216c4.199,0,7.604-3.404,7.604-7.604 v-99.686v-5.929v-87.683C479.574,164.094,456.253,108.015,413.906,65.669z M372.408,415.53h-10.8v0.001 
                            c-3.06,0-5.55-2.489-5.55-5.55v-98.398c0-3.061,2.49-5.55,5.55-5.55h10.8V415.53z M431.574,423.388 c0,9.118-7.417,16.536-16.536,16.536h-27.422v-16.789V298.43v-16.79h27.422c9.118,0,16.536,7.417,16.536,16.536V423.388z 
                            M464.366,409.266h-16.632v-90.405h16.632V409.266z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M279.304,454.214h-47.993c-13.301,0-24.524,9.036-27.871,21.291H80.248c-17.983,0-32.613-14.63-32.613-32.613v-18.418 h16.66c0.576,17,14.577,30.656,31.716,30.656h35.026c4.199,0,7.604-3.404,7.604-7.604v-16.788h10.8 
                            c11.445,0,20.758-9.312,20.758-20.758v-98.398c0-11.445-9.312-20.758-20.758-20.758h-10.8v-16.79c0-4.2-3.405-7.604-7.604-7.604 H96.01c-17.503,0-31.744,14.24-31.744,31.744v5.477H47.635v-80.079c0-60.149,26.255-117.46,72.031-157.238 
                            c3.169-2.755,3.506-7.557,0.752-10.727c-2.754-3.17-7.557-3.508-10.728-0.752c-49.101,42.668-77.263,104.164-77.263,168.72v87.683 v5.929v72.31v27.374v26.022c0,26.369,21.452,47.821,47.821,47.821h123.193c3.348,12.253,14.57,21.287,27.87,21.287h47.993 
                            c15.932,0,28.893-12.961,28.893-28.893S295.236,454.214,279.304,454.214z M138.641,306.035h10.8v-0.001 c3.06,0,5.55,2.489,5.55,5.55v98.398c0,3.061-2.49,5.55-5.55,5.55h-10.8V306.035z M79.474,416.87V311.258v-13.081h0.001 
                            c0-9.118,7.417-16.536,16.536-16.536h27.422v16.79v124.705v16.789H96.01c-9.118,0-16.536-7.417-16.536-16.536V416.87z M47.635,389.496v-70.635h16.632v90.405H47.635V389.496z 
                            M279.304,496.792h-47.993c-7.546,0-13.685-6.14-13.685-13.685 c0-7.545,6.139-13.685,13.685-13.685h47.993c7.546,0,13.685,6.14,13.685,13.685S286.85,496.792,279.304,496.792z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>

                    <!-- Support Bot Modal -->
                    <div id="supportBotModal" class="support-bot-modal-wrapper" style="display: none;">

                        <div class="faq-container">
                            <!-- Header -->
                            <div class="faq-header">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img.webp" alt="Support" />
                                <div>
                                    <strong>Hi, Pars Avesta</strong><br />
                                    Customer service and answering your questions.
                                </div>
                            </div>

                            <!-- FAQ Area -->
                            <div class="faq-wrapper">

                                <!-- Tabs -->
                                <div class="faq-tabs">
                                    <div class="faq-tab active" data-tab="faq-suppliers">Suppliers</div>
                                    <div class="faq-tab" data-tab="faq-buyers">Buyers</div>
                                    <div class="faq-tab" data-tab="faq-verification">Verification</div>
                                </div>

                                <!-- FAQ Sections -->
                                <div class="faq-sections">

                                    <div id="faq-suppliers" class="active">
                                        <div class="faq-item">
                                            <div class="faq-question">How can I post products on Rexcer?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How long does it take for my product to be confirmed?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">Why was my product rejected?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How can I post products on Rexcer?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How long does it take for my product to be confirmed?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">Why was my product rejected?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How can I post products on Rexcer?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How long does it take for my product to be confirmed?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">Why was my product rejected?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                    </div>

                                    <div id="faq-buyers">
                                        <div class="faq-item">
                                            <div class="faq-question">How do I contact a supplier?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How do I track my order?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How do I contact a supplier?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How do I track my order?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                    </div>

                                    <div id="faq-verification">
                                        <div class="faq-item">
                                            <div class="faq-question">How do I verify my company?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">Why is verification needed?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How do I verify my company?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">Why is verification needed?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">How do I verify my company?</div>
                                            <div class="faq-answer">Go to your dashboard, click "Add Product", and fill in the required details.</div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Live Chat Button -->
                                <div class="live-chat-btn">
                                    <span>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M8 18L10.29 20.29C10.514 20.5156 10.7804 20.6946 11.0739 20.8168C11.3674 20.9389 11.6821 21.0018 12 21.0018C12.3179 21.0018 12.6326 
                                        20.9389 12.9261 20.8168C13.2196 20.6946 13.486 20.5156 13.71 20.29L16 18H18C19.0609 18 20.0783 17.5786 20.8284 16.8285C21.5786 16.0783 22 
                                        15.0609 22 14V7C22 5.93913 21.5786 4.92178 20.8284 4.17163C20.0783 3.42149 19.0609 3 18 3H6C4.93913 3 3.92172 3.42149 3.17157 4.17163C2.42142 
                                        4.92178 2 5.93913 2 7V14C2 15.0609 2.42142 16.0783 3.17157 16.8285C3.92172 17.5786 4.93913 18 6 18H8Z" stroke="#fff" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span>Live chat</span>
                                </div>
                            </div>

                            <!-- Chat Box -->
                            <div class="chat-box">

                                <div class="chat-header">
                                    <div class="back-arrow">&#8592;</div>
                                    <strong>Agrifoodz support</strong>
                                </div>

                                <div class="chat-msgs">
                                    <div class="chat-msg">Hi there! Good day.<br />How can I help you with Agrifoodz?</div>
                                </div>

                                <div class="chat-input">
                                    <input type="text" placeholder="Message..." />
                                    <button>
                                        <svg width="20px" height="20x" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <div class="tab-panel active" id="newProduct">
                <div id="supplierContent" class="product-content">

                    <div class="product-content-title">
                        <h2>Looking for buyers of your product?</h2>
                        <p>Post your product now!</p>
                        <button class="btn-verify" id="add-product">New Product</button>
                    </div>

                    <div id="multiStepForm" style="display:none; margin-top: 20px;">

                        <!-- Breadcrumb -->
                        <ol class="breadcrumb">
                            <li class="step-breadcrumb" data-step="1">Category Selection</li>
                            <li class="step-breadcrumb" data-step="2">Product Information</li>
                            <li class="step-breadcrumb" data-step="3">Stock &amp; Price</li>
                            <li class="step-breadcrumb" data-step="4">Photos</li>
                            <li class="step-breadcrumb" data-step="5">Description</li>
                            <li class="step-breadcrumb" data-step="6">Details</li>
                        </ol>

                        <!-- Step 1: Product Info -->
                        <div class="step step-1">

                            <div class="category-list-header" id="category-list-header">
                                <div class="category-search-input-wrapper">
                                    <svg width="30px" height="30px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="transparent" stroke="#000" stroke-width="3">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="a" d="M42.5011,42.5,35.15,34.7245a17.244,17.244,0,1,0-7.0752,4.4212"></path>
                                        </g>
                                    </svg>
                                    <input type="text" id="category-search" placeholder="Search product category">
                                </div>
                                <hr>
                            </div>

                            <div class="category-wrapper">

                                <ul class="main-categories" id="main-list"></ul>
                                <ul class="sub-categories" id="sub-list"></ul>

                            </div>

                        </div>

                        <!-- Step 2: Pricing & Inventory -->
                        <div class="step step-2" style="display:none;">

                            <p id="selected-category-display">Enter the type of your: <strong></strong></p>
                            <span>E.g : Dried Apricots</span>
                            <input type="number" name="stock" placeholder="The type of your ...." />

                            <button class="perv-step" onclick="goToStep(1)">Back</button>
                            <button class="next-step" onclick="goToStep(3)">Next</button>

                        </div>

                        <!-- Step 3: Shipping -->
                        <div class="step step-3" style="display:none;">

                            <div class="product-information">
                                <p>supply ability (units)</p>
                                <span> E.g: 50000 </span>
                                <input id="stock" type="tel" name="stock" placeholder="Supply ability" pattern="[0-9]*" class="">
                            </div>
                            <div class="product-information">
                                <p>minimum order (units)</p>
                                <span> E.g: 25000 </span>
                                <input id="stock" type="tel" name="stock" placeholder="Miminum order" pattern="[0-9]*" class="">
                            </div>
                            <div class="product-information">
                                <p>miminum product price</p>
                                <span> E.g: 15000 </span>
                                <input id="stock" type="tel" name="stock" placeholder="Miminum product price" pattern="[0-9]*" class="">
                            </div>

                            <button class="perv-step" onclick="goToStep(2)">Back</button>
                            <button class="next-step" onclick="goToStep(4)">Next</button>
                        </div>

                        <!-- Step 4: Review & Submit -->
                        <div class="step step-4" style="display:none;">

                            <div class="upload-photo">
                                <input type="file" id="photoInput" accept="image/jpeg, image/png" hidden />

                                <div class="upload-area" id="photouploadArea" onclick="document.getElementById('photoInput').click()">
                                    <i class="upload-icon">
                                        <svg width="35px" height="35px" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path class="b" d="m19.83,8.77l-2.77,2.84H6.29c-.9886,0-1.79.8014-1.79,1.79v23.22c0,.9902.7998,1.7945,1.79,1.8h35.42c.9902-.0055,1.79-.8098,1.79-1.8V13.4c0-.9886-.8014-1.79-1.79-1.79h-10.77l-2.77-2.84h-8.34Zm18.9162,5.58c1.1645,0,2.1086.8954,2.1086,2s-.944,2-2.1086,2c-1.1584-.1133-1.9995-1.1063-1.8801-2.2051.1024-.9423.8878-1.6873,1.8801-1.7949Z"></path>
                                                <g>
                                                    <circle class="b" cx="24" cy="26.2231" r="8.5069"></circle>
                                                    <g>
                                                        <polygon class="b" points="26.4543 21.9723 21.5457 21.9723 19.0914 26.2231 21.5457 30.4739 26.4543 30.4739 
                                    28.9086 26.2231 26.4543 21.9723"></polygon>
                                                        <line class="b" x1="28.9086" y1="26.2231" x2="31.3693" y2="30.4852"></line>
                                                        <line class="b" x1="16.6372" y1="21.9723" x2="19.0914"
                                                            y2="26.2231"></line>
                                                        <line class="b" x1="24" y1="17.7163" x2="21.5457" y2="21.9722"></line>
                                                        <line class="b" x1="26.4543" y1="30.4741" x2="24" y2="34.73"></line>
                                                        <line class="b" x1="21.5457" y1="30.4741" x2="16.6304" y2="30.4741"></line>
                                                        <line class="b" x1="26.4543" y1="21.9722" x2="31.3693" y2="21.9722"></line>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                    <p><strong>Upload photo</strong></p>
                                </div>
                            </div>

                            <div class="upload-ruls">
                                <ul>
                                    <li>Upload only product-related photo</li>
                                    <li>Do not include phone number or logos on images</li>
                                    <li>You are allowed to upload at most of 4 images</li>
                                    <li>The size of each image should be less than 5 MB</li>
                                    <li>Images format must be JPEG or JPG</li>
                                </ul>
                            </div>

                            <button class="perv-step" onclick="goToStep(3)">Back</button>
                            <button class="next-step" onclick="goToStep(5)">Submit</button>
                        </div>

                        <!-- Step 5: Review & Submit -->
                        <div class="step step-5" style="display:none;">

                            <div class="product-description">
                                <p>Product Description</p>
                                <textarea data-v-60c1d8ce="" rows="9" placeholder="Describe your product packaging and quality,etc..." class=""></textarea>
                            </div>

                            <button class="perv-step" onclick="goToStep(4)">Back</button>
                            <button class="next-step" onclick="goToStep(6)">Submit</button>
                        </div>

                        <!-- Step 6: final step -->
                        <div class="step step-6" style="display:none;">

                            <div class="detail-field" id="detail-container">
                                <!-- First static item -->
                                <div class="detail-item">
                                    <div class="select-wrapper">
                                        <label>Detail</label>
                                        <select class="detail-select">
                                            <option selected disabled>Select an item</option>
                                            <option value="Packaging">Packaging</option>
                                            <option value="Quality">Quality</option>
                                            <option value="Color">Color</option>
                                            <option value="Shape & Size">Shape & Size</option>
                                            <option value="Certificates">Certificates</option>
                                            <option value="Freshness">Freshness</option>
                                            <option value="Payment Type">Payment Type</option>
                                            <option value="Durability">Durability</option>
                                            <option value="Other Advantages">Other Advantages</option>
                                        </select>
                                    </div>
                                    <div class="text-input-wrapper" style="display: none;">
                                        <label>Description</label>
                                        <textarea rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="remove-button" style="display: none;">Delete</div>
                                </div>

                                <!-- Second static item -->
                                <div class="detail-item">
                                    <div class="select-wrapper">
                                        <label>Detail</label>
                                        <select class="detail-select">
                                            <option selected disabled>Select an item</option>
                                            <option value="Packaging">Packaging</option>
                                            <option value="Quality">Quality</option>
                                            <option value="Color">Color</option>
                                            <option value="Shape & Size">Shape & Size</option>
                                            <option value="Certificates">Certificates</option>
                                            <option value="Freshness">Freshness</option>
                                            <option value="Payment Type">Payment Type</option>
                                            <option value="Durability">Durability</option>
                                            <option value="Other Advantages">Other Advantages</option>
                                        </select>
                                    </div>
                                    <div class="text-input-wrapper" style="display: none;">
                                        <label>Description</label>
                                        <textarea rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="remove-button" style="display: none;">Delete</div>
                                </div>
                            </div>

                            <!-- Add more button -->
                            <button id="add-detail">More Detail</button>

                            <!-- Hidden template -->
                            <div id="detail-template" style="display: none;">
                                <div class="detail-item">
                                    <div class="select-wrapper">
                                        <label>Detail</label>
                                        <select class="detail-select">
                                            <option selected disabled>Select an item</option>
                                            <option value="Packaging">Packaging</option>
                                            <option value="Quality">Quality</option>
                                            <option value="Color">Color</option>
                                            <option value="Shape & Size">Shape & Size</option>
                                            <option value="Certificates">Certificates</option>
                                            <option value="Freshness">Freshness</option>
                                            <option value="Payment Type">Payment Type</option>
                                            <option value="Durability">Durability</option>
                                            <option value="Other Advantages">Other Advantages</option>
                                        </select>
                                    </div>
                                    <div class="text-input-wrapper" style="display: none;">
                                        <label>Description</label>
                                        <textarea rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="remove-button" style="display: none;">Delete</div>
                                </div>
                            </div>


                            <button class="perv-step" onclick="goToStep(5)">Back</button>
                            <button class="next-step" onclick="submitForm()">Submit</button>
                        </div>

                    </div>


                </div>
            </div>


            <div class="tab-panel" id="messages">

                <div class="messenger-main">

                    <div class="messenger-sidebar">
                        <input type="text" placeholder="Search contact">
                        <div class="tabs">
                            <div id="tab-messages" class="active">Messages</div>
                            <div id="tab-buyers">Suggested Buyers</div>
                        </div>

                        <div id="content-messages" class="tab-content active">
                            <div class="no-messages">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/no-message.webp" alt="No messages" />
                                <p><strong>No messages</strong></p>
                                <p>Send a message to start a new conversation with buyers.</p>
                                <button class="contact-button">
                                    <span>
                                        <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 193.98 193.98" fill="#fff" stroke="#fff" stroke-width="5">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <path style="fill:#fff;" d="M185.696,30.248C185.696,13.292,159.377,0,125.775,0C97.799,0,74.479,9.062,67.74,22.547 l-0.397,0.784l0.877-0.043c1.596-0.086,3.3-0.129,5.196-0.15h0.268l0.15-0.215c7.326-10.304,28.684-17.515,51.94-17.515 
                                    c29.554,0,54.513,11.374,54.513,24.837c0,11.878-20.356,22.665-46.328,24.551l-0.483,0.032v5.422l0.555-0.032 c20.697-1.381,37.821-7.766,46.257-17.182v7.959c0,8.664,0,28.942-46.317,30.968l-0.494,0.021v5.4l0.544-0.021 
                                    c23.191-1.016,38.734-6.675,46.267-16.828v5.773c0,8.654,0,28.931-46.317,30.957l-0.494,0.021v5.4l0.544-0.021 c23.184-1.006,38.734-6.675,46.267-16.828v5.783c0,8.654,0,28.942-46.317,30.957l-0.494,0.021v5.408l0.544-0.032 
                                    c23.191-1.006,38.745-6.671,46.267-16.828v7.777c0,8.729,0,29.178-47.155,30.989l-0.394,0.021l-0.086,0.387 c-0.344,1.5-0.805,2.967-1.381,4.348l-0.311,0.737l0.805-0.021c53.93-1.628,53.93-26.938,53.93-36.461v-21.269h-0.276 
                                    c0.276-2.38,0.276-4.466,0.276-6.034V80.349h-0.093c0.093-1.585,0.093-2.988,0.093-4.037V55.555l-0.104-0.397 c0.104-1.628,0.104-3.074,0.104-4.155V30.248z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path style="fill:#fff;" d="M68.202,27.486c-33.591,0-59.91,13.292-59.91,30.248v20.761c0,1.22,0.011,2.537,0.118,4.037H8.289 v21.262c0,1.224,0.011,2.552,0.118,4.051H8.289v21.262c0,1.542,0,3.618,0.311,6.03H8.289v21.273c0,9.287,0,37.574,60.318,37.574 
                                    c59.502,0,59.502-27.303,59.502-37.574v-21.273h-0.265c0.265-2.366,0.265-4.466,0.265-6.03v-21.262h-0.082 c0.082-1.585,0.082-2.999,0.082-4.051V82.532h-0.082c0.082-1.585,0.082-2.988,0.082-4.037V57.734 C128.109,40.777,101.793,27.486,68.202,27.486z 
                                    M68.202,82.575c-29.543,0-54.502-11.374-54.502-24.841 c0-13.464,24.959-24.837,54.502-24.837s54.513,11.374,54.513,24.837C122.715,71.201,97.742,82.575,68.202,82.575z 
                                    M68.607,109.635c-54.907,0-54.907-22.625-54.907-31.14v-7.97c9.566,10.647,30.71,17.461,54.502,17.461 s44.936-6.814,54.513-17.461v7.97C122.715,87.804,122.715,109.635,68.607,109.635z M68.607,134.937 
                                    c-54.907,0-54.907-22.622-54.907-31.14v-6.256c8.525,11.613,26.985,17.49,54.907,17.49c27.55,0,45.738-5.719,54.105-17.01v5.773 C122.715,113.117,122.715,134.937,68.607,134.937z
                                    M68.607,160.247c-54.907,0-54.907-22.622-54.907-31.136v-6.256 c8.525,11.61,26.985,17.493,54.907,17.493c27.55,0,45.738-5.723,54.105-17.01v5.773
                                    C122.715,138.426,122.715,160.247,68.607,160.247z M68.607,188.58c-54.907,0-54.907-23.373-54.907-32.167v-8.26
                                    c8.525,11.61,26.985,17.504,54.907,17.504c27.55,0,45.738-5.723,54.105-17.01v7.766 C122.715,166.041,122.715,188.58,68.607,188.58z"></path>
                                                </g>
                                                <g>
                                                    <path style="fill:#fff;" d="M94.736,45.022l-6.911,2.337c-3.407-0.816-7.122-1.242-10.744-1.242 c-4.073,0-7.809,0.533-10.797,1.542c-2.817,0.945-4.241,2.047-4.477,3.45c-0.247,1.489,0.888,3.117,3.693,5.282
                                    c1.392,1.117,2.036,1.983,1.94,2.591c-0.075,0.419-0.591,1.049-2.623,1.736c-1.8,0.601-3.973,0.923-6.299,0.923 c-2.709,0-5.443-0.429-7.873-1.256c-3.246-1.092-5.723-2.613-6.621-4.091l-0.172-0.29l-7.294,1.156l0.311,0.633
                                    c0.684,1.392,3.074,2.978,6.352,4.284l-6.954,2.333l5.944,2.004l7.186-2.412c7.523,1.822,16.849,1.65,22.711-0.333 c3.246-1.081,4.885-2.29,5.15-3.811c0.247-1.414-0.748-2.967-3.117-4.864c-1.167-0.973-2.688-2.344-2.548-3.128
                                    c0.086-0.447,0.805-0.898,2.122-1.349c1.167-0.387,3.085-0.855,5.644-0.855c2.305,0,4.617,0.383,6.879,1.145 c4.316,1.457,5.461,2.881,6.02,3.568l0.193,0.225l7.455-1.124l-0.58-0.709c-1.049-1.263-2.827-2.398-5.408-3.461l6.768-2.28 L94.736,45.022z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path style="fill:#fff;" d="M112.762,21.52l1.092-0.698l-6.771-1.338l-0.172,0.097c-1.721,0.984-2.731,2.656-2.688,4.391 l-7.777-0.469l0.633,2.999l8.142,0.494c2.409,3.708,9.212,5.375,14.394,5.687c0.816,0.043,1.585,0.064,2.323,0.064
                                    c5.261,0,8.579-1.242,11.077-4.169c2.305-2.559,4.005-3.171,7.573-2.935c1.489,0.086,6.363,0.569,6.889,3.074 c0.322,1.489-0.612,2.419-1.671,3.214l-0.913,0.684l6.599,1.349l0.193-0.14c1.396-1.059,2.069-2.283,2.069-3.718l7.573,0.469
                                    l-0.644-2.999l-7.831-0.483c-1.972-2.902-7.272-5.01-13.646-5.397c-0.666-0.043-1.296-0.064-1.897-0.064 c-5.021,0-8.26,1.36-10.826,4.531c-1.779,2.079-4.094,2.817-8.024,2.559c-4.295-0.258-7.433-1.671-7.838-3.525
                                    C110.232,23.352,111.989,22.014,112.762,21.52z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>

                                    </span>
                                    Contact Buyers</button>
                            </div>
                        </div>

                        <div id="content-buyers" class="tab-content">
                            <div class="no-messages">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/suggestion-buyer.webp" alt="No messages" />
                                <p><strong>No suggested buyers</strong></p>
                                <p>Start connecting to see suggested buyers here.</p>
                                <button class="contact-button">
                                    <span>
                                        <svg width="20px" height="20px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M12 6V18" stroke="#fff" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6 12H18" stroke="#fff" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    Contact Buyers</button>
                            </div>
                        </div>

                    </div>

                    <div class="main-inboxes">
                        <img class="phone" src="assets/images/message.webp" alt="App on phone" />
                        <p>Stay With Us Know Us Better</p>
                        <div class="qr-code">
                            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/BRmNQ1.webp" alt="QR Code" />
                        </div>
                    </div>

                </div>

            </div>




            <div class="tab-panel" id="newRFQ">

                <div class="newrfq">

                    <div class="newrfq-inner-top">
                        <div class="newrfq-title">RFQs list</div>

                        <div class="newrfq-search-box">
                            <!-- Search Icon -->
                            <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M10 2.75C14.0041 2.75 17.25 5.99594 17.25 10C17.25 11.7319 16.6427 13.3219 15.6295 14.5688L20.5303 19.4697C20.8232 19.7626 20.8232 20.2374 20.5303 20.5303C20.2641 20.7966 19.8474 20.8208 19.5538 20.6029L19.4697 20.5303L14.5688 15.6295C13.3219 16.6427 11.7319 17.25 10 17.25C5.99594 17.25 2.75 14.0041 2.75 10C2.75 5.99594 5.99594 2.75 10 2.75ZM10 4.25C6.82436 4.25 4.25 6.82436 4.25 10C4.25 13.1756 6.82436 15.75 10 15.75C13.1756 15.75 15.75 13.1756 15.75 10C15.75 6.82436 13.1756 4.25 10 4.25Z" fill="#030303" fill-opacity="0.5" />
                            </svg>

                            <!-- Input -->
                            <input id="buy-ad-search" type="text" placeholder="Search RFQ">

                            <!-- Filter / Sort -->
                            <select id="sort-select" class="search-filter">
                                <option value="" disabled selected hidden>Select Sorting</option>
                                <option value="default">Default</option>
                                <option value="newest">Newest</option>
                            </select>

                        </div>

                    </div>

                    <div class="newrfq-content">
                        <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/search.webp" alt="Magnifier icon">
                        <div class="no-rfqs">No RFQs</div>
                        <div class="desc">Post your products to connect with thousands of potential buyers.</div>
                        <a href="#">Post Product</a>
                    </div>
                </div>

            </div>



            <div class="tab-panel" id="suggestedSuppliers">List of suggested suppliers</div>


            <div class="tab-panel" id="verification">

                <div class="upload-id-container">
                    <h2>Upload your ID (Passport) following the correct sample</h2>
                    <p>Make sure the photo of your passport isn’t blurry and that it clearly shows your face.</p>

                    <div class="sample-gallery">
                        <div class="sample-item valid">
                            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/sample-3-compact.webp" alt="Correct passport sample" />
                            <p>All information is clearly visible.</p>
                        </div>
                        <div class="sample-item invalid">
                            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/sample-2-compact.webp" alt="Blurry passport" />
                            <p>The photo is blurry.</p>
                        </div>
                        <div class="sample-item invalid">
                            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/sample-1-compact.webp" alt="Cropped passport" />
                            <p>Passport is cropped.</p>
                        </div>
                        <div class="sample-item invalid">
                            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/sample-4-compact.webp" alt="Covered passport" />
                            <p>Part of passport is covered.</p>
                        </div>
                    </div>

                    <div class="upload-box">
                        <input type="file" id="fileInput" accept="image/jpeg, image/png" hidden />

                        <div class="upload-area" id="uploadArea" onclick="document.getElementById('fileInput').click()">
                            <i class="upload-icon">
                                <svg width="35px" height="35px" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path class="b" d="m19.83,8.77l-2.77,2.84H6.29c-.9886,0-1.79.8014-1.79,1.79v23.22c0,.9902.7998,1.7945,1.79,1.8h35.42c.9902-.0055,1.79-.8098,1.79-1.8V13.4c0-.9886-.8014-1.79-1.79-1.79h-10.77l-2.77-2.84h-8.34Zm18.9162,5.58c1.1645,0,2.1086.8954,2.1086,2s-.944,2-2.1086,2c-1.1584-.1133-1.9995-1.1063-1.8801-2.2051.1024-.9423.8878-1.6873,1.8801-1.7949Z"></path>
                                        <g>
                                            <circle class="b" cx="24" cy="26.2231" r="8.5069"></circle>
                                            <g>
                                                <polygon class="b" points="26.4543 21.9723 21.5457 21.9723 19.0914 26.2231 21.5457 30.4739 26.4543 30.4739 
                            28.9086 26.2231 26.4543 21.9723"></polygon>
                                                <line class="b" x1="28.9086" y1="26.2231" x2="31.3693" y2="30.4852"></line>
                                                <line class="b" x1="16.6372" y1="21.9723" x2="19.0914"
                                                    y2="26.2231"></line>
                                                <line class="b" x1="24" y1="17.7163" x2="21.5457" y2="21.9722"></line>
                                                <line class="b" x1="26.4543" y1="30.4741" x2="24" y2="34.73"></line>
                                                <line class="b" x1="21.5457" y1="30.4741" x2="16.6304" y2="30.4741"></line>
                                                <line class="b" x1="26.4543" y1="21.9722" x2="31.3693" y2="21.9722"></line>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                            <p><strong>Add photo</strong></p>
                            <p><small>JPEG or PNG only</small></p>
                        </div>

                        <button class="upload-btn" id="submitBtn" disabled>Save & continue</button>
                    </div>

                </div>

            </div>


            <div class="tab-panel" id="saved">

                <div class="saved-product">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M6 4h12v16l-6-4-6 4V4z" />
                        </svg>
                    </div>
                    <div class="saved-product-message">No saved users yet</div>
                    <button class="btn">New collection</button>
                </div>

            </div>


            <div class="tab-panel" id="feedback">

                <div class="feedback-container">
                    <h2>How would you describe your experience with Rexcer?</h2>
                    <p class="description">Your feedback is used to improve Rexcer</p>

                    <div class="emoji-list" id="emojiList">
                        <!-- Emojis will be dynamically inserted here -->
                    </div>

                    <div id="emojiText" class="emoji-label">Average</div>

                    <textarea id="opinionBox" placeholder="Write your opinion"></textarea>
                    <button onclick="submitFeedback()">Submit</button>
                </div>

            </div>

        </main>

        <!-- Floating Button -->
    </div>

<?php wp_footer(); ?>
</body>

</html>