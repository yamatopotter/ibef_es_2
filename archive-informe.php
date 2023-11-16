<?php
// add header
get_header();
$informe_query = new WP_Query(array(
    'post_type' => 'informe',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));

?>

<main>

    <?php if (empty(get_theme_mod("background_archive_informes"))) : ?>
        <section id="intro-sub">
        <?php else : ?>
            <section id="intro-sub" style="background: url(<?= get_theme_mod("background_archive_informes") ?>) no-repeat center center/cover">
            <?php endif; ?>
            <div class="container">
                <div class="col-12 text-center">
                    <h1><?= get_theme_mod('titulo_archive_informe', 'Informes do IBEF-ES'); ?></h1>

                    <p>
                        <?= get_theme_mod('subtitulo_archive_informe'); ?>
                    </p>
                </div>
            </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <?php while ($informe_query->have_posts()) : $informe_query->the_post();
                                    $postId = $informe_query->post->ID; ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <span><?= conver_date_to_ptbr($post->post_date); ?></span>
                                    </li>
                                    <hr />
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <nav class="post-navigation">

                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <?php next_posts_link('← Informes Anteriores'); ?>

                            <?php previous_posts_link('Informes Recentes →'); ?>
                        </div>
                    </div>
                </div>

            </nav>


            <?php get_footer(); ?>