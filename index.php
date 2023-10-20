<?php get_header(); ?>
<main>
  <section id="intro">
    <div class="container">
      <div class="col-12 col-lg-7">
        <h1>
          <?= get_theme_mod("title_intro"); ?>
        </h1>
        <p>
          <?= get_theme_mod("text_intro"); ?>
        </p>
        <?php if (!empty(get_theme_mod("link_btn_intro"))) : ?>
          <a href="<?= get_theme_mod("link_btn_intro") ?>" class="btn btn-primary"><?= get_theme_mod("text_btn_intro"); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="nossos-programas">
    <div class="container">
      <h2 class="destaque-sm"><?= get_theme_mod("title_nossos_programas", "Nossos Programas") ?></h2>
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
          <h2><?= get_theme_mod("title_sobre_ibef", "Sobre o IBEF"); ?></h2>
          <p>
            <?= get_theme_mod("text_sobre_ibef"); ?>
          </p>
          <?php if (!empty(get_theme_mod("link_btn_sobre"))) : ?>
            <a href="<?= get_theme_mod("link_btn_sobre") ?>" class="btn btn-primary mt-4"><?= get_theme_mod("text_btn_intro"); ?></a>
          <?php endif; ?>
        </div>

        <div class="col-12 col-lg-6">
          <?php if (!empty(get_theme_mod("img_sobre"))) : ?>
            <img src="<?= get_theme_mod("img_sobre") ?>" alt="About us" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="porque-ser-ibefiano">
    <div class="container">
      <h2><?= get_theme_mod("title_porque_ser_ibefiano", "Porque ser um IBEFiano"); ?></h2>
      <ul>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
        <li>
          <div>
            <span class="demo-ball"></span>
            <h3>Lorem Ipsum</h3>
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
        </li>
      </ul>

      <?php if (!empty(get_theme_mod("link_btn_porque_ser_ibefiano"))) : ?>
        <a href="<?= get_theme_mod("link_btn_porque_ser_ibefiano") ?>" class="btn btn-primary"><?= get_theme_mod("text_btn_porque_ser_ibefiano") ?></a>
      <?php endif; ?>
    </div>
  </section>

  <section id="proximos-eventos">
    <div class="container">
      <div class="d-flex justify-content-center mt-4">
        <h2><?= get_theme_mod("title_proximos_eventos", "Próximos eventos"); ?></h2>
      </div>

      <!-- Montar query com os próximos eventos -->

      <div class="swiper slider-eventos slider-container">
        <div class="slider-content">
          <div class="card-slider-wrapper swiper-wrapper">
            <div class="card-slider swiper-slide">
              <div class="image-content">
                <img src="./assets/img/slider.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-content">
                <div class="d-flex align-items-center mb-2">
                  <div class="col-12 category">Categoria</div>

                  <div class="col date">22 de junho de 2023</div>
                </div>
                <h2 class="title">Card title</h2>
                <hr />
                <div class="d-flex flex-column">
                  <p class="location">Location</p>
                  <p class="address">Location</p>
                </div>
              </div>
            </div>

            <div class="card-slider swiper-slide">
              <div class="image-content">
                <img src="./assets/img/slider.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-content">
                <div class="d-flex align-items-center mb-2">
                  <div class="col-12 category">Categoria</div>

                  <div class="col date">22 de junho de 2023</div>
                </div>
                <h2 class="title">Card title</h2>
                <hr />
                <div class="d-flex flex-column">
                  <p class="location">Location</p>
                  <p class="address">Location</p>
                </div>
              </div>
            </div>

            <div class="card-slider swiper-slide">
              <div class="image-content">
                <img src="./assets/img/slider.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-content">
                <div class="d-flex align-items-center mb-2">
                  <div class="col-12 category">Categoria</div>

                  <div class="col date">22 de junho de 2023</div>
                </div>
                <h2 class="title">Card title</h2>
                <hr />
                <div class="d-flex flex-column">
                  <p class="location">Location</p>
                  <p class="address">Location</p>
                </div>
              </div>
            </div>

            <div class="card-slider swiper-slide">
              <div class="image-content">
                <img src="./assets/img/slider.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-content">
                <div class="d-flex align-items-center mb-2">
                  <div class="col-12 category">Categoria</div>

                  <div class="col date">22 de junho de 2023</div>
                </div>
                <h2 class="title">Card title</h2>
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
          <a href="<?= get_theme_mod("link_btn_proximos_eventos"); ?>" class="btn btn-primary"><?= get_theme_mod("text_btn_proximos_eventos", "Participe"); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section id="nossos-ibefianos">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-2">
          <h2><?= get_theme_mod("title_nossos_ibefianos", "Nossos Ibefianos"); ?></h2>
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
          <a href="<?= get_theme_mod("link_btn_nossos_ibefianos"); ?>" class="btn btn-primary"><?= get_theme_mod("text_btn_nossos_ibefianos"); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section id="ultimas-noticias">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2><?= get_theme_mod("title_ultimas_noticias", "Últimas notícias"); ?></h2>
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
              <h3 class="title">Titulo da publicação</h3>
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
          <h2><?= get_theme_mod("title_podcast", "Escute nosso podcast"); ?></h2>

          <?php if (!empty(get_theme_mod("link_btn_podcast"))) : ?>
            <a href="<?= get_theme_mod("link_btn_podcast"); ?>" class="btn btn-primary"><?= get_theme_mod("text_btn_podcast", "Todos os podcasts "); ?></a>
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
        <div class="col-12 text-center">
          <h2><?= get_theme_mod("title_mantenedores", "Mantenedores"); ?></h2>
          <p>
            <?= get_theme_mod("text_mantenedores"); ?>
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
            <a href="<?= get_theme_mod("link_btn_mantenedor") ?>" class="btn btn-primary"><?= get_theme_mod("text_btn_mantenedor", "Seja um mantenedor") ?></a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
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
              <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" placeholder="Seu melhor email" />
              <button class="btn btn-primary" type="button" id="button-addon1">
                Button
              </button>
            </div>
            <p class="text-center">Lorem ipsum dolor sit amet.</p>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>