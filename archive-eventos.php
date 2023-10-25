    <!-- <section id="seja-ibefiano">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Seja um Ibefiano</h1>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Recusandae non temporibus tenetur in praesentium? Hic
                        repellendus similique quaerat beatae id.
                    </p>
                </div>

                <div class="col">
                    <form action="">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="name"> Nome </label>
                                    <input type="text" name="nome" />
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="name"> Sobrenome </label>
                                    <input type="text" name="sobrenome" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <?php
    // add header
    get_header();
    $events_query = new WP_Query(array(
        'post_type' => 'eventos',
        'orderby' => '_event_date',
        'meta_key' => '_event_date',
        'order' => 'DESC',
        'posts_per_page' => get_theme_mod('quantidade_posts_eventos', 12),
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
    ));
    ?>

    <main>
        <?php if (empty(get_theme_mod("background_archive_eventos"))) : ?>
            <section id="intro-sub">
            <?php else : ?>
                <section id="intro-sub" style="background: url(<?php echo get_theme_mod("background_archive_eventos") ?>) no-repeat center center/cover">
                <?php endif; ?>
                <div class="container">
                    <div class="col-12 text-center">
                        <h1><?php echo get_theme_mod("titulo_archive_eventos", "Eventos") ?></h1>

                        <p>
                            <?php echo get_theme_mod(
                                "subtitulo_archive_eventos"
                            ); ?>
                        </p>
                    </div>
                </div>
                </section>

                <section id="eventos">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pe-4">
                                <h2>Próximos eventos</h2>
                            </div>

                            <?php while ($events_query->have_posts()) : $events_query->the_post();
                                $postId = $events_query->post->ID ?>
                                <div class="col-12 col-md-6 col-lg-3 align-items-strech">

                                    <div class="card-slider">
                                        <div class="image-content">
                                            <img src="<?= the_thumbnail('medium') ?>" class="card-img-top" />
                                        </div>
                                        <div class="card-content">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="col-12 category">
                                                    <?= get_custom_category($post->ID, "evento") ?>
                                                </div>

                                                <div class="col date"><?= conver_date_to_ptbr(get_custom_meta($post->ID, "_event_date")); ?></div>
                                            </div>
                                            <a href="<?php the_permalink(); ?>">
                                                <h2 class="titulo"><?php the_title() ?></h2>
                                            </a>
                                            <hr />
                                            <div class="d-flex flex-column">
                                                <p class="location"><?= get_custom_meta($post->ID, "_local_event") ?></p>
                                                <p class="address"><?= get_custom_meta($post->ID, "_endereco_event") ?></p>
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