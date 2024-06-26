    <?php
    // add header
    get_header();
    if (have_posts()) : while (have_posts()) : the_post();
            $background = get_custom_meta($post->ID, "background_programas");
    ?>

            <main>
                <?php if (empty($background)) : ?>
                    <section id="intro-sub">
                    <?php else : ?>
                        <section id="intro-sub" style="background: url(<?= $background['url'] ?>) no-repeat center center/cover">
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

                        <section id="programa-estruturado-data">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 pe-4">
                                        <h2>Sobre</h2>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <p><?php the_content(); ?></p>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <img src="<?= the_thumbnail('large') ?>" class="card-img-top" />
                                    </div>
                                </div>
                            </div>
                        </section>

                        <?php
                        if (get_field("show_como_funciona")) :
                        ?>

                            <section class="como-funciona">
                                <div class="container">
                                    <div class="row">
                                        <h2 class="text-center"><?php the_field("title_como_funciona"); ?></h2>
                                    </div>
                                    <div class="row justify-content-center">
                                        <?php if (have_rows("list_como_funciona")) : while (have_rows("list_como_funciona")) : the_row(); ?>
                                                <div class="col-12 col-md-6 col-lg-3 mb-4">
                                                    <div class="card">
                                                        <div class="card-icon">
                                                            <img src="<?php the_sub_field("icon_item_como_funciona"); ?>" alt="">
                                                        </div>
                                                        <div class="card-content">
                                                            <h3><?php the_sub_field("title_item_como_funciona"); ?></h3>
                                                            <p><?php the_sub_field("text_item_como_funciona"); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endwhile;
                                        endif; ?>
                                    </div>
                                </div>
                            </section>

                        <?php endif; ?>

                        <?php
                        if (get_field("show_beneficios")) :
                        ?>
                            <section id="beneficios">
                                <div class="container">
                                    <div class="row">
                                        <h2 class="text-center"><?php the_field("title_beneficios") ?></h2>
                                    </div>
                                    <div class="row justify-content-center align-items-stretch">
                                        <?php if (have_rows("list_beneficios")) : while (have_rows("list_beneficios")) : the_row(); ?>
                                                <div class="col-12 col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                                                    <div class="card">
                                                        <div class="card-img">
                                                            <img src="<?php the_sub_field("icon_item_beneficios"); ?>" alt="">
                                                        </div>
                                                        <div class="card-content">
                                                            <h3><?php the_sub_field("title_item_beneficios"); ?></h3>
                                                            <p><?php the_sub_field("text_item_beneficios"); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endwhile;
                                        endif; ?>
                                    </div>
                            </section>

                        <?php endif; ?>

                        <?php
                        if (get_field("show_time")) :
                        ?>
                            <section class="quadro-diretoria">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 pe-4">
                                            <h2><?php the_field("title_time") ?></h2>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <?php if (have_rows("list_time")) : while (have_rows("list_time")) : the_row(); ?>
                                                <div class="col-12 col-md-6 col-lg-3">
                                                    <div class="card border-0">
                                                        <div class="card-img">
                                                            <img src="<?php the_sub_field("icon_item_time"); ?>" alt="" />
                                                        </div>
                                                        <div class="card-description">
                                                            <p><?php the_sub_field("title_item_time"); ?></p>
                                                            <span><?php the_sub_field("text_item_time"); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endwhile;
                                        endif; ?>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>

                        <?php
                        if (get_field("show_program_documentos")) :
                        ?>
                            <section class="document">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 pe-4">
                                            <h2><?php the_field("title_program_documentos") ?></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <ul>
                                                <?php if (have_rows("list_program_documentos")) : while (have_rows("list_program_documentos")) : the_row(); ?>
                                                        <li>
                                                            <a href="<?php the_sub_field("file_document_program") ?>" target="_blank"><?php the_sub_field('name_document_program') ?></a>
                                                        </li>
                                                        <hr />
                                                <?php endwhile;
                                                endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>

                        <?php
                        $artigos_block = get_field("show_artigos_block_ibef_academy");
                        $artigos_titulo = get_field("title_artigos_ibef_academy");
                        if (get_field("show_resenhas_block")) :
                            $resenhas_query = new WP_Query(array(
                                'post_type' => 'resenhas',
                                'orderby' => 'publish_date',
                                'order' => 'DESC',
                                'posts_per_page' => 4
                            ));
                        ?>
                            <section id="ultimas-noticias">
                                <div class="container">
                                    <h2 class="title"><?= the_field("title_resenhas") ?></h2>

                                    <div class="row">
                                        <?php while ($resenhas_query->have_posts()) : $resenhas_query->the_post(); ?>
                                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                                <div class="card">

                                                    <div class="card-img" style="background: url(<?= get_the_thumbnail('medium') ?>) no-repeat center center/cover">

                                                    </div>


                                                    <div class="card-content">
                                                        <div class="card-data">
                                                            <span class="card-category"><?= get_custom_category($post->ID, "resenhas_category") ?></span>
                                                            <span class="card-date"><?= get_the_date("d/m/Y"); ?></span>
                                                        </div>
                                                        <h3 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                        <hr />
                                                        <div class="card-author">
                                                            <!-- <img src="./assets/img/avatar.png" alt="foto do autor" /> -->
                                                            <p>Escrito por <?php the_author(); ?></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endwhile; ?>

                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="<?= get_post_type_archive_link('resenhas'); ?>" class="btn btn-primary">Ver mais resenhas <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        <?php

                        endif;

                        if ($artigos_block) :
                            $artigos_query = new WP_Query(array(
                                'post_type' => 'artigos',
                                'orderby' => 'publish_date',
                                'order' => 'DESC',
                                'posts_per_page' => 4
                            ));
                        ?>
                            <section id="ultimas-noticias" class="home">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 texto-center">
                                            <h2><?= $artigos_titulo ?></h2>
                                        </div>

                                        <!-- Adicionar uma query com repeater para pegar as ultimas 4 noticias -->
                                        <?php while ($artigos_query->have_posts()) : $artigos_query->the_post(); ?>
                                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                                <div class="card">
                                                    <div class="card-img" style="background: url(<?php the_thumbnail('medium') ?>) no-repeat center center/cover">
                                                        <!-- <img src="" alt="foto do post" class="card-img" /> -->
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-data">
                                                            <span class="card-category"><?= get_custom_category($post->ID, "artigos_category") ?></span>
                                                            <span class="card-date"><?= get_the_date("d/m/Y"); ?></span>
                                                        </div>
                                                        <h3 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                        <hr />
                                                        <div class="card-author">
                                                            <!-- <img src="./assets/img/avatar.png" alt="foto do autor" /> -->
                                                            <p>Escrito por <?php the_author(); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="<?= get_post_type_archive_link('artigos'); ?>" class="btn btn-primary">Ver mais artigos <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>

                <?php
            endwhile;
        endif;
        // add header
        get_footer();
                ?>