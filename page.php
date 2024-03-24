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

                        <section id="default-page">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>

                                <?php if (have_rows("gallery_repeater")) : ?>
                                    <section id="galerias-wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <h2>Galeria de fotos</h2>
                                            </div>
                                            <?php while (have_rows("gallery_repeater")) :
                                                the_row();
                                                $gallery_post = get_sub_field('gallery'); ?>
                                                <div class="col-12 col-md-4 col-lg-3">
                                                    <div class="card-slider">
                                                        <div class="card-img" style="background: url('<?= get_the_post_thumbnail_url($gallery_post); ?>') no-repeat center center/cover;"></div>
                                                        <div class="card-content">
                                                            <div class="d-flex align-items-center">
                                                                <span class="col date"><?= conver_date_to_ptbr($gallery_post->post_date); ?></span>
                                                            </div>
                                                            <h3><a href="<?= the_permalink($gallery_post->ID); ?>"><?php the_title($gallery_post->post_title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </section>
                                <?php endif; ?>
                            </div>
                        </section>
            </main>

    <?php
        endwhile;
    endif; ?>

    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'), {
            plugins: [lgThumbnail],
        });
    </script>

    <?php
    // add header
    get_footer();
    ?>