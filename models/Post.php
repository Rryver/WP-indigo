<?php


namespace app\models;


use yii\db\ActiveRecord;


/**
 * Class Post
 * @package app\models
 *
 * this is class for table "post"
 *
 * @property integer $id
 * @property string $title
 * @property integer $image_id
 * @property string $text
 * @property integer $updated_at
 */
class Post extends ActiveRecord
{
    public static function tableName()
    {
        return "post";
    }

    public function rules()
    {
        return [

        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'user_id' => 'user id',
            'title' => 'Заголовок статьи',
            'image_id' => 'image id',
            'text' => 'Текст статьи',
            'updated_at' => 'Последнее обновление',
        ];
    }

    public static function getPostById($id) {
        return self::findOne(['id' => $id]);
    }

    public static function getAll() {
        return Post::find()->all();
    }
}