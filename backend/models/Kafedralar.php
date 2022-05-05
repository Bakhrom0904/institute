<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kafedralar".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property int $kafedra_menu_sub_id
 *
 * @property CommonKafedra[] $commonKafedras
 * @property MenuSub $kafedraMenuSub
 */
class Kafedralar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kafedralar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'kafedra_menu_sub_id'], 'required'],
            [['kafedra_menu_sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
            [['kafedra_menu_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['kafedra_menu_sub_id' => 'id']],
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
            'kafedra_menu_sub_id' => 'Kafedra Menu Sub ID',
        ];
    }

    /**
     * Gets query for [[CommonKafedras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommonKafedras()
    {
        return $this->hasMany(CommonKafedra::className(), ['kafedra_id' => 'id']);
    }

    /**
     * Gets query for [[KafedraMenuSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKafedraMenuSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'kafedra_menu_sub_id']);
    }
}
