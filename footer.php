<footer>
    <div class="container">
        <div class="row align-items-center gap-4 gap-lg-0">
            <div class="col-12 col-lg-4 sobre d-flex justify-content-center justify-content-lg-start">
                <img src="<?= get_theme_mod('logo_menu'); ?>" alt="" />
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-center justify-content-md-start">
                <ul class="contatos">
                    <h1><?= get_theme_mod("title_contato_footer", "Entre em contato") ?></h1>
                    <li class="telefone"><?= get_theme_mod("telefone_contato"); ?></li>
                    <li class="email"><?= get_theme_mod("email_contato"); ?></li>
                    <li class="endereco"><?= get_theme_mod("endereco_contato"); ?></li>
                </ul>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-center justify-content-md-start">
                <ul class="social-network">
                    <?php
                    $repeater = get_theme_mod('customizer_repeater_social_network', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
                    /*This returns a json so we have to decode it*/
                    $repeater_decoded = json_decode($repeater);
                    foreach ($repeater_decoded as $repeater_item) : ?>

                        <li>
                            <a href="<?= $repeater_item->link ?>" target="_blank"><img src="<?= $repeater_item->image_url; ?>" alt="social-network
                            " /></a>
                        </li>

                    <?php
                    endforeach;
                    ?>
                </ul>
            </div>

            <div class="col-12 pt-4 text-center">
                <p>Todos os direitos reservados ao IBEF ES - <?= date("Y") ?></p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>

</html>