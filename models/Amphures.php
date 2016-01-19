<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "amphures".
 *
 * @property integer $AMPHUR_ID
 * @property string $AMPHUR_CODE
 * @property string $AMPHUR_NAME
 * @property string $AMPHUR_NAME_ENG
 * @property integer $PROVINCE_ID
 */
class Amphures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'amphures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AMPHUR_CODE', 'AMPHUR_NAME', 'AMPHUR_NAME_ENG'], 'required'],
            [['PROVINCE_ID'], 'integer'],
            [['AMPHUR_CODE'], 'string', 'max' => 4],
            [['AMPHUR_NAME', 'AMPHUR_NAME_ENG'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AMPHUR_ID' => 'Amphur  ID',
            'AMPHUR_CODE' => 'Amphur  Code',
            'AMPHUR_NAME' => 'Amphur  Name',
            'AMPHUR_NAME_ENG' => 'Amphur  Name  Eng',
            'PROVINCE_ID' => 'Province  ID',
        ];
    }
}
