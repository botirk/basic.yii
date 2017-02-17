<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lead".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthday
 * @property integer $city_id
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property integer $pasport_code
 *
 * @property City $city
 */
class Lead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lead';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'birthday', 'city_id', 'address', 'email', 'phone'], 'required'],
            [['birthday'], 'safe'],
            [['city_id', 'pasport_code'], 'integer'],
            [['first_name', 'last_name'], 'string','length' => [2,60]],
            [['address'], 'string', 'length' => [2,255]],
            [['email'], 'email'],
            [['phone'], 'string', 'length' => [5,15]],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'birthday' => 'Birthday',
            'city_id' => 'City ID',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'pasport_code' => 'Pasport Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }
}
