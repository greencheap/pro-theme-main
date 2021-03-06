<div id="mobileNavbar">
    <div class="uk-navbar-container uk-container">
        <nav uk-navbar="<?= $params->get("theme-navbar-components") ?>">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item" href="#mobileMenu" uk-toggle>
                    <span uk-icon="icon:menu;ratio:1.4"></span>
                </a>
            </div>

            <div class="uk-navbar-center">
                <a class="uk-navbar-brand" href="<?= $view->url()->get() ?>" title="<?= $params->get('title') ?>">
                    <img src="<?= $view->url()->getStatic($params->get('general.logo.mobile_logo') ?: $params->get('logo')) ?>" width="<?= $params->get('general.logo.mobile_logo') ? 50 : 150 ?>" alt="<?= $params->get('title') ?>">
                </a>
            </div>

            <?php if ($params->get('general.social_access.navbar')) : ?>
                <div class="uk-navbar-right">
                    <?= $view->render('layout/components/socials.php') ?>
                </div>
            <?php endif ?>
        </nav>
    </div>
</div>