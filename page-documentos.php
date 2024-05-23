<?php
// Template Name: Documentos
?>

<?php
get_header();

$carta_query = new WP_Query(array(
    'post_type' => 'carta',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page' => 10,
));

$informe_query = new WP_Query(array(
    'post_type' => 'informe',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page' => 10,
));

$relatorio_query = new WP_Query(array(
    'post_type' => 'relatorio',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page' => 10,
));

$background = get_custom_meta($post->ID, "background_documentos");
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

                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Estatuto</h2>
                        </div>

                        <div class="col-12">
                            <ul>
                                <?php if (have_rows("estatuto")) : while (have_rows("estatuto")) : the_row(); ?>
                                        <li>
                                            <a href="<?php the_sub_field("file_url") ?>" target="_blank"><?php the_sub_field("file_name") ?></a> <span><?php the_sub_field("file_version") ?></span>
                                        </li>
                                        <hr />
                                <?php endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Manual do associado</h2>
                        </div>

                        <div class="col-12">
                            <ul>
                                <?php if (have_rows("manual")) : while (have_rows("manual")) : the_row(); ?>
                                        <li>
                                            <a href="<?php the_sub_field("file_url"); ?>" target="_blank"><?php the_sub_field("file_name"); ?></a> <span><?php the_sub_field("file_version") ?></span>
                                        </li>
                                        <hr />
                                <?php endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Carta do presidente</h2>
                        </div>

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

                        <?php if ($carta_query->post_count > 9) : ?>

                            <div class="col-12 d-flex align-items-center justify-content-center p-2">
                                <a href="/carta" class="btn btn-primary">Ver todas as cartas</a>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Relatório de gestão</h2>
                        </div>

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

                        <?php if ($relatorio_query->post_count > 9) : ?>

                            <div class="col-12 d-flex align-items-center justify-content-center p-2">
                                <a href="/relatorio" class="btn btn-primary">Ver todos os relatórios</a>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="document">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Informações Financeiras</h2>
                        </div>

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

                        <?php if ($informe_query->post_count > 9) : ?>

                            <div class="col-12 d-flex align-items-center justify-content-center p-2">
                                <a href="/informe" class="btn btn-primary">Ver todos os informes</a>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>