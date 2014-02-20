<?php

/**
 * This is the model class for table "risk7.portfolio_secs".
 *
 * The followings are the available columns in table 'risk7.portfolio_secs':
 * @property string $portfolio_sec_id
 * @property string $portfolio_id
 * @property string $starting_ts
 * @property string $security_id
 * @property string $investment_volume
 * @property string $investment_rate_in
 * @property string $investment_rate_out
 * @property string $ending_ts
 */
class PortfolioSecs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PortfolioSecs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'risk7.portfolio_secs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('portfolio_id, starting_ts, security_id, investment_volume', 'required'),
			array('investment_volume, investment_rate_in, investment_rate_out', 'length', 'max'=>60),
			array('ending_ts', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('portfolio_sec_id, portfolio_id, starting_ts, security_id, investment_volume, investment_rate_in, investment_rate_out, ending_ts', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'portfolio_sec_id' => 'Portfolio Sec',
			'portfolio_id' => 'Portfolio',
			'starting_ts' => 'Starting Ts',
			'security_id' => 'Security',
			'investment_volume' => 'Investment Volume',
			'investment_rate_in' => 'Investment Rate In',
			'investment_rate_out' => 'Investment Rate Out',
			'ending_ts' => 'Ending Ts',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('portfolio_sec_id',$this->portfolio_sec_id,true);
		$criteria->compare('portfolio_id',$this->portfolio_id,true);
		$criteria->compare('starting_ts',$this->starting_ts,true);
		$criteria->compare('security_id',$this->security_id,true);
		$criteria->compare('investment_volume',$this->investment_volume,true);
		$criteria->compare('investment_rate_in',$this->investment_rate_in,true);
		$criteria->compare('investment_rate_out',$this->investment_rate_out,true);
		$criteria->compare('ending_ts',$this->ending_ts,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}