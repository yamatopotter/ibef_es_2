<?php
// add header
get_header();
$programas_query = new WP_Query(array(
    'post_type' => 'programas',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page' => 16,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));

?>

<main>

    <?php if (empty(get_theme_mod("background_archive_programas_estruturados"))) : ?>
        <section id="intro-sub">
        <?php else : ?>
            <section id="intro-sub" style="background: url(<?php echo get_theme_mod("background_archive_programas") ?>) no-repeat center center/cover">
            <?php endif; ?>
            <div class="container">
                <div class="col-12 text-center">
                    <h1><?php echo get_theme_mod("titulo_archive_programas_estruturados", "Programas Estruturados") ?></h1>

                    <p>
                        <?php echo get_theme_mod(
                            "subtitulo_archive_programas_estruturados"
                        ); ?>
                    </p>
                </div>
            </div>
            </section>

            <section class="program-block" id="programas">
                <div class="container">
                    <div class="text-center subtitle">
                        <h2>Conheça nossos programas</h2>
                    </div>

                    <div class="program-wrapper">
                        <?php while ($programas_query->have_posts()) : $programas_query->the_post();
                            $postId = $programas_query->post->ID ?>
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <img src="<?php the_thumbnail('large') ?>" alt="Programa <?php the_title(); ?>" />
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h2><?php the_title(); ?></h2>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">Leia Mais</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
            </section>

            <nav class="post-navigation">

                <div class="container">
                    <div class="row">

                        <?php next_posts_link('<i class="bi bi-arrow-left"></i> Informes Anteriores'); ?>
                        <?php previous_posts_link('Informes Recentes <i class="bi bi-arrow-right"></i>'); ?>

                    </div>
                </div>

            </nav>


            <?php get_footer(); ?>