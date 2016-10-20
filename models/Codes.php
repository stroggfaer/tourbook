<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "codes".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $code
 * @property integer $type
 * @property integer $status
 */
class codes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'codes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'code', 'type', 'status'], 'required'],
            [['user_id', 'code', 'type', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'code' => Yii::t('app', 'Code'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
