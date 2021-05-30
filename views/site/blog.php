<?php

/**
 * @var $this \yii\web\View
 */

?>

<div class="site-blog">
  <section class="person-preview">
    <div class="container">
        <?= $this->render("@views/layouts/card-person") ?>
    </div>
  </section>

  <div class="container">
    <?= $this->render("@views/layouts/split-line") ?>
  </div>

  <section class="posts">
    <ul class="posts__list">
      <li class="posts__item">
        <a class="posts__link" href="#">
          <span class="posts__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl.</span>
          <span class="posts__date">December 23, 2020</span>
        </a>
      </li>
      <li class="posts__item">
        <a class="posts__link" href="#">
          <span class="posts__title">Ac condimentum arcu massa bibendum.</span>
          <span class="posts__date">December 23, 2020</span>
        </a>
      </li>
      <li class="posts__item">
        <a class="posts__link" href="#">
          <span class="posts__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum.</span>
          <span class="posts__date">December 23, 2020</span>
        </a>
      </li>
    </ul>
  </section>

</div>