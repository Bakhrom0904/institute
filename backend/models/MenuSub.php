<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "menu_sub".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property int $menu_title_id
 * @property string $link
 * @property int $link_type
 *
 * @property Fakultet[] $fakultets
 * @property MenuTitle $menuTitle
 */
class MenuSub extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_sub';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'menu_title_id', 'link', 'link_type'], 'required'],
            [['menu_title_id', 'link_type'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'link'], 'string', 'max' => 255],
            [['menu_title_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuTitle::className(), 'targetAttribute' => ['menu_title_id' => 'id']],
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
            'menu_title_id' => 'Menu Title ID',
            'link' => 'Link',
            'link_type' => 'Link Type',
        ];
    }

    /**
     * Gets query for [[Fakultets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFakultets()
    {
        return $this->hasMany(Fakultet::className(), ['menu_sub_id' => 'id']);
    }

    /**
     * Gets query for [[MenuTitle]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenuTitle()
    {
        return $this->hasOne(MenuTitle::className(), ['id' => 'menu_title_id']);
    }
}
