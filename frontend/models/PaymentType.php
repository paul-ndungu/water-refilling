<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "paymentType".
 *
 * @property int $paymentTypeId
 * @property string $paymentTypeDesc
 *
 * @property Payments[] $payments
 */
class PaymentType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paymentType';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['paymentTypeDesc'], 'required'],
            [['paymentTypeDesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'paymentTypeId' => 'Payment Type ID',
            'paymentTypeDesc' => 'Payment Type Desc',
        ];
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['paymentTypeId' => 'paymentTypeId']);
    }
}
