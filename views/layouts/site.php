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
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>