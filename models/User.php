<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property string $birthday
 *
 * @property Issuance[] $issuances
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname', 'birthday'], 'required'],
            [['birthday'], 'safe'],
            [['lastname', 'firstname'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'birthday' => 'Birthday',
        ];
    }

    /**
     * Gets query for [[Issuances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIssuances()
    {
        return $this->hasMany(Issuance::className(), ['idUser' => 'id']);
    }
}
