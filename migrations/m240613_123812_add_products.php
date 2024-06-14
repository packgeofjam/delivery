<?php

use yii\db\Migration;

/**
 * Class m240613_123812_add_products
 */
class m240613_123812_add_products extends Migration
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

        $this->insert('catalog', [
            'name' => 'Сырные палочки',
            'shortname' => 'cheesesticks',
            'description' => 'Пять палочек сыра маасдам, обжаренные в хрустящей панировке, оригинальный рецепт',
            'price' => 249,
            'category' => 'snacks',
            'popular' => 1,
            'discount' => 1,
            'discount-price' => 219,
        ]);
        $this->insert('catalog', [
            'name' => 'Картофельные шарики',
            'shortname' => 'potatoballs',
            'description' => 'Семь шариков с начинкой из картошки и сыра моцарелла, насыщенные и хрустящие',
            'price' => 249,
            'category' => 'snacks',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Луковые кольца',
            'shortname' => 'onionrings',
            'description' => 'Классические семь хрустящих колечек, обжаренные в масле и панировке',
            'price' => 179,
            'category' => 'snacks',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца 4 сыра',
            'shortname' => 'pizza4cheese',
            'description' => 'Моцарелла, дорблю, чеддер, пармезан, сливочный соус, прованские травы, 35см',
            'price' => 699,
            'category' => 'pizza',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца 6 сыров',
            'shortname' => 'pizza6cheese',
            'description' => 'Сливочный сыр, моцарелла, дорблю, брынза, чеддер, пармезан, сливочный соус, прованские травы, 35см',
            'price' => 799,
            'category' => 'pizza',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Сырфырс бургер фирменный',
            'shortname' => 'cshashcburger',
            'description' => 'Бургер по фирменному рецепту с котлетой из свиного фарша и сыра моцарелла',
            'price' => 399,
            'category' => 'burger',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Сырфырс бургер джуниор',
            'shortname' => 'cshashcburgerj',
            'description' => 'Тот самый фирменный бургер, но поменьше',
            'price' => 329,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Чизбургер',
            'shortname' => 'cheeseburger',
            'description' => 'Просто и вкусно',
            'price' => 99,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Латте',
            'shortname' => 'latte',
            'description' => 'Молочный кофе с нежной сырной пенкой 320г',
            'price' => 219,
            'category' => 'coffee',
            'popular' => 1,
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
