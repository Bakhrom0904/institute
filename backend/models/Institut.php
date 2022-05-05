<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "institut".
 *
 * @property int $id
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $ins_menu_sub_id
 *
 * @property MenuSub $insMenuSub
 */
class Institut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'institut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_uz', 'content_ru', 'content_en', 'ins_menu_sub_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['ins_menu_sub_id'], 'integer'],
            [['ins_menu_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['ins_menu_sub_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'ins_menu_sub_id' => 'Ins Menu Sub ID',
        ];
    }

    /**
     * Gets query for [[InsMenuSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInsMenuSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'ins_menu_sub_id']);
    }
}
