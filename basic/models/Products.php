<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $product_id
 * @property string $product_cat
 * @property string $product_img
 * @property integer $product_price
 * @property string $product_title
 * @property string $status
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_cat', 'product_img', 'product_price', 'product_title', 'status'], 'required'],
            [['product_price'], 'integer'],
            [['product_cat', 'product_title', 'status'], 'string', 'max' => 100],
            [['product_img'], 'string', 'max' => 300],
            [['product_img'], 'file','extensions'=>'jpg , png , gif']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_cat' => 'Product Cat',
            'product_img' => 'Product Img',
            'product_price' => 'Product Price',
            'product_title' => 'Product Title',
            'status' => 'Status',
        ];
    }
}
