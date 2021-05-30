<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <section class="about">
    <div class="container">

      <h1 class="about__title font-heading-1"><?= Html::encode($this->title) ?></h1>

      <div class="about__description description">
        <p class="description__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.
        </p>
        <p class="description__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.
        </p>

        <?php if (!Yii::$app->user->isGuest) { ?>
            <div class="description__edit">
              <button class="description__edit-button btn-edit btn btn-default">Change description</button>
              <button class="description__edit-cance btn btn-danger hidden">Cancel</button>
              <button class="description__edit-save btn btn-success hidden">Save</button>
            </div>
        <?php } ?>
      </div>

      <div class="about__ad-info ad-info">
        <h2 class="ad-info__title font-heading-2">Skills</h2>
        <ul class="ad-info__list">
          <li class="ad-info__item">HTML – Jade – Haml – Erb</li>
          <li class="ad-info__item">Responsive (Mobile First)</li>
          <li class="ad-info__item">CSS (Stylus, Sass, Less)</li>
        </ul>
      </div>

      <div class="about__ad-info ad-info">
        <h2 class="ad-info__title font-heading-2">Projects</h2>
        <ul class="ad-info__list">
          <li class="ad-info__item"><a href="#" class="ad-info__link">Lorem Lorem</a></li>
          <li class="ad-info__item"><a href="#" class="ad-info__link">Ipsum Dolor</a></li>
          <li class="ad-info__item"><a href="#" class="ad-info__link">Dolor Lorem</a></li>
        </ul>
      </div>
    </div>
  </section>
</div>
