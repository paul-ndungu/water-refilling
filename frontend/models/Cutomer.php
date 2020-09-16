<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cutomer".
 *
 * @property int $customerId
 * @property string $fullName
 * @property int $phone
 * @property string $email
 * @property string $address
 * @property string $createdAt
 *
 * @property Order[] $orders
 * @property Payments[] $payments
 */
class Cutomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cutomer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullName', 'phone', 'email', 'address'], 'required'],
            [['phone'], 'integer'],
            [['createdAt'], 'safe'],
            [['fullName'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customerId' => 'Customer ID',
            'fullName' => 'Full Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['customerId' => 'customerId']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['customerId' => 'customerId']);
    }
}
