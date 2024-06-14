<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'delivery'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name);
$query = "SELECT * FROM catalog";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; 
    $row = mysqli_fetch_assoc($result);
    $data[] = $row);

?>
<div class="slider-container">
    <div class="covers">
        <div class="cover cheese-cover container">
            <p>ЗАКАЖИ СОЧНЫЙ СЫРНЫЙ ОБЕД</p>
            <p class="st">20% скидка для новых клиентов</p>
            <button href="" class="button">Использовать промокод</button>
        </div>
        <div class="cover coffee-cover container">
            <p>КОФЕ С СЫРНОЙ ПЕНКОЙ</p>
            <button href="" class="button">Перейти в каталог</button>
        </div>
    </div>
</div>
<button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
<button class="next-button" type="button" aria-label="Посмотреть следующий слайд">&gt;</button>
<div class="catalog container">
    <div class="catalog-menu">
        <button class="menu button-active" data-category="popular">Популярное</button>
        <button class="menu" data-category="pizza">Пицца</button>
        <button class="menu" data-category="burger">Бургеры</button>
        <button class="menu" data-category="snacks">Снеки и соусы</button>
        <button class="menu" data-category="coffee">Кофе</button>
        <button class="menu" data-category="limonade">Лимонад</button>
        <button class="menu" data-category="milkshakes">Молочные коктейли</button>
    </div>
    <div class="catalog-list">
        <?php
        foreach ($data as $row) {
            echo '<div class="catalog-item '; 
            if ($row['popular'] == 1) {
                echo 'popular ';
            };
            if ($row['category'] == 'pizza') {
                echo 'pizza';
            } elseif ($row['category'] == 'burger') {
                echo 'burger';
            } elseif ($row['category'] == 'snacks') {
                echo 'snacks';
            } elseif ($row['category'] == 'coffee') {
                echo 'coffee';
            } elseif ($row['category'] == 'limonade') {
                echo 'limonade';
            } elseif ($row['category'] == 'milkshakes') {
                echo 'milkshakes';
            };
            echo '">
            <img src="css/img/'.$row['shortname'].'.png" alt="">
            <div class="product">
            <p>'.$row['name'].'</p>
            <p class="desc">'.$row['description'].'</p>
            <div class="price-box">';
            if ($row['discount'] == 1) {
                echo '<p>'.$row['discount-price'].' ₽</p>';
            };
            echo '<p ';
            if ($row['discount'] == 1) {
                echo 'class="old-price"';
            };
            echo'>'.$row['price'].' ₽</p>
            </div>
            <button class="button basket-btn">В корзину</button>
            </div>
            </div>';
        }
        ?>
        <script src="scripts/filter.js"></script>
    </div>
</div>
<script src="scripts/script.js"></script>
