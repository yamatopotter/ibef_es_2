<?php
// Template Name: Diretoria
?>
<?php
get_header();
$background = get_custom_meta($post->ID, "background_diretoria");
?>

<main>
    <section id="intro-sub">
        <div class="container">
            <div class="col-12 text-center">
                <h1><?php the_title(); ?></h1>

                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="quadro-diretoria">
        <div class="container">
            <div class="row">
                <div class="col-12 pe-4">
                    <h2>Diretoria 2023</h2>
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

    <section class="quadro-diretoria">
        <div class="container">
            <div class="row">
                <div class="col-12 pe-4">
                    <h2>Ex-Diretoria</h2>
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

    <?php get_footer(); ?>