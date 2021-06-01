<?php

/**
 * @var $this \yii\web\View
 */

use yii\widgets\ActiveForm;

?>

<link rel="stylesheet" href="../assets/css/editor.css">

<div class="text-editor">
    <div class="text-editor__header">
        <div class="text-editor__menu menu">
            <ul class="menu__list">
                <li class="menu__item">
                    <button class="menu__btn">btn</button>
                </li>
                <li class="menu__item">
                    <button class="menu__btn">btn</button>
                </li>
                <li class="menu__item">
                    <button class="menu__btn">btn</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="text-editor__content">
      Content
<!--        --><?php //ActiveForm::begin() ?>
        <label>
            <?= \yii\helpers\Html::textarea('area', 'textarea') ?>
        </label>
<!--        --><?php //ActiveForm::end() ?>
    </div>
</div>


<script src="../assets/js/editor.js"></script>