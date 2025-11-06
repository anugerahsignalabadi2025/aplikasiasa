<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "datapelangganasa".
 *
 * @property int $no
 * @property string $nama
 * @property string $alamat
 * @property string $tanggalpasang
 * @property string $paket
 */
class Datapelangganasa extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datapelangganasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'tanggalpasang', 'paket'], 'required'],
            [['nama', 'alamat', 'tanggalpasang', 'paket'], 'string', 'max' => 255],
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
            'alamat' => 'Alamat',
            'tanggalpasang' => 'Tanggalpasang',
            'paket' => 'Paket',
        ];
    }

}
