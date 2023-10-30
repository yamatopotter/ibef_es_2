<?php
// add header
get_header();
$gallery_query = new WP_Query(array(
    'post_type' => 'galerias',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page' => get_theme_mod('quantidade_posts_fotos', 12),
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
));
?>

<main>
    <?php if (empty(get_theme_mod("background_archive_galerias"))) : ?>
        <section id="intro-sub">
        <?php else : ?>
            <section id="intro-sub" style="background: url(<?php echo get_theme_mod("background_archive_galerias") ?>) no-repeat center center/cover">
            <?php endif; ?>
            <div class="container">
                <div class="col-12 text-center">
                    <h1><?php echo get_theme_mod("titulo_archive_galerias", "Galeria de Fotos") ?></h1>

                    <p>
                        <?php echo get_theme_mod(
                            "subtitulo_archive_galerias"
                        ); ?>
                    </p>
                </div>
            </div>
            </section>

            <section id="galerias-wrapper">
                <div class="container">
                    <div class="row">
                        <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="card-slider">
                                    <div class="card-img" style="background: url('<?php the_thumbnail("medium"); ?>') no-repeat center center/cover;"></div>
                                    <div class="card-content">
                                        <div class="d-flex align-items-center">
                                            <span class="col date"><?= conver_date_to_ptbr($post->post_date); ?></span>
                                        </div>
                                        <h3><a href="<?= the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

            <nav class="post-navigation">

                <div class="container">
                    <div class="row">

                        <?php next_posts_link('<i class="bi bi-arrow-left"></i> Galerias Anteriores'); ?>
                        <?php previous_posts_link('Galerias Recentes <i class="bi bi-arrow-right"></i>'); ?>

                    </div>
                </div>

            </nav>


            <?php get_footer(); ?>