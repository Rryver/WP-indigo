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
  <div class="card-person__social social">
    <ul class="social__list">
      <li class="social__item">
        <a class="social__link" href="#">
          <img class="social__icon" src="<?= Yii::getAlias("@web") ?>/images/icons/social/twitter.svg" alt="twitter">
        </a>
      </li>
      <li class="social__item">
        <a class="social__link" href="#">
          <svg class="social__icon" width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.4008 18L3.375 10.125H0V6.75H3.375V4.5C3.375 1.4634 5.25545 0 7.9643 0C9.26187 0 10.3771 0.0966038 10.7021 0.139781V3.3132L8.82333 3.31406C7.35011 3.31406 7.06485 4.01411 7.06485 5.04139V6.75H11.25L10.125 10.125H7.06484V18H3.4008Z" fill="#1A1A1A"/>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a class="social__link" href="#">
          <img class="social__icon" src="<?= Yii::getAlias("@web") ?>/images/icons/social/gmail.svg" alt="gmail">
        </a>
      </li>
      <li class="social__item">
        <a class="social__link" href="#">
          <img class="social__icon" src="<?= Yii::getAlias("@web") ?>/images/icons/social/linkedin.svg" alt="Linkedin">
        </a>
      </li>
    </ul>
  </div>
</div>