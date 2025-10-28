<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $no
 * @property string $nama
 * @property string $paket
 * @property string $nominal
 * @property string|null $sudahbayar
 */
class Pelanggan extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sudahbayar'], 'default', 'value' => null],
            [['nama', 'paket', 'nominal'], 'required'],
            [['nama', 'paket', 'nominal', 'sudahbayar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'nama' => 'Nama',
            'paket' => 'Paket',
            'nominal' => 'Nominal',
            'sudahbayar' => 'Sudahbayar',
        ];
    }

}
