    <?php
    // add header
    get_header();
    $midia_query = new WP_Query(array(
        'post_type' => 'midia',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => get_theme_mod('quantidade_posts_midia', 12),
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
                        <h1><?php echo get_theme_mod('titulo_archive_midia', 'IBEF-ES na Mídia'); ?></h1>

                        <p>
                            <?php echo get_theme_mod("subtitulo_archive_midia"); ?>
                        </p>
                    </div>
                </div>
                </section>

                <section id="midia">
                    <div class="container">
                        <div class="row">
                            <?php while ($midia_query->have_posts()) : $midia_query->the_post(); ?>
                                <div class="col-12 col-md-6 col-lg-3 mb-4 align-items-strech">
                                    <div class="card">

                                        <?php if (get_the_thumbnail()) : ?>
                                            <div class="card-img" style="background: url(<?php the_thumbnail('medium') ?>) no-repeat center center/cover">

                                            </div>
                                        <?php endif ?>

                                        <div class="card-content">
                                            <div class="card-data">
                                                <span class="card-date"><?= get_the_date("d/m/Y"); ?></span>
                                            </div>
                                            <h3 class="titulo"><a href="<?= returnLinkFile($post->ID); ?>" target="_blank"><?php the_title(); ?></a></h3>
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