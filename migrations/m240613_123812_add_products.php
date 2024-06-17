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
            'description' => 'Моцарелла, дорблю, чеддер, пармезан, сливочный соус, прованские травы, 30см',
            'price' => 699,
            'category' => 'pizza',
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца 6 сыров',
            'shortname' => 'pizza6cheese',
            'description' => 'Моцарелла, гауда, дорблю, брынза, чеддер, пармезан, сливочный соус, прованские травы, 30см',
            'price' => 799,
            'category' => 'pizza',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца сливочный цыплёнок',
            'shortname' => 'pizzacreamychicken',
            'description' => 'Моцарелла, фирменный сливочный соус, оливковое масло, куриное бедро маринованное в авторском соусе, помидоры черри, сыр фета, брокколи, 30см',
            'price' => 659,
            'category' => 'pizza',
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца Цезарь',
            'shortname' => 'Cezar',
            'description' => 'Соус цезарь, сыр моцарелла, курица, листья салата, сыр пармезан, 30см',
            'price' => 639,
            'category' => 'pizza',
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца Овощная',
            'shortname' => 'vegetablepizza',
            'description' => 'Моцарелла, кабачки цукини, томаты свежие, перец болгарский, маслины, брокколи, 30см',
            'price' => 599,
            'category' => 'pizza',
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца Барбекю',
            'shortname' => 'barbeku',
            'description' => 'Моцарелла, мясное ассорти, томаты свежие, огурцы маринованные, лук репчатый, перец халапеньо маринованый, соус барбекю, 30см',
            'price' => 629,
            'category' => 'pizza',
        ]);
        $this->insert('catalog', [
            'name' => 'Пицца Пеперони',
            'shortname' => 'peperoni',
            'description' => 'Моцарелла, колбаса пепперони, сливочный соус, 30см',
            'price' => 529,
            'category' => 'pizza',
        ]);
        $this->insert('catalog', [
            'name' => 'Сырфырс бургер фирменный',
            'shortname' => 'cshashcburger',
            'description' => 'Бургер по фирменному рецепту с котлетой из свиного фарша и сыра моцарелла',
            'price' => 359,
            'category' => 'burger',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Сырфырс бургер джуниор',
            'shortname' => 'cshashcburgerj',
            'description' => 'Тот самый фирменный бургер, но поменьше',
            'price' => 299,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Настоящий чизбургер',
            'shortname' => 'therealcheeseburger',
            'description' => 'Сумасшедший бургер с 20 слоями сыра. Легенда для безумных любителей сыра',
            'price' => 389,
            'category' => 'burger',
            'popular' => 1,
            'discount' => 1,
            'discount-price' => 329,
        ]);
        $this->insert('catalog', [
            'name' => 'Овощной бургер',
            'shortname' => 'vegetableburger',
            'description' => 'Бургер по фирменному рецепту с котлетой из овощей и фарша, булочкой с отрубями и диетическим соусом',
            'price' => 359,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Омлеттер',
            'shortname' => 'omeletter',
            'description' => 'Бургер по фирменному рецепту с сырной мягкой булочкой, яйцом и беконом, отличный завтрак',
            'price' => 369,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Бургер с картошкой',
            'shortname' => 'potatoburger',
            'description' => 'Бургер по фирменному рецепту с котлетой из картошки и фарша, сытный и вкусный, отличный обед',
            'price' => 369,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Чизбургер',
            'shortname' => 'cheeseburger',
            'description' => 'Обычный небольшой бургер с говяжей котлетой, просто и вкусно',
            'price' => 119,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Чикенбургер',
            'shortname' => 'chickenburger',
            'description' => 'Обычный небольшой бургер с курицей, просто и вкусно',
            'price' => 99,
            'category' => 'burger',
        ]);
        $this->insert('catalog', [
            'name' => 'Сырные наггетсы',
            'shortname' => 'nuggets',
            'description' => 'Шесть куриных наггетсов с плавленным тянущимся маасдамом внутри',
            'price' => 199,
            'category' => 'snacks',
        ]);
        $this->insert('catalog', [
            'name' => 'Картошка фри',
            'shortname' => 'fries',
            'description' => 'Небольшая порция классической картошки фри, 150г',
            'price' => 99,
            'category' => 'snacks',
        ]);
        $this->insert('catalog', [
            'name' => 'Овощной сет',
            'shortname' => 'vegetableset',
            'description' => 'Полезные свежие овощи на закуску: помидоры, огурцы, перец болгарский, морковь, 200г',
            'price' => 139,
            'category' => 'snacks',
        ]);
        $this->insert('catalog', [
            'name' => 'Соус сырный',
            'shortname' => 'cheesesauce',
            'price' => 29,
            'category' => 'snacks',
        ]);
        $this->insert('catalog', [
            'name' => 'Соус кисло-сладкий',
            'shortname' => 'sweetandsoursauce',
            'price' => 29,
            'category' => 'snacks',
        ]);
        $this->insert('catalog', [
            'name' => 'Лепёшка ветчина-сыр',
            'shortname' => 'cheesepita',
            'description' => 'Свежеиспечёная лепёшка со сливочным сыром и ветчиной',
            'price' => 69,
            'category' => 'other',
        ]);
        $this->insert('catalog', [
            'name' => 'Сендвич-лаваш',
            'shortname' => 'sandwichpita',
            'description' => 'Сытный перекус в лаваше',
            'price' => 89,
            'category' => 'other',
        ]);
        $this->insert('catalog', [
            'name' => 'Латте',
            'shortname' => 'latte',
            'description' => 'Молочный кофе с нежной сырной пенкой 320мл',
            'price' => 219,
            'category' => 'coffee',
            'popular' => 1,
        ]);
        $this->insert('catalog', [
            'name' => 'Американо',
            'shortname' => 'americano',
            'description' => 'Классический кофе, но со сгущёной сырной пенкой 320мл',
            'price' => 179,
            'category' => 'coffee',
        ]);
        $this->insert('catalog', [
            'name' => 'Моккачино',
            'shortname' => 'mokkachino',
            'description' => 'Молочный кофе с добавлением шоколада и сгущёной сырной пенки 320мл',
            'price' => 289,
            'category' => 'coffee',
            'discount' => 1,
            'discount-price' => 259,
        ]);
        $this->insert('catalog', [
            'name' => 'Раф',
            'shortname' => 'raf',
            'description' => 'Нежный молочный кофе с воздушной сырной пенкой 320мл',
            'price' => 289,
            'category' => 'coffee',
        ]);
        $this->insert('catalog', [
            'name' => 'Айс кофе',
            'shortname' => 'icecoffee',
            'description' => 'Холодный кофе со льдом, в жаркую погоду 320мл',
            'price' => 199,
            'category' => 'coffee',
        ]);
        $this->insert('catalog', [
            'name' => 'Лимонад классический',
            'shortname' => 'classiclimonade',
            'description' => 'Классический напиток из лимона, апельсина и лайма со льдом 400мл',
            'price' => 219,
            'category' => 'limonade',
        ]);
        $this->insert('catalog', [
            'name' => 'Лимонад ваниль лаванда',
            'shortname' => 'vanillimonade',
            'description' => 'Ванильный сладкий лимонад с нотками лаванды 400мл',
            'price' => 259,
            'category' => 'limonade',
            'popular' => 1,
            'discount' => 1,
            'discount-price' => 239,
        ]);
        $this->insert('catalog', [
            'name' => 'Лимонад клубника базилик',
            'shortname' => 'strawberrylimonade',
            'description' => 'Насыщенный клубничный лимонад с листьями базилика 400мл',
            'price' => 249,
            'category' => 'limonade',
        ]);
        $this->insert('catalog', [
            'name' => 'Лимонад манго апельсин',
            'shortname' => 'mangolimonade',
            'description' => 'Апельсиновый лимонад с кусочками манго 400мл',
            'price' => 249,
            'category' => 'limonade',
        ]);
        $this->insert('catalog', [
            'name' => 'Лимонад мохито',
            'shortname' => 'moxito',
            'description' => 'Вкусный классический лимонад с кусочками лимона и лайма 400мл',
            'price' => 219,
            'category' => 'limonade',
        ]);
        $this->insert('catalog', [
            'name' => 'Яблочный фреш',
            'shortname' => 'applefresh',
            'description' => 'Охлаждающий напиток из мякоти яблока 400мл',
            'price' => 249,
            'category' => 'limonade',
        ]);
        $this->insert('catalog', [
            'name' => 'Молочный коктейль ванильный',
            'shortname' => 'vanilmilk',
            'description' => '400мл',
            'price' => 159,
            'category' => 'milkshake',
        ]);
        $this->insert('catalog', [
            'name' => 'Молочный коктейль клубничный',
            'shortname' => 'strawberrymilk',
            'description' => '400мл',
            'price' => 159,
            'category' => 'milkshake',
        ]);
        $this->insert('catalog', [
            'name' => 'Молочный коктейль малиновый',
            'shortname' => 'raspberrymilk',
            'description' => '400мл',
            'price' => 159,
            'category' => 'milkshake',
        ]);
        $this->insert('catalog', [
            'name' => 'Молочный коктейль манго персик',
            'shortname' => 'mangomilk',
            'description' => '400мл',
            'price' => 179,
            'category' => 'milkshake',
        ]);
        $this->insert('catalog', [
            'name' => 'Молочный коктейль слива абрикос',
            'shortname' => 'plumapricotmilk',
            'description' => '400мл',
            'price' => 179,
            'category' => 'milkshake',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
