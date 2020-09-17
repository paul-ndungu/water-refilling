<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $orderId
 * @property string $productName
 * @property float $amount
 * @property string $date
 * @property string $description
 * @property int $customerId
 * @property string $createdAt
 * @property int $status
 *
 * @property Cutomer $customer
 * @property Payments[] $payments
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productName', 'amount', 'date', 'description', 'customerId', 'status'], 'required'],
            [['amount'], 'number'],
            [['date', 'createdAt'], 'safe'],
            [['description'], 'string'],
            [['customerId', 'status'], 'integer'],
            [['productName'], 'string', 'max' => 100],
            [['customerId'], 'exist', 'skipOnError' => true, 'targetClass' => Cutomer::className(), 'targetAttribute' => ['customerId' => 'customerId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'Order ID',
            'productName' => 'Product Name',
            'amount' => 'Amount',
            'date' => 'Date',
            'description' => 'Description',
            'customerId' => 'Customer ID',
            'createdAt' => 'Created At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Cutomer::className(), ['customerId' => 'customerId']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['orderId' => 'orderId']);
    }
}
