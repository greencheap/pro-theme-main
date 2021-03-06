<div id="mobileMenu" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar uk-padding-small">
        <div class="uk-section uk-section-xsmall">
            <div class="uk-container">
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-expand">
                        <a href="<?= $view->url()->get() ?>" title="<?= $params->get('title') ?>">
                            <img src="<?= $view->url()->getStatic($params->get('logo')) ?>" width="200" alt="<?= $params->get('title') ?>">
                        </a>
                    </div>
                    <div class="uk-width-auto uk-flex uk-flex-middle uk-flex-right">
                        <a href="#mobileMenu" class="uk-link-reset" uk-toggle>
                            <span uk-icon="icon:close;ratio:1.4"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-section-xsmall">
            <div class="uk-container uk-flex uk-flex-right">
                <div uk-scrollspy="cls: uk-animation-slide-bottom; target: li , p , a; delay: 100; repeat: true">
                    <?= $view->menu('main', 'defined/menu/nav-nav.php', ['class' => 'uk-nav uk-nav-primary uk-text-right uk-margin-auto-vertical']) ?>
                    <?php if ($view->menu()->exists('second')) : ?>
                        <p class="uk-margin-top uk-text-right uk-text-uppercase uk-text-small"><?= __('Other Menu') ?></p>
                        <?= $view->menu('second', 'defined/menu/nav-nav.php', ['class' => 'uk-nav uk-nav-primary uk-text-right uk-margin-auto-vertical']) ?>
                    <?php endif ?>
                    <?php if ($params->get('general.social_access.navbar')) : ?>
                        <div>
                            <?= $view->render('layout/components/socials.php') ?>
                        </div>
                    <?php endif ?>
                    <div>
                        <?= $view->render('layout/components/button.php', ['not_navbar' => true]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>