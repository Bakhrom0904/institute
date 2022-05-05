<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "video_gallery".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $type_uz
 * @property string $type_ru
 * @property string $type_en
 * @property string|null $img
 * @property string $link
 * @property string $video_duration
 */
class VideoGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'type_uz', 'type_ru', 'type_en', 'link', 'video_duration'], 'required'],
            [['name_uz', 'name_ru', 'name_en', 'link'], 'string'],
            [['type_uz', 'type_ru', 'type_en', 'img', 'video_duration'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'type_uz' => 'Type Uz',
            'type_ru' => 'Type Ru',
            'type_en' => 'Type En',
            'img' => 'Img',
            'link' => 'Link',
            'video_duration' => 'Video Duration',
        ];
    }
}
