<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $booking_id
 * @property integer $date
 * @property integer $price
 * @property integer $bonus
 * @property integer $status_id
 * @property string $comment
 * @property integer $discount
 * @property integer $transaction_id
 * @property integer $status
 */
class orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'booking_id', 'date', 'price', 'bonus', 'status_id', 'comment', 'discount', 'transaction_id', 'status'], 'required'],
            [['user_id', 'booking_id', 'date', 'price', 'bonus', 'status_id', 'discount', 'transaction_id', 'status'], 'integer'],
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
            'booking_id' => Yii::t('app', 'Booking ID'),
            'date' => Yii::t('app', 'Date'),
            'price' => Yii::t('app', 'Price'),
            'bonus' => Yii::t('app', 'Bonus'),
            'status_id' => Yii::t('app', 'Status ID'),
            'comment' => Yii::t('app', 'Comment'),
            'discount' => Yii::t('app', 'Discount'),
            'transaction_id' => Yii::t('app', 'Transaction ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
