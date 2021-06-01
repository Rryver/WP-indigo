<?php

/**
 * @var $this \yii\web\View
 */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Menu;

?>


<header class="header">
  <div class="container">
    <nav class="header__nav-menu">
        <?php
        echo Menu::widget([
            'options' => [
                'class' => 'nav-menu__list',
            ],
            'itemOptions' => [
                'class' => 'nav-menu__item',
            ],
            'linkTemplate' => '<a class="nav-menu__link" href="{url}">{label}</a>',
            'items' => [
                ['label' => 'Home', 'url' => ['site/index']],
                ['label' => 'About', 'url' => ['site/about']],
                ['label' => 'Blog', 'url' => ['site/blog']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
                ) : ['label' => 'Logout',
                    'url' => ['site/logout'],
                    'template' => '<a class="nav-menu__link" href="{url}" data-method="post">{label}</a>'
                ],
            ],
            'activeCssClass' => 'nav-menu__item_active',
        ]);
        ?>
    </nav>
  </div>


  <!--      --><?php
    /*        NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => '',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'qwe'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ? (
                        ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ]);
            NavBar::end();
            */ ?>

</header>
