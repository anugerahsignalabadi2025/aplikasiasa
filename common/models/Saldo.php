<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "saldo".
 *
 * @property int $no
 * @property string|null $saldoperusahaan
 */
class Saldo extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'saldo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['saldoperusahaan'], 'default', 'value' => null],
            [['saldoperusahaan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'saldoperusahaan' => 'Saldoperusahaan',
        ];
    }

}
