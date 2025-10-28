<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kas".
 *
 * @property int $no
 * @property string $kas
 */
class Kas extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kas'], 'required'],
            [['kas'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'kas' => 'Kas',
        ];
    }

}
