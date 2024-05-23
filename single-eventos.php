    <?php
    // add header
    get_header();
    if (have_posts()) : while (have_posts()) : the_post();
            $background = get_custom_meta($post->ID, "background_eventos");
    ?>

            <main>
                <?php if (empty($background)) : ?>
                    <section id="intro-sub">
                    <?php else : ?>
                        <section id="intro-sub" style="background: url(<?= $background["url"] ?>) no-repeat center center/cover">
                        <?php endif; ?>
                        <div class="container">
                            <div class="col-12 text-center">
                                <h1><?php the_title(); ?></h1>

                                <?php if (has_excerpt()) : ?>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        </section>

                        <section id="eventos">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <img src="<?= the_thumbnail('large') ?>" class="card-img-top" />
                                    </div>
                                    
                                    <div class="col-12 col-md-6">
                                        <p><?php the_content(); ?></p>
                                        <p>
                                            Quando: <?= get_custom_meta($post->ID, "_event_date") == '' ? "A definir" : conver_date_to_ptbr(get_custom_meta($post->ID, "_event_date")); ?>
                                        </p>
                                        <p>
                                            Local: <?= get_custom_meta($post->ID, "_local_event") == '' ? "A definir" : get_custom_meta($post->ID, "_local_event") ?>
                                        </p>
                                        <a href="#" class="btn btn-primary">Quero me inscrever</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                <?php
            endwhile;
        endif;
        // add header
        get_footer();
                ?>