<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\datapelangganasa;

/**
 * datapelangganasaSearch represents the model behind the search form of `common\models\datapelangganasa`.
 */
class datapelangganasaSearch extends datapelangganasa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no'], 'integer'],
            [['nama', 'nohp', 'alamat', 'tanggalpasang', 'paket'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = datapelangganasa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'no' => $this->no,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nohp', $this->nohp])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tanggalpasang', $this->tanggalpasang])
            ->andFilterWhere(['like', 'paket', $this->paket]);

        return $dataProvider;
    }
}
