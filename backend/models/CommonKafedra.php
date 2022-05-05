<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "common_kafedra".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string|null $img
 * @property string $lavozim_uz
 * @property string $lavozim_ru
 * @property string $lavozim_en
 * @property string $darajasi_uz
 * @property string $darajasi_ru
 * @property string $darajasi_en
 * @property string $kafedra_hodim_uz
 * @property string $kafedra_hodim_ru
 * @property string $kafedra_hodim_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $qabul_uz
 * @property string $qabul_ru
 * @property string $qabul_en
 * @property string $manzil_uz
 * @property string $manzil_ru
 * @property string $manzil_en
 * @property string $tel
 * @property string $email_uz
 * @property string $telegram
 * @property int $kafedra_id
 *
 * @property Kafedralar $kafedra
 * @property KafedraOqituvchilari[] $kafedraOqituvchilaris
 */
class CommonKafedra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'common_kafedra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'darajasi_uz', 'darajasi_ru', 'darajasi_en', 'kafedra_hodim_uz', 'kafedra_hodim_ru', 'kafedra_hodim_en', 'content_uz', 'content_ru', 'content_en', 'qabul_uz', 'qabul_ru', 'qabul_en', 'manzil_uz', 'manzil_ru', 'manzil_en', 'tel', 'email_uz', 'telegram', 'kafedra_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['kafedra_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'darajasi_uz', 'darajasi_ru', 'darajasi_en', 'kafedra_hodim_uz', 'kafedra_hodim_ru', 'kafedra_hodim_en', 'qabul_uz', 'qabul_ru', 'qabul_en', 'manzil_uz', 'manzil_ru', 'manzil_en', 'tel', 'email_uz', 'telegram'], 'string', 'max' => 255],
            [['kafedra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kafedralar::className(), 'targetAttribute' => ['kafedra_id' => 'id']],
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
            'lavozim_uz' => 'Lavozim Uz',
            'lavozim_ru' => 'Lavozim Ru',
            'lavozim_en' => 'Lavozim En',
            'darajasi_uz' => 'Darajasi Uz',
            'darajasi_ru' => 'Darajasi Ru',
            'darajasi_en' => 'Darajasi En',
            'kafedra_hodim_uz' => 'Kafedra Hodim Uz',
            'kafedra_hodim_ru' => 'Kafedra Hodim Ru',
            'kafedra_hodim_en' => 'Kafedra Hodim En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'qabul_uz' => 'Qabul Uz',
            'qabul_ru' => 'Qabul Ru',
            'qabul_en' => 'Qabul En',
            'manzil_uz' => 'Manzil Uz',
            'manzil_ru' => 'Manzil Ru',
            'manzil_en' => 'Manzil En',
            'tel' => 'Tel',
            'email_uz' => 'Email Uz',
            'telegram' => 'Telegram',
            'kafedra_id' => 'Kafedra ID',
        ];
    }

    /**
     * Gets query for [[Kafedra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKafedra()
    {
        return $this->hasOne(Kafedralar::className(), ['id' => 'kafedra_id']);
    }

    /**
     * Gets query for [[KafedraOqituvchilaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKafedraOqituvchilaris()
    {
        return $this->hasMany(KafedraOqituvchilari::className(), ['comm_kafedra_id' => 'id']);
    }
}
