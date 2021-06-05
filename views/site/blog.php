<?php

/**
 * @var $this \yii\web\View
 * @var $modelUser \app\models\User
 */

use app\models\Post;
use yii\helpers\Url; ?>

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
      <a class="posts__btn-new-post btn-link btn-common" href="<?= Url::to(['site/create']) ?>">Create new post</a>

      <ul class="posts__list">
          <?php foreach (Post::getAll() as $post) { ?>
            <li class="posts__item">
              <div class="posts_post-preview post-preview">
                <a class="post-preview__link" href="<?= Url::to(['site/post', 'id' => $post->id]) ?>">
                  <span class="post-preview__title"><?= $post->title ?></span>
                </a>
                <span class="post-preview__date">December 23, 2020</span>
              </div>
            </li>
          <?php } ?>
      </ul>
    </div>
  </section>

</div>