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
                        <section id="intro-sub" style="background: url(<?= $background ?>) no-repeat center center/cover">
                        <?php endif; ?>
                        <div class="container">
                            <div class="col-12 text-center">
                                <h1><?php the_title(); ?></h1>

                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
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
                        $status = get_field("show_como_funciona");
                        if ($status) :
                        ?>

                            <section class="como-funciona">
                                <div class="container">
                                    <div class="row">
                                        <h2 class="text-center"><?php the_field("title_como_funciona"); ?></h2>
                                    </div>
                                    <div class="row justify-content-center">
                                        <?php if (have_rows("list_como_funciona")) : while (have_rows("list_como_funciona")) : the_row(); ?>
                                                <div class="col-12 col-md-6 col-lg-3">
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
                        $status = get_field("show_beneficios");
                        if ($status) :
                        ?>
                            <section id="beneficios">
                                <div class="container">
                                    <div class="row">
                                        <h2 class="text-center"><?php the_field("title_beneficios") ?></h2>
                                    </div>
                                    <div class="row justify-content-center">
                                        <?php if (have_rows("list_beneficios")) : while (have_rows("list_beneficios")) : the_row(); ?>
                                                <div class="col-12 col-md-6 col-lg-3">
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
                        $status = get_field("show_time");
                        if ($status) :
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
            endwhile;
        endif;
        // add header
        get_footer();
                ?>