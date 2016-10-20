<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property integer $birthday
 * @property integer $bonus
 * @property integer $money
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password_reset_token
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $status
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'first_name', 'second_name', 'last_name', 'phone', 'email', 'birthday', 'bonus', 'money', 'created_at', 'updated_at', 'password_reset_token', 'password_hash', 'auth_key', 'status'], 'required'],
            [['birthday', 'bonus', 'money', 'created_at', 'updated_at', 'status'], 'integer'],
            [['name', 'first_name', 'second_name', 'last_name', 'email', 'password_reset_token', 'password_hash', 'auth_key'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['phone'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'first_name' => Yii::t('app', 'First Name'),
            'second_name' => Yii::t('app', 'Second Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'birthday' => Yii::t('app', 'Birthday'),
            'bonus' => Yii::t('app', 'Bonus'),
            'money' => Yii::t('app', 'Money'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
