<?php
// add header
get_header();
$carta_query = new WP_Query(array(
    'post_type' => 'carta',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));

?>

<main>

    <?php if (empty($background)) : ?>
        <section id="intro-sub">
        <?php else : ?>
            <section id="intro-sub" style="background: url(<?= $background["url"] ?>) no-repeat center center/cover">
            <?php endif; ?>
            <div class="container">
                <div class="col-12 text-center">
                    <h1><?= get_theme_mod('titulo_archive_carta', 'Cartas da Diretoria'); ?></h1>

                    <p>
                        <?= get_theme_mod('subtitulo_archive_carta'); ?>
                    </p>
                </div>
            </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <?php while ($carta_query->have_posts()) : $carta_query->the_post();
                                    $postId = $carta_query->post->ID; ?>
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
                            <?php next_posts_link('← Cartas Anteriores'); ?>

                            <?php previous_posts_link('Cartas Recentes →'); ?>
                        </div>
                    </div>
                </div>

            </nav>


            <?php get_footer(); ?>