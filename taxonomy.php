<?php
get_header();
?>

<main>

    <section id="intro-sub">
        <div class="container">
            <div class="col-12 text-center">
                <h1><?php single_term_title(); ?></h1>

                <p class="text-white">
                    <?php the_archive_description(); ?>
                </p>
            </div>
        </div>
    </section>



    <section id="ultimas-noticias">
        <div class="container">
            <div class="row">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-4 align-items-strech">
                            <div class="card">
                                <div class="card-img" style="background: url(<?php the_thumbnail('medium') ?>) no-repeat center center/cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-data">
                                        <span class="card-category"><?= get_custom_category($post->ID, "category") ?></span>
                                        <span class="card-date"><?= get_the_date("d/m/Y"); ?></span>
                                    </div>
                                    <h3 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <hr />
                                    <div class="card-author">
                                        <p>Escrito por <?php the_author(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                else : ?>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" viewBox="0 0 32 32" id="UnhappyResult" class="mb-3" style="max-width: 200px">
                            <path fill="#4285f4" d="M17.5 13c.27 0 .5.23.5.5S17.77 14 17.5 14 17 13.77 17 13.5 17.23 13 17.5 13zM8.5 13C8.77 13 9 13.23 9 13.5S8.77 14 8.5 14 8 13.77 8 13.5 8.23 13 8.5 13z" class="color263238 svgShape"></path>
                            <g fill="#ea4335" class="color000000 svgShape">
                                <path fill="#34a853" d="M23.43,23.901c-0.128,0-0.256-0.049-0.354-0.146l-2.216-2.216c-0.195-0.195-0.195-0.512,0-0.707
					s0.512-0.195,0.707,0l2.216,2.216c0.195,0.195,0.195,0.512,0,0.707C23.686,23.853,23.558,23.901,23.43,23.901z" class="color455a64 svgShape"></path>
                                <path fill="#34a853" d="M28.5 31c-.667 0-1.295-.26-1.768-.732l-3.5-3.5C22.76 26.295 22.5 25.668 22.5 25s.26-1.295.732-1.768c.906-.906 2.629-.906 3.535 0l3.5 3.5C30.74 27.205 31 27.832 31 28.5s-.26 1.295-.732 1.768S29.167 31 28.5 31zM25 23.52c-.407 0-.793.152-1.061.42C23.656 24.223 23.5 24.6 23.5 25s.156.777.439 1.061l3.5 3.5c.567.566 1.554.566 2.121 0C29.844 29.277 30 28.9 30 28.5s-.156-.777-.439-1.061l-3.5-3.5C25.793 23.672 25.407 23.52 25 23.52zM13 25C6.383 25 1 19.617 1 13S6.383 1 13 1s12 5.383 12 12S19.617 25 13 25zM13 2C6.935 2 2 6.935 2 13s4.935 11 11 11 11-4.935 11-11S19.065 2 13 2z" class="color455a64 svgShape"></path>
                                <path fill="#34a853" d="M14 16.021c-.276 0-.5-.224-.5-.5 0-.275-.224-.5-.5-.5s-.5.225-.5.5c0 .276-.224.5-.5.5s-.5-.224-.5-.5c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5C14.5 15.797 14.276 16.021 14 16.021zM17.5 14.5c-.542 0-1-.458-1-1s.458-1 1-1 1 .458 1 1S18.042 14.5 17.5 14.5zM8.5 14.5c-.542 0-1-.458-1-1s.458-1 1-1 1 .458 1 1S9.042 14.5 8.5 14.5z" class="color455a64 svgShape"></path>
                                <g fill="#ea4335" class="color000000 svgShape">
                                    <path fill="#4285f4" d="M23.43,23.901c-0.128,0-0.256-0.049-0.354-0.146l-2.216-2.216c-0.195-0.195-0.195-0.512,0-0.707
					s0.512-0.195,0.707,0l2.216,2.216c0.195,0.195,0.195,0.512,0,0.707C23.686,23.853,23.558,23.901,23.43,23.901z" class="color263238 svgShape"></path>
                                    <path fill="#4285f4" d="M28.5 31c-.667 0-1.295-.26-1.768-.732l-3.5-3.5C22.76 26.295 22.5 25.668 22.5 25s.26-1.295.732-1.768c.906-.906 2.629-.906 3.535 0l3.5 3.5C30.74 27.205 31 27.832 31 28.5s-.26 1.295-.732 1.768S29.167 31 28.5 31zM25 23.52c-.407 0-.793.152-1.061.42C23.656 24.223 23.5 24.6 23.5 25s.156.777.439 1.061l3.5 3.5c.567.566 1.554.566 2.121 0C29.844 29.277 30 28.9 30 28.5s-.156-.777-.439-1.061l-3.5-3.5C25.793 23.672 25.407 23.52 25 23.52zM13 25C6.383 25 1 19.617 1 13S6.383 1 13 1s12 5.383 12 12S19.617 25 13 25zM13 2C6.935 2 2 6.935 2 13s4.935 11 11 11 11-4.935 11-11S19.065 2 13 2z" class="color263238 svgShape"></path>
                                    <path fill="#4285f4" d="M14 16.021c-.276 0-.5-.224-.5-.5 0-.275-.224-.5-.5-.5s-.5.225-.5.5c0 .276-.224.5-.5.5s-.5-.224-.5-.5c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5C14.5 15.797 14.276 16.021 14 16.021zM17.5 14.5c-.542 0-1-.458-1-1s.458-1 1-1 1 .458 1 1S18.042 14.5 17.5 14.5zM8.5 14.5c-.542 0-1-.458-1-1s.458-1 1-1 1 .458 1 1S9.042 14.5 8.5 14.5z" class="color263238 svgShape"></path>
                                </g>
                            </g>
                        </svg>
                        <h3 class="text-center">Desculpe, nada foi encontrado</h2>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if (have_posts()) : ?>
        <nav class="post-navigation">

            <div class="container">
                <div class="row">

                    <?php next_posts_link('<i class="bi bi-arrow-left"></i> Eventos Anteriores'); ?>
                    <?php previous_posts_link('Eventos Recentes <i class="bi bi-arrow-right"></i>'); ?>

                </div>
            </div>

        </nav>
    <?php endif; ?>

</main><!-- .site-main -->
<?php get_footer(); ?>