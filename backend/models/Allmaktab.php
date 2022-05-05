<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "allmaktab".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string|null $img
 * @property int $tez_id
 *
 * @property Maktab[] $maktabs
 * @property TezHavola $tez
 */
class Allmaktab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allmaktab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'tez_id'], 'required'],
            [['tez_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img'], 'string', 'max' => 255],
            [['tez_id'], 'exist', 'skipOnError' => true, 'targetClass' => TezHavola::className(), 'targetAttribute' => ['tez_id' => 'id']],
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
            'img' => 'Img',
            'tez_id' => 'Tez ID',
        ];
    }

    /**
     * Gets query for [[Maktabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaktabs()
    {
        return $this->hasMany(Maktab::className(), ['allmak_id' => 'id']);
    }

    /**
     * Gets query for [[Tez]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTez()
    {
        return $this->hasOne(TezHavola::className(), ['id' => 'tez_id']);
    }
}
