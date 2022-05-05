<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $date
 * @property int|null $views
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $page_menu_sub_id
 * @property string|null $img
 *
 * @property MenuSub $pageMenuSub
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'date', 'content_uz', 'content_ru', 'content_en', 'page_menu_sub_id'], 'required'],
            [['views', 'page_menu_sub_id'], 'integer'],
            [['content_uz', 'content_ru', 'content_en', 'name_uz', 'name_ru', 'name_en'], 'string'],
            [['date', 'img'], 'string', 'max' => 255],
            [['page_menu_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['page_menu_sub_id' => 'id']],
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
            'date' => 'Date',
            'views' => 'Views',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'page_menu_sub_id' => 'Page Menu Sub ID',
            'img' => 'Img',
        ];
    }

    /**
     * Gets query for [[PageMenuSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPageMenuSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'page_menu_sub_id']);
    }
}
