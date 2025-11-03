<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "datapelangganasa".
 *
 * @property int $no
 * @property string|null $nama
 * @property string|null $nohp
 * @property string|null $alamat
 * @property string|null $tanggalpasang
 * @property string|null $paket
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
            [['nama', 'nohp', 'alamat', 'tanggalpasang', 'paket'], 'default', 'value' => null],
            [['nama', 'nohp', 'alamat', 'tanggalpasang', 'paket'], 'string', 'max' => 255],
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
            'nohp' => 'Nohp',
            'alamat' => 'Alamat',
            'tanggalpasang' => 'Tanggalpasang',
            'paket' => 'Paket',
        ];
    }

}
