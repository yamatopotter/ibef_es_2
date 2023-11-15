<?php
// add header
get_header();
$relatorio_query = new WP_Query(array(
    'post_type' => 'relatorio',
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
                    <h1><?= get_theme_mod('titulo_archive_relatorio', 'Relatórios de Gestão'); ?></h1>

                    <p>
                        <?= get_theme_mod('subtitulo_archive_relatorio'); ?>
                    </p>
                </div>
            </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <?php while ($relatorio_query->have_posts()) : $relatorio_query->the_post();
                                    $postId = $relatorio_query->post->ID; ?>
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
                            <?php next_posts_link('← Relatórios Anteriores'); ?>

                            <?php previous_posts_link('Relatórios Recentes →'); ?>
                        </div>
                    </div>
                </div>

            </nav>


            <?php get_footer(); ?>

            <main>

                <section class="post-title">

                    <div class="container">

                        <h1 class="title"><?= get_theme_mod('titulo_archive_relatorio', 'Relatórios de Gestão'); ?></h1>

                    </div>

                </section>

                <section class="event-list informe">

                    <div class="container">

                        <div class="row event-card-list calendar-list">

                            <?php while ($relatorio_query->have_posts()) : $relatorio_query->the_post();
                                $postId = $relatorio_query->post->ID; ?>

                                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-strech">

                                    <article>
                                        <i class="bi bi-journal"></i>
                                        <h1><a href="<?php echo returnRelatorioFile($postId); ?>" target="_blank"><?php the_title(); ?></a></h1>
                                        <a href="<?php echo returnRelatorioFile($postId); ?>" target="_blank" class="btn link">Veja o relatório <i class="bi bi-arrow-right"></i></a>
                                    </article>

                                </div>

                            <?php endwhile; ?>
                        </div>

                </section>

                <nav class="post-navigation">

                    <div class="container">
                        <div class="row">

                            <?php next_posts_link('<i class="bi bi-arrow-left"></i> Relatórios Anteriores'); ?>
                            <?php previous_posts_link('Relatórios Recentes <i class="bi bi-arrow-right"></i>'); ?>

                        </div>
                    </div>

                </nav>


                <?php get_footer(); ?>