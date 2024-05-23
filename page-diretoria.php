<?php
// Template Name: Diretoria
?>
<?php
get_header();
$background = get_custom_meta($post->ID, "background_diretoria");
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

            <?php if (have_rows("grupos_de_diretores")) : while (have_rows("grupos_de_diretores")) : the_row(); ?>

                <section class="quadro-diretoria">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pe-4">
                                <h2><?php the_sub_field("title_diretoria_section") ?></h2>
                            </div>

                            <ul>
                                <?php if (have_rows("list_diretoria_members")) : while (have_rows("list_diretoria_members")) : the_row(); ?>
                                        <li>
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="<?php the_sub_field("foto_membro_diretoria"); ?>" alt="<?php the_sub_field("nome_membro_diretoria") ?>" />
                                                </div>
                                                <div class="card-description">
                                                    <p><?php the_sub_field("nome_membro_diretoria") ?></p>
                                                    <span><?php the_sub_field("cargo_membro_diretoria") ?></span>
                                                </div>
                                            </div>
                                        </li>
                                <?php endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </section>

            <?php endwhile;
            endif; ?>

            <?php get_footer(); ?>