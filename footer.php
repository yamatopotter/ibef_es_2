<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 sobre">
                <img src="<?= get_theme_mod('logo_menu'); ?>" alt="" />
                <p>
                    <?= get_theme_mod('sobre_empresa_footer'); ?>
                </p>
            </div>

            <div class="col-12 col-lg-6">
                <h1><?= get_theme_mod("title_contato_footer", "Entre em contato") ?></h1>
                <ul class="contatos">
                    <li class="telefone"><?= get_theme_mod("telefone_contato"); ?></li>
                    <li class="email"><?= get_theme_mod("email_contato"); ?></li>
                    <li class="endereco"><?= get_theme_mod("endereco_contato"); ?></li>
                </ul>
            </div>

            <div class="col-12">
                <p>Todos os direitos reservados ao IBEF ES - <?= date("Y") ?></p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>

</html>