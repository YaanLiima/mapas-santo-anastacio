<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */
use MapasCulturais\i;

$this->import('
    theme-logo
');
$config = $app->config['social-media'];
?>
<?php $this->applyTemplateHook("main-footer", "before")?>
<div v-if="globalState.visibleFooter" class="main-footer">
    <?php $this->applyTemplateHook("main-footer", "begin")?>
    <div class="main-footer__content">
        <?php $this->applyTemplateHook("main-footer-logo", "before")?>
        <div class="main-footer__support">
            <?php $this->part('footer-support-message') ?>
        </div>
        <div class="main-footer__content--logo">
            <div class="main-footer__content--logo-img">
                <theme-logo href="<?= $app->createUrl('site', 'index') ?>"></theme-logo>
            </div>
    
            <div class="main-footer__content--logo-share">
                <?php foreach ($config as $meta => $conf) : ?>
                    <a target="_blank" href="<?= $conf['link'] ?>">
                        <mc-icon name='<?= $conf['icon'] ?>'></mc-icon>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php $this->applyTemplateHook("main-footer-logo", "after")?>
    
        <?php $this->applyTemplateHook("main-footer-links", "before")?>
        <div class="main-footer__content--links">
            <?php $this->applyTemplateHook("main-footer-links", "begin")?>
    
            <ul class="main-footer__content--links-group">
                <li>
                    <a><?php i::_e("Acesse"); ?></a>
                </li>
                <li v-if="global.enabledEntities.opportunities">
                    <a href="<?= $app->createUrl('search', 'opportunities') ?>">
                        <mc-icon name="opportunity"></mc-icon> <?php i::_e('editais e oportunidades'); ?>
                    </a>
                </li>
                <li v-if="global.enabledEntities.events">
                    <a href="<?= $app->createUrl('search', 'events') ?>">
                        <mc-icon name="event"></mc-icon> <?php i::_e('eventos'); ?>
                    </a>
                </li>
                <li v-if="global.enabledEntities.agents">
                    <a href="<?= $app->createUrl('search', 'agents') ?>">
                        <mc-icon name="agent"></mc-icon> <?php i::_e('agentes'); ?>
                    </a>
                </li>
                <li v-if="global.enabledEntities.spaces">
                    <a href="<?= $app->createUrl('search', 'spaces') ?>">
                        <mc-icon name="space"></mc-icon> <?php i::_e('espaços'); ?>
                    </a>
                </li>
                <li v-if="global.enabledEntities.projects">
                    <a href="<?= $app->createUrl('search', 'projects') ?>">
                        <mc-icon name="project"></mc-icon> <?php i::_e('projetos'); ?>
                    </a>
                </li>
            </ul>
    
            <ul class="main-footer__content--links-group">
                <li>
                    <a href="<?= $app->createUrl('panel', 'index') ?>"><?php i::_e('Painel'); ?></a>
                </li>
                <li v-if="global.enabledEntities.opportunities">
                    <a href="<?= $app->createUrl('panel', 'opportunities') ?>"><?php i::_e('Editais e oportunidades'); ?></a>
                </li>
                <li v-if="global.enabledEntities.events">
                    <a href="<?= $app->createUrl('panel', 'events') ?>"><?php i::_e('Meus eventos'); ?></a>
                </li>
                <li v-if="global.enabledEntities.agents">
                    <a href="<?= $app->createUrl('panel', 'agents') ?>"><?php i::_e('Meus agentes'); ?></a>
                </li>
                <li v-if="global.enabledEntities.spaces">
                    <a href="<?= $app->createUrl('panel', 'spaces') ?>"><?php i::_e('Meus espaços'); ?></a>
                </li>
                <?php if (!($app->user->is('guest'))) : ?>
                    <li>
                        <a href="<?= $app->createUrl('auth', 'logout') ?>"><?php i::_e('Sair')?></a>
                    </li>
                <?php endif; ?>
            </ul>
    
                <ul class="main-footer__content--links-group">
                    <li>
                        <a><?php i::_e('Ajuda e privacidade'); ?></a>
                    </li>
                    
                    <li>
                        <a href="<?= $app->createUrl('faq') ?>"><?php i::_e('Dúvidas frequentes'); ?></a>
                        <p style="margin-top: 15px !important;">
                            <?= $this->text('description', "") ?>
                        </p>
                    </li>
                    
                <?php if (count($app->config['module.LGPD']) > 0): ?>
                    <?php foreach ($app->config['module.LGPD'] as $slug => $cfg) : ?>
                        <li>
                            <a href="<?= $app->createUrl('lgpd', 'view', [$slug]) ?>"><?= $cfg['title'] ?></a>
                        </li>
                    <?php endforeach ?>
                <?php endif; ?>
				<li class="main-footer__content--logo-share">
<a target="_blank" href="https://www.facebook.com/Pmsantoanastacio/">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class=" iconify iconify--brandico" width="0.49em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 486.037 1000" style="font-size: 25px;"><path fill="currentColor" d="M124.074 1000V530.771H0V361.826h124.074V217.525C124.074 104.132 197.365 0 366.243 0C434.619 0 485.18 6.555 485.18 6.555l-3.984 157.766s-51.564-.502-107.833-.502c-60.9 0-70.657 28.065-70.657 74.646v123.361h183.331l-7.977 168.945H302.706V1000z"></path></svg></a>
<a target="_blank" href="https://www.instagram.com/prefmsantoanastacio/"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class=" iconify iconify--fa6-brands" width="0.88em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512" style="font-size: 25px;"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9S287.7 141 224.1 141m0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7s74.7 33.5 74.7 74.7s-33.6 74.7-74.7 74.7m146.4-194.3c0 14.9-12 26.8-26.8 26.8c-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8s26.8 12 26.8 26.8m76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9c-26.2-26.2-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9 0c-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9c1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0c35.9-1.7 67.7-9.9 93.9-36.2c26.2-26.2 34.4-58 36.2-93.9c2.1-37 2.1-147.8 0-184.8M398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6c-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6c29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6c11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1"></path></svg></a>
</li>                
				</ul>
            <?php $this->applyTemplateHook("main-footer-links", "end")?>
        </div>
        <?php $this->applyTemplateHook("main-footer-links", "after")?>
		<div style="width:100%; text-align:center; overflow-x:hidden;">

    <span style="margin:0 20px; display:inline-block;">
        <img src="https://www.santoanastacio.sp.gov.br/imgeditor/image/Logo%20Cultura.png" width="100" height="80">
    </span>

    <span style="margin:0 20px; display:inline-block;">
        <a href="https://www.santoanastacio.sp.gov.br/portal/servicos/1039/conselho-municipal-de-cultura/" target="_blank">
            <img src="https://www.santoanastacio.sp.gov.br/imgeditor/image/conselho%20cultural.png" width="100">
        </a>
    </span>

    <span style="margin:0 20px; display:inline-block;">
        <a href="https://www.santoanastacio.sp.gov.br/" target="_blank">
            <img src="https://www.santoanastacio.sp.gov.br/imgeditor/image/brasao-rodape.png" width="200">
        </a>
    </span>

    <span style="margin:0 20px; display:inline-block;">
        <img src="https://www.santoanastacio.sp.gov.br/imgeditor/image/leipaulogustavo_img_8fewed.png" width="100">
    </span>

    <span style="margin:0 20px; display:inline-block;">
        <img src="https://www.santoanastacio.sp.gov.br/imgeditor/image/culturafederal_img_17p37k6.png" width="200">
    </span>

</div>

<br><br>

<div style="text-align:center;">
Reclamações, sugestões ou denúncias, entre em contato com a 
<a href="https://www.santoanastacio.sp.gov.br/portal/servicos/1039/conselho-municipal-de-cultura/" target="_blank">Ouvidoria Geral do Município</a>.  
Em caso de dúvidas, encaminhe um e-mail para: 
<a href="mailto:mapacultural@santoanastacio.sp.gov.br">mapacultural@santoanastacio.sp.gov.br</a>
</div>
    </div>
    <?php $this->applyTemplateHook("main-footer-reg", "before")?>
    <div class="main-footer__reg">
        <?php $this->applyTemplateHook("main-footer-reg", "begin")?>
        <div class="main-footer__reg-content">
            <p>
               <?php i::_e("plataforma criada pela comunidade") ?>
               <span class="mapas"> <mc-icon name="map"></mc-icon><?php i::_e("mapas culturais"); ?> </span>
               <?php i::_e("e desenvolvida por "); ?><strong>hacklab<span style="color: red">/</span></strong>e adaptada pelo <strong>departamento de T.I municipal.</strong>
            </p>

            <?php /*
            <a class="link" href="https://github.com/culturagovbr/mapadacultura">
                <?php i::_e("Conhe  a o reposit  rio") ?>
                <mc-icon name="github"></mc-icon>
            </a> */?>
        </div>
        <?php $this->applyTemplateHook("main-footer-reg", "end")?>
    </div>
    <?php $this->applyTemplateHook("main-footer-reg", "after")?>  
    <?php $this->applyTemplateHook("main-footer", "end")?>
</div>
<?php $this->applyTemplateHook("main-footer", "after")?>