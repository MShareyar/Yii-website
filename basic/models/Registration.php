<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $emai
 * @property string $password
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'emai', 'password'], 'required'],
            [['firstname', 'lastname', 'emai', 'password'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'emai' => 'Email',
            'password' => 'Password',
        ];
    }
}
