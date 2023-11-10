<?php
// add header
get_header();
if (have_posts()) : while (have_posts()) : the_post();
        $background = get_custom_meta($post->ID, "background_galerias");
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

                        </div>
                    </div>
                    </section>

                    <section class="gallery-content">

                        <div class="container">

                            <?php the_content(); ?>

                        </div>

                    </section>

            <?php endwhile;
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