<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "paketinternet".
 *
 * @property int $no
 * @property string|null $paket
 */
class Paketinternet extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paketinternet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['paket'], 'default', 'value' => null],
            [['paket'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'paket' => 'Paket',
        ];
    }

}
