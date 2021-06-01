<?php


namespace app\components\textEditor;


use yii\web\AssetBundle;

class TextEditorAsset extends AssetBundle
{
    public $js = [
        'js/editor.js',
    ];

    public $css = [
        'css/editor.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}