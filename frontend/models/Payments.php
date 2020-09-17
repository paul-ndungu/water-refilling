<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $paymentId
 * @property int $orderId
 * @property int $customerId
 * @property float $amount
 * @property string $date
 * @property int $paymentTypeId
 * @property string $createdAt
 *
 * @property Order $order
 * @property Cutomer $customer
 * @property PaymentType $paymentType
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'customerId', 'amount', 'date', 'paymentTypeId'], 'required'],
            [['orderId', 'customerId', 'paymentTypeId'], 'integer'],
            [['amount'], 'number'],
            [['date', 'createdAt'], 'safe'],
            [['orderId'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['orderId' => 'orderId']],
            [['customerId'], 'exist', 'skipOnError' => true, 'targetClass' => Cutomer::className(), 'targetAttribute' => ['customerId' => 'customerId']],
            [['paymentTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => PaymentType::className(), 'targetAttribute' => ['paymentTypeId' => 'paymentTypeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'paymentId' => 'Payment ID',
            'orderId' => 'Order ID',
            'customerId' => 'Customer ID',
            'amount' => 'Amount',
            'date' => 'Date',
            'paymentTypeId' => 'Payment Type ID',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['orderId' => 'orderId']);
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
     * Gets query for [[PaymentType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentType()
    {
        return $this->hasOne(PaymentType::className(), ['paymentTypeId' => 'paymentTypeId']);
    }
}
