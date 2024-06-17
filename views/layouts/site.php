<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СЫРФЫРС</title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="header container">
        <a href="../../" class="name">
            <img src="/css/img/icon.svg" alt="">
            <p>СЫРФЫРС</p>
        </a>
        <?php
        echo Nav::widget([
            'options' => ['class' => 'nav'],
            'items' => [
                Yii::$app->user->isGuest
                    ? ['label' => 'Login', 'url' => ['/site/login']]
                    : '<li>'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link']
                    )
                    . Html::endForm()
                    . '</li>',
                Yii::$app->user->isGuest
                    ? ['label' => 'Sign up', 'url' => ['../site/signup']]
                    : '<li>'
                    . Html::beginForm(['/site/signup'])
                    . Html::endForm()
                    . '</li>',
            ]
        ]);
        ?>
    </div>
</header>
<main>
    <?php if (!empty($this->params['breadcrumbs'])): ?>
        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
    <?php endif ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>
<footer>
    <div class="header container">
        <div class="footer-column">
            <a href="../../" class="name">
                <img src="/css/img/icon.svg" alt="">
                <p>СЫРФЫРС</p>
            </a>
            <p>+7(915)495-33-65</p>
            <div>
                <a href=""><img src="/css/img/vk.svg" alt=""></a>
                <a href=""><img src="/css/img/telega.svg" alt=""></a>
            </div>
            <p>2024</p>
        </div>
        <div>
            <p><img src="/css/img/location.png" alt="">г. Электросталь. ул. Корешкова 3</p>
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/park_plaza/1242229919/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Парк плаза</a><a href="https://yandex.ru/maps/20523/elektrostal/category/shopping_mall/184108083/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Торговый центр в Электростали</a><a href="https://yandex.ru/maps/20523/elektrostal/category/entertainment_center/184106372/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Развлекательный центр в Электростали</a><iframe src="https://yandex.ru/map-widget/v1/?from=mapframe&ll=38.452207%2C55.785088&mode=poi&poi%5Bpoint%5D=38.447423%2C55.784567&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1242229919&source=mapframe&utm_source=mapframe&z=15.44" width="560" height="150" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>