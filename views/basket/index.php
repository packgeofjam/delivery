<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="site-main container">
            <div class="">
                <h1>Корзина</h1>
                <?php if (!empty($basket)): ?>
                    <table class="table table-bordered">
                        <tr>
                            <th>Наименование</th>
                            <th>Цена, руб.</th>
                            <th>Количество</th>
                            <th>Сумма, руб.</th>
                        </tr>
                        <?php foreach ($basket['products'] as $item): ?>
                            <tr>
                                <td><?= $item['name']; ?></td>
                                <td class="text-right"><?= $item['price']; ?></td>
                                <td class="text-right c"><?= $item['count']; ?>
<!--                                    <div class="c">-->
<!--                                        --><?php //= '<form method="post" action="'. Url::toRoute(['basket/plus']).'">
//                                            <input type="hidden" name="id"
//                                                   value="'.$item['id'].'">'. Html::hiddenInput(
//                                            Yii::$app->request->csrfParam,
//                                            Yii::$app->request->csrfToken).
//                                            '<button type="submit" class="counter">+</button>'?>
<!--                                        </form>-->
<!--                                        --><?php //= '<form method="post" action="'. Url::toRoute(['basket/remove']).'">
//                                            <input type="hidden" name="id"
//                                                   value="'.$item['id'].'">'. Html::hiddenInput(
//                                            Yii::$app->request->csrfParam,
//                                            Yii::$app->request->csrfToken).
//                                        '<button type="submit" class="counter">-</button>'?>
<!--                                        </form>-->
<!--                                    </div>-->
                                </td>
                                <td class="text-right"><?= $item['price'] * $item['count']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3" class="text-right">Итого</td>
                            <td class="text-right"><?= $basket['amount']; ?></td>
                        </tr>
                    </table>
                    <a href="basket/clear" class="clear-basket">Очистить корзину</a>
                    <?= '<form method="post" action="'. Url::toRoute(['basket/plus']).'">
                                            <input type="hidden" name="id"
                                                   value="'.$item['id'].'">'. Html::hiddenInput(
                    Yii::$app->request->csrfParam,
                    Yii::$app->request->csrfToken).
                    '<br><div class="c"><a href="/..#catalog" class="button basket-btn">Вернуться в каталог</a>
                     <button type="submit" class="button basket-btn">Оформить заказ</button></div>'?>
                    </form>
                <?php else: ?>
                    <p>Ваша корзина пуста</p>
                    <p style="width: 100%">Для того, чтобы добавить товар в корзину, прейдите в каталог</p>
                    <a href="/..#catalog" class="button basket-btn" style="width: 240px">За покупками!</a>
                <?php endif;?>
            </div>
    </div>