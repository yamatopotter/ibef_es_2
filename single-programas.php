    <?php
    // add header
    get_header();
    if (have_posts()) : while (have_posts()) : the_post();
            $background = get_custom_meta($post->ID, "background");
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

                        <!-- Criar campo de repetição - Verificar se há dados para ser exibido -->

                        <section class="como-funciona">
                            <h2 class="text-center">Como funciona?</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="card">
                                            <div class="card-icon">
                                                <img src="./assets/img/icon-clock.png" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h3>Just a title</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo aliquid quae deserunt magni beatae, corrupti dolor rerum quis velit quas!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Criar campo de repetição - Verificar se há dados para ser exibido -->
                        <section id="beneficios">
                            <h2 class="text-center"><?php the_field("extra_title") ?></h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="./assets/img/slider.jpg" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h3>Just a title</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo aliquid quae deserunt magni beatae, corrupti dolor rerum quis velit quas!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!-- Criar campo de repetição - Verificar se há dados para ser exibido -->
                        <section class="quadro-diretoria">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 pe-4">
                                        <h2>Nosso time: IBEF-ES University</h2>
                                    </div>

                                    <ul>
                                        <li>
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="./assets/img/pessoa-1.jpeg" alt="" />
                                                </div>
                                                <div class="card-description">
                                                    <p>Nome da pessoa</p>
                                                    <span>Cargo da pessoa</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                <?php
            endwhile;
        endif;
        // add header
        get_footer();
                ?>