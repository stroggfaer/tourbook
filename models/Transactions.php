<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transactions".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $order_id
 * @property integer $amount
 * @property integer $type
 * @property integer $date
 * @property string $comment
 * @property integer $error_code
 * @property integer $status
 */
class transactions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transactions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'order_id', 'amount', 'type', 'date', 'comment', 'error_code', 'status'], 'required'],
            [['user_id', 'order_id', 'amount', 'type', 'date', 'error_code', 'status'], 'integer'],
            [['comment'], 'string'],
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
            'order_id' => Yii::t('app', 'Order ID'),
            'amount' => Yii::t('app', 'Amount'),
            'type' => Yii::t('app', 'Type'),
            'date' => Yii::t('app', 'Date'),
            'comment' => Yii::t('app', 'Comment'),
            'error_code' => Yii::t('app', 'Error Code'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
