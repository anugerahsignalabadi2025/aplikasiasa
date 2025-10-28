<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asset".
 *
 * @property int $no
 * @property string $namabenda
 * @property string|null $harga
 * @property string|null $qty
 */
class Asset extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['harga', 'qty'], 'default', 'value' => null],
            [['namabenda'], 'required'],
            [['namabenda', 'harga', 'qty'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'namabenda' => 'Namabenda',
            'harga' => 'Harga',
            'qty' => 'Qty',
        ];
    }

}
