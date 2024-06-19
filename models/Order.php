<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

class Order extends ActiveRecord {
    public static function tableName() {
        return 'order';
    }

    public function getItems() {
        return $this->hasMany(OrderItem::class, ['order_id' => 'id']);
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phone',], 'required'],
            ['email', 'email'],
            [
                'phone',
                'match',
                'pattern' => '~^\+7\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}$~',
                'message' => 'Номер телефона должен соответствовать шаблону +7 (495) 123-45-67'
            ],
            [['name', 'email', 'phone'], 'string', 'max' => 50],
            [['address', 'comment'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels() {
        return [
            'name' => 'Ваше имя',
            'email' => 'Адрес почты',
            'phone' => 'Номер телефона',
            'delivery_type' => 'Способ выдачи (доставка/самовывоз)',
            'address' => 'Адрес доставки (для доставки)',
            'comment' => 'Комментарий к заказу (необязательно)',
            'promo' => 'Промокод',
        ];
    }
    public function addItems($basket) {
        $products = $basket['products'];
        foreach ($products as $product_id => $product) {
            $item = new OrderItem();
            $item->order_id = $this->id;
            $item->product_id = $product_id;
            $item->name = $product['name'];
            $item->price = $product['price'];
            $item->quantity = $product['count'];
            $item->amount = $product['price'] * $product['count'];
            $item->insert();
        }
    }
}