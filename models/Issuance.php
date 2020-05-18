<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "issuance".
 *
 * @property int $id
 * @property int $idBook
 * @property int $idUser
 * @property string $dateStart
 * @property string $dateFinish
 *
 * @property Book $idBook0
 * @property User $idUser0
 */
class Issuance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'issuance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idBook', 'idUser', 'dateStart', 'dateFinish'], 'required'],
            [['idBook', 'idUser'], 'integer'],
            [['dateStart', 'dateFinish'], 'safe'],
            [['idBook'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['idBook' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idBook' => 'Id Book',
            'idUser' => 'Id User',
            'dateStart' => 'Date Start',
            'dateFinish' => 'Date Finish',
        ];
    }

    /**
     * Gets query for [[IdBook0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdBook0()
    {
        return $this->hasOne(Book::className(), ['id' => 'idBook']);
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'idUser']);
    }
}
