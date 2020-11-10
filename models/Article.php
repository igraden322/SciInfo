<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property int|null $author
 * @property int|null $category
 * @property string $heading
 * @property string $text
 * @property string $date
 * @property int $verified
 * @property string|null $image
 * @property int|null $likes
 * @property int|null $dislikes
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'category', 'verified', 'likes', 'dislikes'], 'integer'],
            [['heading', 'text', 'date', 'verified'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['heading'], 'string', 'max' => 80],
            [['image'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Автор(ID)',
            'category' => 'Категория',
            'heading' => 'Заголовок',
            'text' => 'Текст',
            'date' => 'Дата',
            'verified' => 'Проверено',
            'image' => 'Изображение',
            'likes' => 'Понравилось',
            'dislikes' => 'Не понравилось',
        ];
    }
}
