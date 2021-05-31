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
    <div class="container">
      <ul class="posts__list">
        <li class="posts__item">
          <div class="posts_post-preview post-preview">
            <a class="post-preview__link" href="#">
              <span class="post-preview__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl.</span>
            </a>
            <span class="post-preview__date">December 23, 2020</span>
          </div>
        </li>
        <li class="posts__item">
          <div class="posts_post post-preview">
            <a class="post-preview__link" href="#">
              <span class="post-preview__title">Ac condimentum arcu massa bibendum.</span>
            </a>
            <span class="post-preview__date">December 23, 2020</span>
          </div>
        </li>
        <li class="posts__item">
          <div class="posts_post post-preview">
            <a class="post-preview__link" href="#">
              <span class="post-preview__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum.</span>
            </a>
            <span class="post-preview__date">December 23, 2020</span>
          </div>
        </li>
        <li class="posts__item">
          <div class="posts_post post-preview">
            <a class="post-preview__link" href="#">
              <span class="post-preview__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl.</span>
            </a>
            <span class="post-preview__date">December 23, 2020</span>
          </div>
        </li>
        <li class="posts__item">
          <div class="posts_post post-preview">
            <a class="post-preview__link" href="#">
              <span class="post-preview__title">Ac condimentum arcu massa bibendum.</span>
            </a>
            <span class="post-preview__date">December 23, 2020</span>
          </div>
        </li>
      </ul>

      <div class="posts__link-pager link-pager">
        link pager
      </div>
    </div>
  </section>

</div>