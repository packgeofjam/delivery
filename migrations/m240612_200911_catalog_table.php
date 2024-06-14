<?php

use yii\db\Migration;

/**
 * Class m240612_200911_catalog_table
 */
class m240612_200911_catalog_table extends Migration
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

        $this->createTable('catalog', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'shortname' => $this->string()->notNull()->unique(),
            'description' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'category' => $this->string()->notNull(),
            'availability' => $this->boolean()->notNull()->defaultValue(1),
            'popular' => $this->boolean()->notNull()->defaultValue(0),
            'discount' => $this->boolean()->notNull()->defaultValue(0),
            'discount-price' => $this->integer()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('catalog');
    }

}
