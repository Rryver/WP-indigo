<?php
namespace app\components\textEditor;

use yii\base\Widget;

class TextEditor extends Widget
{
    public $model;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        TextEditorAsset::register($this->getView());
        return $this->render('editor');
    }
}