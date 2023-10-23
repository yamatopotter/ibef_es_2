<?php
get_header();
$today = date('Y-m-d');

$events_query = new WP_Query(array(
  'post_type' => 'eventos',
  'orderby' => '_event_date',
  'meta_key' => '_event_date',
  'meta_query' => array(
    'key' => '_event_date',
    'value' => $today,
    'compare' => '>='
  ),
  'order' => 'ASC',
  'posts_per_page' => 3
));
?>
<main>
  <section id="intro">
    <div class="container">
      <div class="col-12 col-lg-7">
        <h1>
          <?= get_theme_mod("titulo_intro"); ?>
        </h1>
        <p>
          <?= get_theme_mod("texto_intro"); ?>
        </p>
        <?php if (get_theme_mod("exibir_botao_intro")) : ?>
          <a href="<?= get_theme_mod("link_botao_intro") ?>" class="btn btn-primary"><?= get_theme_mod("texto_botao_intro"); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="nossos-programas">
    <div class="container">
      <h2 class="destaque-sm"><?= get_theme_mod("titulo_nossos_programas", "Nossos Programas") ?></h2>
      <!-- Uma query para pesquisar todos os programas e colocar as imagens em destaque dos titulos dos programas? -->
      <ul>
        <li><img src="./assets/img/logoipsum.png" /></li>
        <li><img src="./assets/img/logoipsum.png" /></li>
        <li><img src="./assets/img/logoipsum.png" /></li>
        <li><img src="./assets/img/logoipsum.png" /></li>
        <li><img src="./assets/img/logoipsum.png" /></li>
        <li><img src="./assets/img/logoipsum.png" /></li>
        <li><img src="./assets/img/logoipsum.png" /></li>
      </ul>
    </div>
  </section>

  <section id="sobre">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 pe-4">
          <h2><?= get_theme_mod("titulo_sobre_nos", "Sobre o IBEF"); ?></h2>
          <p>
            <?= get_theme_mod("texto_sobre_nos"); ?>
          </p>
          <?php if (get_theme_mod("exibir_botao_sobre")) : ?>
            <a href="<?= get_theme_mod("pagina_sobre_nos") ?>" class="btn btn-primary mt-4"><?= get_theme_mod("texto_botao_sobre"); ?></a>
          <?php endif; ?>
        </div>

        <div class="col-12 col-lg-6">
          <?php if (!empty(get_theme_mod("img_sobre_nos"))) : ?>
            <img src="<?= get_theme_mod("img_sobre_nos") ?>" alt="About us" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="porque-ser-ibefiano">
    <div class="container">
      <h2><?= get_theme_mod("titulo_porque_ser_ibefiano", "Porque ser um IBEFiano") ?></h2>

      <ul>
        <?php
        $repeater = get_theme_mod('customizer_repeater_porque_ser_ibefiano', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
        /*This returns a json so we have to decode it*/
        $repeater_decoded = json_decode($repeater);
        foreach ($repeater_decoded as $repeater_item) : ?>

          <li>
            <div>
              <span class="img-ibefiano" style="background: url(<?= $repeater_item->image_url; ?>) no-repeat center center/cover"></span>
              <h3><?= $repeater_item->title; ?></h3>
              <p>
                <?= $repeater_item->text; ?>
              </p>
            </div>
          </li>

        <?php
        endforeach;
        ?>

      </ul>

      <?php if (!empty(get_theme_mod("link_btn_porque_ser_ibefiano"))) : ?>
        <a href="<?= get_theme_mod("link_btn_porque_ser_ibefiano") ?>" class="btn btn-primary"><?= get_theme_mod("texto_btn_porque_ser_ibefiano") ?></a>
      <?php endif; ?>
    </div>
  </section>

  <section id="proximos-eventos">
    <div class="container">
      <div class="d-flex justify-content-center mt-4">
        <h2><?= get_theme_mod("titulo_proximos_eventos", "Próximos eventos") ?></h2>
      </div>

      <div class="swiper slider-eventos slider-container">
        <div class="slider-content">
          <div class="card-slider-wrapper swiper-wrapper">

            <?php
            $events_reverse = array_reverse($events_query->posts);
            $events_query->posts = $events_reverse;
            while ($events_query->have_posts()) : $events_query->the_post();
              $postId = $events_query->post->ID ?>
              <div class="col-12 col-lg-4 d-flex align-items-strech">

                <article class="card">
                  <div class="calendar">
                    <?php
                    $date = date("d-m-Y");
                    $dateEvent = returnFullDateEvent($postId);
                    if (strtotime($date) > strtotime($dateEvent)) :
                    ?>
                      <span class="day past-event">
                      <?php else : ?>
                        <span class="day">
                        <?php endif; ?>
                        <?php echo returnDateEvent($postId) ?>
                        </span>
                        <span class="month"><?php echo returnMonthEvent($postId) ?></span>
                  </div>

                  <?php if (get_the_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" target="_self">
                      <img class="news-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                    </a>
                  <?php endif ?>
                  <h1><?php the_title(); ?></h1>
                  <a href="<?php the_permalink(); ?>" class="btn link">Ver Mais <i class="bi bi-arrow-right"></i></a>
                </article>

              </div>
            <?php endwhile; ?>

            <!-- Montar query com os próximos eventos -->


            <div class="card-slider swiper-slide">
              <div class="image-content">
                <img src="./assets/img/slider.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-content">
                <div class="d-flex align-items-center mb-2">
                  <div class="col-12 category">Categoria</div>

                  <div class="col date">22 de junho de 2023</div>
                </div>
                <h2 class="titulo">Card titulo</h2>
                <hr />
                <div class="d-flex flex-column">
                  <p class="location">Location</p>
                  <p class="address">Location</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>

      <?php if (!empty(get_theme_mod("link_btn_proximos_eventos"))) : ?>
        <div class="d-flex justify-content-center mt-4">
          <a href="<?= get_theme_mod("link_btn_proximos_eventos"); ?>" class="btn btn-primary"><?= get_theme_mod("texto_btn_proximos_eventos", "Participe"); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section id="nossos-ibefianos">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-2">
          <h2><?= get_theme_mod("titulo_nossos_ibefianos", "Nossos Ibefianos"); ?></h2>
        </div>

        <!-- Montar um repeater para adicionar esses campos de repetição -->
        <div class="col-12 col-lg-10">
          <div class="swiper slider-eventos slider-container">
            <div class="slider-content">
              <div class="card-slider-wrapper swiper-wrapper">
                <div class="card-slider swiper-slide">
                  <div class="card-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing
                      elit. Sapiente consectetur cum nostrum doloribus, quas
                      possimus corporis inventore eligendi? Perferendis
                      molestiae placeat numquam aspernatur amet. Magni nam
                      reprehenderit voluptates porro architecto!
                    </p>
                  </div>
                </div>

                <div class="card-slider swiper-slide">
                  <div class="card-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing
                      elit. Sapiente consectetur cum nostrum doloribus, quas
                      possimus corporis inventore eligendi? Perferendis
                      molestiae placeat numquam aspernatur amet. Magni nam
                      reprehenderit voluptates porro architecto!
                    </p>
                  </div>
                </div>

                <div class="card-slider swiper-slide">
                  <div class="card-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing
                      elit. Sapiente consectetur cum nostrum doloribus, quas
                      possimus corporis inventore eligendi? Perferendis
                      molestiae placeat numquam aspernatur amet. Magni nam
                      reprehenderit voluptates porro architecto!
                    </p>
                  </div>
                </div>

                <div class="card-slider swiper-slide">
                  <div class="card-content">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing
                      elit. Sapiente consectetur cum nostrum doloribus, quas
                      possimus corporis inventore eligendi? Perferendis
                      molestiae placeat numquam aspernatur amet. Magni nam
                      reprehenderit voluptates porro architecto!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

      <?php if (!empty(get_theme_mod("link_btn_nossos_ibefianos"))) : ?>
        <div class="d-flex justify-content-center mt-4">
          <a href="<?= get_theme_mod("link_btn_nossos_ibefianos"); ?>" class="btn btn-primary"><?= get_theme_mod("texto_btn_nossos_ibefianos"); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section id="ultimas-noticias">
    <div class="container">
      <div class="row">
        <div class="col-12 texto-center">
          <h2><?= get_theme_mod("titulo_ultimas_noticias", "Últimas notícias"); ?></h2>
        </div>

        <!-- Adicionar uma query com repeater para pegar as ultimas 4 noticias -->
        <div class="col-12 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-img">
              <img src="./assets/img/slider.jpg" alt="foto do post" class="card-img" />
            </div>
            <div class="card-content">
              <div class="card-data">
                <span class="card-category">topico</span>
                <span class="card-date">25, maio de 2023</span>
              </div>
              <h3 class="titulo">Titulo da publicação</h3>
              <hr />
              <div class="card-author">
                <img src="./assets/img/avatar.png" alt="foto do autor" />
                <p>nome do autor</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-img">
              <img src="./assets/img/slider.jpg" alt="foto do post" class="card-img" />
            </div>
            <div class="card-content">
              <div class="card-data">
                <span class="card-category">topico</span>
                <span class="card-date">25, maio de 2023</span>
              </div>
              <h3>Titulo da publicação</h3>
              <hr />
              <div class="card-author">
                <img src="./assets/img/avatar.png" alt="foto do autor" />
                <p>nome do autor</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-img">
              <img src="./assets/img/slider.jpg" alt="foto do post" class="card-img" />
            </div>
            <div class="card-content">
              <div class="card-data">
                <span class="card-category">topico</span>
                <span class="card-date">25, maio de 2023</span>
              </div>
              <h3>Titulo da publicação</h3>
              <hr />
              <div class="card-author">
                <img src="./assets/img/avatar.png" alt="foto do autor" />
                <p>nome do autor</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-img">
              <img src="./assets/img/slider.jpg" alt="foto do post" class="card-img" />
            </div>
            <div class="card-content">
              <div class="card-data">
                <span class="card-category">topico</span>
                <span class="card-date">25, maio de 2023</span>
              </div>
              <h3>Titulo da publicação</h3>
              <hr />
              <div class="card-author">
                <img src="./assets/img/avatar.png" alt="foto do autor" />
                <p>nome do autor</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="podcast">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <h2><?= get_theme_mod("titulo_podcast", "Escute nosso podcast"); ?></h2>

          <?php if (!empty(get_theme_mod("link_btn_podcast"))) : ?>
            <a href="<?= get_theme_mod("link_btn_podcast"); ?>" class="btn btn-primary"><?= get_theme_mod("texto_btn_podcast", "Todos os podcasts "); ?></a>
          <?php endif; ?>
        </div>

        <div class="col-12 col-lg-9">
          <?= get_theme_mod("embedded_podcast"); ?>
        </div>
      </div>
    </div>
  </section>

  <section id="mantenedores">
    <div class="container">
      <div class="row">
        <div class="col-12 texto-center">
          <h2><?= get_theme_mod("titulo_mantenedores", "Mantenedores"); ?></h2>
          <p>
            <?= get_theme_mod("texto_mantenedores"); ?>
          </p>
        </div>

        <!-- Adicionar uma query e um loop com os mantenedores registrados -->
        <div class="col-12">
          <ul class="list-mantenedores">
            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>
            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>

            <li>
              <img src="./assets/img/icon-balloon.png" alt="logo do mantenedor" />
            </li>
          </ul>
        </div>

        <?php if (!empty(get_theme_mod("link_btn_mantenedor"))) : ?>
          <div class="col-12 d-flex justify-content-center">
            <a href="<?= get_theme_mod("link_btn_mantenedor") ?>" class="btn btn-primary"><?= get_theme_mod("texto_btn_mantenedor", "Seja um mantenedor") ?></a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 texto-center">
          <h2>Fique ligado no que acontece no IBEF</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe
            molestiae pariatur, a voluptas impedit eligendi ipsam labore
            deleniti quo aliquid ullam unde sequi fugit vel ducimus?
            Repellendus sit aspernatur perspiciatis.
          </p>
        </div>

        <div class="col-12 col-lg-6 mt-4">
          <form action="">
            <div class="input-group mb-3">
              <input type="texto" class="form-control" placeholder="" aria-label="Example texto with button addon" aria-describedby="button-addon1" placeholder="Seu melhor email" />
              <button class="btn btn-primary" type="button" id="button-addon1">
                Button
              </button>
            </div>
            <p class="texto-center">Lorem ipsum dolor sit amet.</p>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>