<?php get_header(); ?>

<main id="primary" class="archive-page container">

    <!-- Main content -->
    <div class="content-area">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php the_archive_title(); ?></h1>
                <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
            </header>

            <div class="post-grid">

                <?php
                // WP Query to fetch latest blog posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9, // Change this as needed
                );

                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post(); 
              ?>

                <div class="blog-card">
                  <a href="<?php the_permalink(); ?>">

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                    <?php else : ?>
                        <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/main-logo.png" alt="No image">
                    <?php endif; ?>

                    <div class="blog-content">
                      <h3><?php the_title(); ?></h3>
    
                      <div class="blog-meta">
                        <span>
                          <svg fill="#00a055" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 465 465" stroke="#000000" stroke-width="0.00465">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                              <g>
                                <path
                                  d="M142.5,35H345v47.5c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5V27.51l0-0.01l0-0.01V7.5c0-4.143-3.358-7.5-7.5-7.5 S345,3.357,345,7.5V20H142.5c-4.142,0-7.5,3.357-7.5,7.5S138.358,35,142.5,35z">
                                </path>
                                <path
                                  d="M432.5,20h-50c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H425v95H40V35h65v47.5c0,4.143,3.358,7.5,7.5,7.5 s7.5-3.357,7.5-7.5v-75c0-4.143-3.358-7.5-7.5-7.5S105,3.357,105,7.5V20H32.5c-4.142,0-7.5,3.357-7.5,7.5v370 
                            c0,4.143,3.358,7.5,7.5,7.5h330c0.251,0,0.501-0.013,0.749-0.038c0.186-0.019,0.368-0.05,0.549-0.082 c0.059-0.01,0.119-0.015,0.178-0.026c0.214-0.043,0.423-0.099,0.63-0.158c0.026-0.008,0.054-0.013,0.08-0.021 
                            c0.208-0.063,0.41-0.138,0.609-0.218c0.027-0.011,0.054-0.019,0.081-0.029c0.189-0.079,0.371-0.168,0.552-0.261 c0.037-0.02,0.076-0.035,0.112-0.055c0.165-0.088,0.323-0.187,0.48-0.287c0.05-0.031,0.102-0.059,0.151-0.092 
                            c0.146-0.098,0.285-0.205,0.423-0.313c0.055-0.043,0.113-0.081,0.167-0.125c0.169-0.139,0.33-0.287,0.486-0.439 c0.018-0.019,0.039-0.033,0.057-0.052l70-70c0.015-0.015,0.027-0.031,0.042-0.046c0.157-0.16,0.308-0.324,0.451-0.498 
                            c0.039-0.047,0.071-0.098,0.109-0.145c0.114-0.146,0.227-0.292,0.33-0.446c0.028-0.041,0.05-0.085,0.077-0.127 c0.106-0.164,0.209-0.331,0.301-0.504c0.017-0.03,0.029-0.063,0.045-0.094c0.096-0.187,0.188-0.375,0.269-0.569 
                            c0.009-0.022,0.015-0.045,0.024-0.066c0.082-0.204,0.159-0.411,0.223-0.623c0.008-0.025,0.012-0.052,0.02-0.077 c0.061-0.208,0.116-0.418,0.159-0.632c0.012-0.061,0.017-0.122,0.028-0.183c0.031-0.181,0.063-0.36,0.081-0.545 
                            c0.025-0.248,0.038-0.498,0.038-0.749v-300C440,23.357,436.642,20,432.5,20z M40,145h385v175h-62.5c-4.142,0-7.5,3.357-7.5,7.5V390 H40V145z M414.394,335L370,379.394V335H414.394z">
                                </path>
                                <path
                                  d="M432.5,450h-400c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h400c4.142,0,7.5-3.357,7.5-7.5S436.642,450,432.5,450z">
                                </path>
                                <path
                                  d="M432.5,350c-4.142,0-7.5,3.357-7.5,7.5V420H40v-2.5c0-4.143-3.358-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v10 c0,4.143,3.358,7.5,7.5,7.5h400c4.142,0,7.5-3.357,7.5-7.5v-70C440,353.357,436.642,350,432.5,350z">
                                </path>
                                <path d="M288.954,207.071c-2.801-1.16-6.028-0.521-8.173,1.625l-21.4,21.399c-2.929,2.93-2.929,7.678,0,10.607 c2.929,2.928,7.678,2.928,10.606,0l8.597-8.597V321c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5V214 
                            C293.583,210.967,291.756,208.231,288.954,207.071z"></path>
                                <path
                                  d="M206.8,206.5c-19.511,0-35.384,15.873-35.384,35.384c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5 c0-11.239,9.144-20.384,20.384-20.384c11.239,0,20.383,9.145,20.383,20.384c0,8.15-4.839,15.502-12.329,18.729 
                            c-2.751,1.185-4.533,3.893-4.533,6.888s1.782,5.703,4.533,6.888c7.489,3.227,12.329,10.578,12.329,18.729 c0,11.239-9.144,20.384-20.383,20.384c-11.24,0-20.384-9.145-20.384-20.384c0-4.143-3.358-7.5-7.5-7.5s-7.5,3.357-7.5,7.5 
                            c0,19.511,15.873,35.384,35.384,35.384c19.51,0,35.383-15.873,35.383-35.384c0-9.866-4.085-19.058-10.966-25.616 c6.881-6.559,10.966-15.75,10.966-25.616C242.184,222.373,226.311,206.5,206.8,206.5z">
                                </path>
                              </g>
                            </g>
                          </svg>
                          <?php echo get_the_date(); ?>
                        </span>
                        <span>
                          <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                              <g id="Iconly/Curved/Category">
                                <g id="Category">
                                  <path id="Stroke 1" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 
                            10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z" stroke="#00a055" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Stroke 3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.3467 6.6738C10.3467 8.7024 8.7024 
                            10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z" stroke="#00a055"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Stroke 5" fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 
                            17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 
                            13.5881 21.0003 15.2333 21.0003 17.2619Z" stroke="#00a055" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Stroke 7" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 
                            17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z" stroke="#00a055" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                </g>
                              </g>
                            </g>
                          </svg>

                          <?php 
                            $category = get_the_category();
                            if (!empty($category)) {
                              echo esc_html($category[0]->name);
                            }
                          ?>

                        </span>
                      </div>
    
                      <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
    
                    </div>

                  </a>
                </div>

              <?php endwhile;
                  wp_reset_postdata();
              else : ?>
                  <p>No blog posts found.</p>
              <?php endif; ?>
                

            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>

            <p>No posts found.</p>

        <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <aside class="sidebar-area">
        <?php get_sidebar(); ?>
    </aside>

</main>

<?php get_footer(); ?>
