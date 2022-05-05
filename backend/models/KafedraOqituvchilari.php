<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kafedra_oqituvchilari".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string|null $img
 * @property string $lavozimi_uz
 * @property string $lavozimi_ru
 * @property string $lavozimi_en
 * @property string $darajasi_uz
 * @property string $darajasi_ru
 * @property string $darajasi_en
 * @property string $telegram
 * @property string $email
 * @property string $tel
 * @property string $manzil_uz
 * @property string $manzil_ru
 * @property string $manzil_en
 * @property string $qabul_uz
 * @property string $qabul_ru
 * @property string $qabul_en
 * @property int $comm_kafedra_id
 *
 * @property Kafedralar $commKafedra
 */
class KafedraOqituvchilari extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kafedra_oqituvchilari';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en', 'lavozimi_uz', 'lavozimi_ru', 'lavozimi_en', 'darajasi_uz', 'darajasi_ru', 'darajasi_en', 'telegram', 'email', 'tel', 'manzil_uz', 'manzil_ru', 'manzil_en', 'qabul_uz', 'qabul_ru', 'qabul_en', 'comm_kafedra_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['comm_kafedra_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'lavozimi_uz', 'lavozimi_ru', 'lavozimi_en', 'darajasi_uz', 'darajasi_ru', 'darajasi_en', 'telegram', 'email', 'tel', 'manzil_uz', 'manzil_ru', 'manzil_en', 'qabul_uz', 'qabul_ru', 'qabul_en'], 'string', 'max' => 255],
            [['comm_kafedra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kafedralar::className(), 'targetAttribute' => ['comm_kafedra_id' => 'id']],
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
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'img' => 'Img',
            'lavozimi_uz' => 'Lavozimi Uz',
            'lavozimi_ru' => 'Lavozimi Ru',
            'lavozimi_en' => 'Lavozimi En',
            'darajasi_uz' => 'Darajasi Uz',
            'darajasi_ru' => 'Darajasi Ru',
            'darajasi_en' => 'Darajasi En',
            'telegram' => 'Telegram',
            'email' => 'Email',
            'tel' => 'Tel',
            'manzil_uz' => 'Manzil Uz',
            'manzil_ru' => 'Manzil Ru',
            'manzil_en' => 'Manzil En',
            'qabul_uz' => 'Qabul Uz',
            'qabul_ru' => 'Qabul Ru',
            'qabul_en' => 'Qabul En',
            'comm_kafedra_id' => 'Comm Kafedra ID',
        ];
    }

    /**
     * Gets query for [[CommKafedra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommKafedra()
    {
        return $this->hasOne(Kafedralar::className(), ['id' => 'comm_kafedra_id']);
    }
}
