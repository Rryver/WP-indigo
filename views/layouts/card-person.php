<?php

/**
 * @var $this \yii\web\View
 */


?>


<div class="card-person">
  <img class="card-person__image" src="<?= Yii::getAlias("@web") ?> /images/author_avatar.jpg" alt="avatar">
  <h3 class="card-person__name">WP-Indigo</h3>
  <span class="card-person__text">
    Just another WordPress theme
  </span>
  <div class="card-person__social">
      <?= $this->render('social') ?>
  </div>
</div>