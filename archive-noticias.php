    <?php
    // add header
    get_header();
    $news_query = new WP_Query(array(
        'post_type' => 'noticias',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
    ));
    ?>

    <main>
        <?php if (empty(get_theme_mod("background_archive_noticias"))) : ?>
            <section id="intro-sub">
            <?php else : ?>
                <section id="intro-sub" style="background: url(<?php echo get_theme_mod("background_archive_noticias") ?>) no-repeat center center/cover">
                <?php endif; ?>
                <div class="container">
                    <div class="col-12 text-center">
                        <h1><?php echo get_theme_mod("titulo_archive_noticias", "Notícias") ?></h1>

                        <p>
                            <?php echo get_theme_mod("subtitulo_archive_noticias"); ?>
                        </p>
                    </div>
                </div>
                </section>

                <section id="ultimas-noticias">
                    <div class="container">
                        <div class="row">
                            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                                <div class="col-12 col-md-6 col-lg-3 mb-4 align-items-strech">
                                    <div class="card">
                                        <div class="card-img" style="background: url(<?php the_thumbnail('medium') ?>) no-repeat center center/cover">
                                        </div>

                                        <div class="card-content">
                                            <div class="card-data">
                                                <span class="card-category"><?= get_custom_category($post->ID, "category") ?></span>
                                                <span class="card-date"><?= the_date("d/m/Y"); ?></span>
                                            </div>
                                            <h3 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <hr />
                                            <div class="card-author">
                                                <!-- <img src="./assets/img/avatar.png" alt="foto do autor" /> -->
                                                <p>Escrito por <?php the_author(); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>
                </section>

                <nav class="post-navigation">

                    <div class="container">
                        <div class="row">

                            <?php next_posts_link('<i class="bi bi-arrow-left"></i> Eventos Anteriores'); ?>
                            <?php previous_posts_link('Eventos Recentes <i class="bi bi-arrow-right"></i>'); ?>

                        </div>
                    </div>

                </nav>


                <?php get_footer(); ?>