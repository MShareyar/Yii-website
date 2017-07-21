<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $cat_id
 * @property string $cat_title
 * @property string $cat_img
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_title', 'cat_img'], 'required'],
            [['cat_title', 'cat_img'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_title' => 'Cat Title',
            'cat_img' => 'Cat Img',
        ];
    }
}
