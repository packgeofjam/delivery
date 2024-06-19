<?php

namespace app\models;

use yii\db\ActiveRecord;

class Products extends ActiveRecord
{
    public static function tableName()
    {
        return 'catalog';
    }
    public function rules()
    {
        return [
            [['name', 'shortname', 'price', 'category'], 'required'],
            [['price'], 'integer'],
            [['name', 'shortname', 'price', 'category', 'description'], 'string', 'max' => 255],
            [['availability', 'popular', 'discount'], 'boolean']
        ];
    }
}
