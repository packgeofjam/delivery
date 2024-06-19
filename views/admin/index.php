<?php
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Каталог товаров';
$this->params['breadcrumbs'][] = $this->title;

$dataProvider = new ActiveDataProvider([
    'query' => \app\models\Products::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);

// GridView
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'name',
        'shortname',
        'description',
        'price',
        'category',
        'availability:boolean',
        'popular:boolean',
        'discount:boolean',
        'old-price',

        ['class' => 'yii\grid\ActionColumn',
            'template' => '{update} {delete}',
            'buttons' => [
                $form = ActiveForm::begin(),
                'update' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-pencil">Изменить</span>', $url, [
                        'title' => Yii::t('app', 'Редактировать'),
                    ]);
                },
                ActiveForm::end(),
                $form = ActiveForm::begin(),
                'delete' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-trash">Удалить</span>', $url, [
                        'title' => Yii::t('app', 'Удалить'),
                        'data-confirm' => Yii::t('app', 'Вы уверены, что хотите удалить этот товар?'),
                        'data-method' => 'post',
                    ]);
                },
                ActiveForm::end(),
            ],
        ],
    ],
]);
?>
<a href="/admin/create" class="button basket-btn" style="width: 240px">Добавить товар</a>
