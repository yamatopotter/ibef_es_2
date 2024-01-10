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
  'posts_per_page' => 9
));

$news_query = new WP_Query(array(
  'post_type' => 'noticias',
  'orderby' => 'publish_date',
  'order' => 'DESC',
  'posts_per_page' => 4
));

$programs_query = new WP_Query(array(
  'post_type' => 'programas',
  'orderby' => 'publish_date',
  'order' => 'DESC',
  'posts_per_page' => 20
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
        <!-- <?php while ($programs_query->have_posts()) : $programs_query->the_post(); ?>
          <li><img src="<?php the_thumbnail("thumbnail"); ?>" /></li>
        <?php endwhile; ?> -->
        <?php
        $repeater = get_theme_mod('customizer_repeater_programas', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
        /*This returns a json so we have to decode it*/
        $repeater_decoded = json_decode($repeater);
        foreach ($repeater_decoded as $repeater_item) : ?>

          <li>
            <a href="<?= $repeater_item->link; ?>" target="_blank"><img src="<?= $repeater_item->image_url; ?>" alt="logo do programa" /></a>
          </li>

        <?php
        endforeach;
        ?>
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
      <div class="row">
        <h2><?= get_theme_mod("titulo_porque_ser_ibefiano", "Porque ser um IBEFiano") ?></h2>

        <?php
        $repeater = get_theme_mod('customizer_repeater_porque_ser_ibefiano', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
        /*This returns a json so we have to decode it*/
        $repeater_decoded = json_decode($repeater);
        foreach ($repeater_decoded as $repeater_item) : ?>

          <div class="col-12 col-md-6 col-lg-3">
            <div>
              <span class="img-ibefiano" style="background: url(<?= $repeater_item->image_url; ?>) no-repeat center center/cover"></span>
              <h3><?= $repeater_item->title; ?></h3>
              <p>
                <?= $repeater_item->text; ?>
              </p>
            </div>
          </div>

        <?php
        endforeach;
        ?>
      </div>



      <?php if (!empty(get_theme_mod("exibir_botao_porque_ser_ibefiano"))) : ?>
        <a href="<?= get_theme_mod("link_botao_porque_ser_ibefiano") ?>" class="btn btn-primary mt-4"><?= get_theme_mod("texto_botao_porque_ser_ibefiano") ?></a>
      <?php endif; ?>
    </div>
  </section>

  <section id="proximos-eventos">
    <div class="container">
      <div class="d-flex justify-content-center mt-4">
        <h2><?= get_theme_mod("titulo_proximos_eventos", "Próximos eventos") ?></h2>
      </div>

      <div class="swiper slider-eventos slider-container">
        <div class="slider-content slider-proximos-eventos">
          <div class="card-slider-wrapper swiper-wrapper">
            <?php
            $arrayLength = count($events_query->posts);
            if ($arrayLength > 0) :
              $events_reverse = array_reverse($events_query->posts);
              $events_query->posts = $events_reverse;
              while ($events_query->have_posts()) : $events_query->the_post() ?>
                <div class="card card-slider swiper-slide shadow-sm">
                  <div class="image-content">
                    <img src="<?= the_thumbnail('medium') ?>" class="card-img-top" />
                  </div>
                  <div class="card-content">
                    <div class="d-flex flex-md-column flex-lg-row gap-md-2 justify-content-between align-items-center mb-2">
                      <div class="category">
                        <?= get_custom_category($post->ID, "eventos_category") ?>
                      </div>

                      <div class="date"><?= conver_date_to_ptbr(get_custom_meta($post->ID, "_event_date")); ?></div>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                      <h2 class="titulo"><?php the_title() ?></h2>
                    </a>
                    <hr />
                    <div class="d-flex flex-column">
                      <p class="location"><?= get_custom_meta($post->ID, "_local_event") ?></p>
                      <p class="address"><?= get_custom_meta($post->ID, "_endereco_event") ?></p>
                    </div>
                  </div>
                </div>
              <?php endwhile;
            else : ?>
              <p class="text-center">Não há eventos próximos</p>
            <?php endif; ?>
          </div>
        </div>
        <div class="swiper-button-next next-proximos-eventos swiper-navBtn"></div>
        <div class="swiper-button-prev prev-proximos-eventos swiper-navBtn"></div>
        <div class="swiper-pagination pagination-proximos-eventos"></div>
      </div>

      <?php if (!empty(get_theme_mod("exibir_botao_proximos_eventos"))) : ?>
        <div class="d-flex justify-content-center mt-4">
          <a href="<?= get_theme_mod("link_botao_proximos_eventos"); ?>" class="btn btn-primary"><?= get_theme_mod("texto_botao_proximos_eventos", "Participe"); ?></a>
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

        <div class="col-12 col-lg-10">
          <div class="swiper slider-eventos slider-container">
            <div class="slider-content slider-nossos-ibefianos">
              <div class="card-slider-wrapper swiper-wrapper">
                <?php
                $repeater = get_theme_mod('customizer_repeater_nossos_ibefianos', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
                /*This returns a json so we have to decode it*/
                $repeater_decoded = json_decode($repeater);
                foreach ($repeater_decoded as $repeater_item) : ?>

                  <div class="card-slider swiper-slide">
                    <div class="card-content">
                      <p><strong><?= $repeater_item->title; ?></strong></p>
                      <p>
                        <?= $repeater_item->text; ?>
                      </p>
                    </div>
                  </div>

                <?php
                endforeach;
                ?>
              </div>
            </div>
            <div class="swiper-button-next next-nossos-ibefianos swiper-navBtn"></div>
            <div class="swiper-button-prev prev-nossos-ibefianos swiper-navBtn"></div>
            <div class="swiper-pagination pagination-nossos-ibefianos"></div>
          </div>
        </div>

        <?php if (!empty(get_theme_mod("exibir_botao_nossos_ibefianos"))) : ?>
          <div class="d-flex justify-content-center mt-4">
            <a href="<?= get_theme_mod("link_botao_nossos_ibefianos"); ?>" class="btn btn-primary-dark"><?= get_theme_mod("texto_botao_nossos_ibefianos", "Participe"); ?></a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="ultimas-noticias">
    <div class="container">
      <div class="row">
        <div class="col-12 texto-center">
          <h2><?= get_theme_mod("titulo_ultimas_noticias", "Últimas notícias"); ?></h2>
        </div>

        <!-- Adicionar uma query com repeater para pegar as ultimas 4 noticias -->
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card">
              <div class="card-img" style="background: url(<?php the_thumbnail('medium') ?>) no-repeat center center/cover">
                <!-- <img src="" alt="foto do post" class="card-img" /> -->
              </div>
              <div class="card-content">
                <div class="card-data">
                  <span class="card-category"><?= get_custom_category($post->ID, "category") ?></span>
                  <span class="card-date"><?= the_date("d/m/Y"); ?></span>
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
      </div>
    </div>
  </section>

  <section id="podcast">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <h2><?= get_theme_mod("titulo_podcast", "Escute nosso podcast"); ?></h2>

          <?php if (get_theme_mod("exibir_botao_podcast")) : ?>
            <a href="<?= get_theme_mod("link_botao_podcast"); ?>" class="btn btn-primary"><?= get_theme_mod("texto_botao_podcast", "Todos os podcasts "); ?></a>
          <?php endif; ?>
        </div>

        <div class="col-12 col-lg-9">
          <?= get_theme_mod("iframe_podcast"); ?>
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
            <?php
            $repeater = get_theme_mod('customizer_repeater_mantenedores', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
            /*This returns a json so we have to decode it*/
            $repeater_decoded = json_decode($repeater);
            foreach ($repeater_decoded as $repeater_item) : ?>

              <li>
                <img src="<?= $repeater_item->image_url; ?>" alt="logo do mantenedor" />
              </li>

            <?php
            endforeach;
            ?>
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

  <!-- <section id="newsletter">
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
  </section> -->
</main>
<?php get_footer(); ?>