<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rektorat".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $lavozim_uz
 * @property string $lavozim_ru
 * @property string $lavozim_en
 * @property string|null $img
 * @property string $qabul_vaqti_uz
 * @property string $qabul_vaqti_ru
 * @property string $qabul_vaqti_en
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $telegram
 * @property string $manzil_uz
 * @property string $manzil_ru
 * @property string $manzil_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en

 * @property int $rek_menu_sub_id
 */
class Rektorat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rektorat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'qabul_vaqti_uz', 'qabul_vaqti_ru', 'qabul_vaqti_en', 'manzil_uz', 'manzil_ru', 'manzil_en', 'content_uz', 'content_ru', 'content_en', 'rek_menu_sub_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['rek_menu_sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'img', 'qabul_vaqti_uz', 'qabul_vaqti_ru', 'qabul_vaqti_en', 'tel', 'fax', 'email', 'telegram', 'manzil_uz', 'manzil_ru', 'manzil_en'], 'string', 'max' => 255],
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
            'lavozim_uz' => 'Lavozim Uz',
            'lavozim_ru' => 'Lavozim Ru',
            'lavozim_en' => 'Lavozim En',
            'img' => 'Img',
            'qabul_vaqti_uz' => 'Qabul Vaqti Uz',
            'qabul_vaqti_ru' => 'Qabul Vaqti Ru',
            'qabul_vaqti_en' => 'Qabul Vaqti En',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'email' => 'Email',
            'telegram' => 'Telegram',
            'manzil_uz' => 'Manzil Uz',
            'manzil_ru' => 'Manzil Ru',
            'manzil_en' => 'Manzil En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'kitoblari' => 'Kitoblari',
            'book_img' => 'Book Img',
            'book_img_back' => 'Book Img Back',
            'book_img_front' => 'Book Img Front',
            'rek_menu_sub_id' => 'Rek Menu Sub ID',
        ];
    }
}
