    <?php
    get_header();
    if (have_posts()) : while (have_posts()) : the_post();
    ?>

            <main>
                <section id="intro-sub">
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

                <section id="post-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 post-text">
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