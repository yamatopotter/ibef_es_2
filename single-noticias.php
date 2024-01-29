    <?php
    // add header
    get_header();
    if (have_posts()) : while (have_posts()) : the_post();
            // $background = get_custom_meta($post->ID, "background_programas");
    ?>

            <main>
                <?php if (empty($background)) : ?>
                    <section id="intro-sub">
                    <?php else : ?>
                        <section id="intro-sub" style="background: url(<?= $background ?>) no-repeat center center/cover">
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

                        <section id="programa-estruturado-data">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </section>
            </main>

    <?php
        endwhile;
    endif;
    // add header
    get_footer();
    ?>