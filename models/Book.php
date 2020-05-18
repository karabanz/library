<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 * @property int $idGenre
 * @property int $idPublisher
 *
 * @property Genre $idGenre0
 * @property Publisher $idPublisher0
 * @property Issuance[] $issuances
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'idGenre', 'idPublisher'], 'required'],
            [['idGenre', 'idPublisher'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['idGenre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['idGenre' => 'id']],
            [['idPublisher'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['idPublisher' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'idGenre' => 'Id Genre',
            'idPublisher' => 'Id Publisher',
        ];
    }

    /**
     * Gets query for [[IdGenre0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdGenre0()
    {
        return $this->hasOne(Genre::className(), ['id' => 'idGenre']);
    }

    /**
     * Gets query for [[IdPublisher0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdPublisher0()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'idPublisher']);
    }

    /**
     * Gets query for [[Issuances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIssuances()
    {
        return $this->hasMany(Issuance::className(), ['idBook' => 'id']);
    }
}
