<?php

/**
 * This is the model class for table "risk7.securities".
 *
 * The followings are the available columns in table 'risk7.securities':
 * @property string $security_id
 * @property string $name
 * @property string $security_type_id
 * @property string $security_status_cd
 * @property string $currency_cd
 * @property string $country_cd
 * @property string $region_id
 * @property string $exchange_id
 * @property string $ticker_cd
 * @property string $user_id
 * @property string $group_id
 * @property string $cr_timestamp
 * @property string $up_timestamp
 */
class Securities extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Securities the static model class
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
		return 'risk7.securities';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, security_type_id, security_status_cd, currency_cd, country_cd, region_id', 'required'),
			array('name, ticker_cd', 'length', 'max'=>255),
			array('security_status_cd', 'length', 'max'=>2),
			array('currency_cd, country_cd', 'length', 'max'=>3),
			array('exchange_id, user_id, group_id, cr_timestamp, up_timestamp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('security_id, name, security_type_id, security_status_cd, currency_cd, country_cd, region_id, exchange_id, ticker_cd, user_id, group_id, cr_timestamp, up_timestamp', 'safe', 'on'=>'search'),
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
			'security_id' => 'Security',
			'name' => 'Name',
			'security_type_id' => 'Security Type',
			'security_status_cd' => 'Security Status Cd',
			'currency_cd' => 'Currency Cd',
			'country_cd' => 'Country Cd',
			'region_id' => 'Region',
			'exchange_id' => 'Exchange',
			'ticker_cd' => 'Ticker Cd',
			'user_id' => 'User',
			'group_id' => 'Group',
			'cr_timestamp' => 'Cr Timestamp',
			'up_timestamp' => 'Up Timestamp',
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

		$criteria->compare('security_id',$this->security_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('security_type_id',$this->security_type_id,true);
		$criteria->compare('security_status_cd',$this->security_status_cd,true);
		$criteria->compare('currency_cd',$this->currency_cd,true);
		$criteria->compare('country_cd',$this->country_cd,true);
		$criteria->compare('region_id',$this->region_id,true);
		$criteria->compare('exchange_id',$this->exchange_id,true);
		$criteria->compare('ticker_cd',$this->ticker_cd,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('group_id',$this->group_id,true);
		$criteria->compare('cr_timestamp',$this->cr_timestamp,true);
		$criteria->compare('up_timestamp',$this->up_timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}