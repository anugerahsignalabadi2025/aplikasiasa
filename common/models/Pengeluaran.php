<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pengeluaran".
 *
 * @property int $no
 * @property string $pengeluaran
 */
class Pengeluaran extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengeluaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengeluaran'], 'required'],
            [['pengeluaran'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'pengeluaran' => 'Pengeluaran',
        ];
    }

}
