<?php

use yii\db\Migration;

/**
 * Class m240619_135636_orders
 */
class m240619_135636_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->defaultValue(0),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'address' => $this->string(),
            'comment' => $this->string(),
            'delivery_type' => $this->string()->notNull()->defaultValue('Доставка'),
            'promo' => $this->string(),
            'amount' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'status' => $this->integer()->defaultValue(0),
        ], $tableOptions);
        $this->createTable('order_item', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'amount' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
        $this->dropTable('order_item');
    }
}
