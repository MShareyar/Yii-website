<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $subject
 * @property string $body
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            [['subject'], 'string'],
            [['name', 'email'], 'string', 'max' => 100],
            [['body'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
        ];
    }
}
