<?php
// Template Name: Quem somos
?>
<?php
get_header();
$background = get_custom_meta($post->ID, "background_quem_somos");
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

            <?php if (have_rows("conteudo_sobre")) : while (have_rows("conteudo_sobre")) : the_row(); ?>
                    <section class="about-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 pe-4">
                                    <h2><?php the_sub_field("title_sobre"); ?></h2>
                                    <p>
                                        <?php the_sub_field("text_sobre"); ?>
                                    </p>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <img src="<?php the_sub_field("img_sobre") ?>" alt="About us" />
                                </div>
                            </div>
                        </div>
                    </section>
            <?php endwhile;
            endif; ?>

            <?php get_footer(); ?>