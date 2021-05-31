<?php

/**
 * @var $this \yii\base\View
 */


$postTitle = "Hello World";
?>


<div class="site-post">
  <section class="post">
    <div class="container">
      <div class="post__header">
        <h2 class="post__title font-heading-1"><?= $postTitle ?></h2>
        <div class="post__info">
          <a class="post__link-author" href="#">
            <img class="post__image-author" src="<?= Yii::getAlias("@web") ?> /images/post_author_icon.jpg"
                 alt="author-icon">
            <span class="post__author-name">Eliza</span>
          </a>
          <span class="post__date">August 5, 2019</span>
        </div>
      </div>

      <div class="post__content">
        <img src="<?= Yii::getAlias("@web") ?> /images/post_image.jpg" alt="post-image" class="post__image">

        <div class="post__text">
          <p class="post__p">
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
            ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful
            Pointing has no control about the blind texts it is an almost unorthographic life One day however a small
            line.
            Etiam nec purus urna. Integer dictum, arcu et fringilla facilisis, nunc enim suscipit mi, vel mattis leo
            urna a sem. Ut fringilla, mauris eros porttitor dui, nec bibendum mauris justo eu dui. Nullam sit amet quam
            eu massa varius euismod vel ut arcu. Sed a dictum neque. Aliquam sapien nulla, venenatis id finibus at,
            eleifend a turpis. Aliquam ac nibh id lorem ornare accumsan maximus at mauris.
          </p>

          <h3 class="post__caption font-heading-2">Pellentesque tristique lacus ut sem sagittis tempus.</h3>
          <p class="post__p">
            Nulla facilisi. Aliquam congue, turpis non vulputate pharetra, turpis sem dapibus eros, suscipit egestas
            nulla quam nec libero. Vivamus at velit vestibulum, molestie nisl in, fermentum eros. Morbi non congue
            nulla. Donec mollis lacus erat, euismod consectetur nisi lacinia et. Aliquam erat volutpat. Nam condimentum,
            nibh vel viverra ullamcorper, lorem velit pulvinar purus, sed imperdiet purus purus ut velit.
          </p>
        </div>

        <div class="post__share">
          <span class="post__share-text">Share on Internet:</span>
          <div class="post__social">
            <?= $this->render('@views/layouts/social') ?>
          </div>
        </div>
      </div>

      <div class="post__conversation conversation">
        <h3 class="conversation__title font-heading-2">Join the Conversation</h3>
        <form class="conversation__form-comment form-comment">
          <h3 class="form-comment__title">Leave a Reply</h3>
          <span class="form-comment__info-text">
            Your email address will not be published. Required fields are marked *
          </span>

        </form>
      </div>

      <div class="post__comments comments">

      </div>
    </div>
  </section>

</div>
