<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fakultet_staff".
 *
 * @property int $id
 * @property string $staff_name_uz
 * @property string $staff_name_ru
 * @property string $staff_name_en
 * @property string $staff_rank_uz
 * @property string $staff_rank_ru
 * @property string $staff_rank_en
 * @property string|null $staff_img
 * @property int $staff_menu_sub_id
 *
 * @property MenuSub $staffMenuSub
 */
class FakultetStaff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultet_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_name_uz', 'staff_name_ru', 'staff_name_en', 'staff_rank_uz', 'staff_rank_ru', 'staff_rank_en', 'staff_menu_sub_id'], 'required'],
            [['staff_menu_sub_id'], 'integer'],
            [['staff_name_uz', 'staff_name_ru', 'staff_name_en', 'staff_rank_uz', 'staff_rank_ru', 'staff_rank_en', 'staff_img'], 'string', 'max' => 255],
            [['staff_menu_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['staff_menu_sub_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staff_name_uz' => 'Staff Name Uz',
            'staff_name_ru' => 'Staff Name Ru',
            'staff_name_en' => 'Staff Name En',
            'staff_rank_uz' => 'Staff Rank Uz',
            'staff_rank_ru' => 'Staff Rank Ru',
            'staff_rank_en' => 'Staff Rank En',
            'staff_img' => 'Staff Img',
            'staff_menu_sub_id' => 'Staff Menu Sub ID',
        ];
    }

    /**
     * Gets query for [[StaffMenuSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMenuSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'staff_menu_sub_id']);
    }
}
