<?php

/**
 * This is the model class for table "risk7.security_facts".
 *
 * The followings are the available columns in table 'risk7.security_facts':
 * @property string $security_fact_id
 * @property string $security_id
 * @property string $duration_cd
 * @property string $fact_source_id
 * @property string $fact_type_id
 * @property string $date_range
 * @property string $closing_value
 * @property string $opening_value
 * @property string $high_value
 * @property string $low_value
 * @property string $volume
 * @property string $other_facts
 * @property string $user_id
 * @property string $group_id
 * @property string $cr_timestamp
 * @property string $up_timestamp
 */
class SecurityFacts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SecurityFacts the static model class
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
		return 'risk7.security_facts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('security_id, duration_cd, fact_source_id, fact_type_id, date_range, closing_value', 'required'),
			array('duration_cd', 'length', 'max'=>2),
			array('closing_value, opening_value, high_value, low_value', 'length', 'max'=>60),
			array('volume, other_facts, user_id, group_id, cr_timestamp, up_timestamp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('security_fact_id, security_id, duration_cd, fact_source_id, fact_type_id, date_range, closing_value, opening_value, high_value, low_value, volume, other_facts, user_id, group_id, cr_timestamp, up_timestamp', 'safe', 'on'=>'search'),
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
			'security_fact_id' => 'Security Fact',
			'security_id' => 'Security',
			'duration_cd' => 'Duration Cd',
			'fact_source_id' => 'Fact Source',
			'fact_type_id' => 'Fact Type',
			'date_range' => 'Date Range',
			'closing_value' => 'Closing Value',
			'opening_value' => 'Opening Value',
			'high_value' => 'High Value',
			'low_value' => 'Low Value',
			'volume' => 'Volume',
			'other_facts' => 'Other Facts',
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

		$criteria->compare('security_fact_id',$this->security_fact_id,true);
		$criteria->compare('security_id',$this->security_id,true);
		$criteria->compare('duration_cd',$this->duration_cd,true);
		$criteria->compare('fact_source_id',$this->fact_source_id,true);
		$criteria->compare('fact_type_id',$this->fact_type_id,true);
		$criteria->compare('date_range',$this->date_range,true);
		$criteria->compare('closing_value',$this->closing_value,true);
		$criteria->compare('opening_value',$this->opening_value,true);
		$criteria->compare('high_value',$this->high_value,true);
		$criteria->compare('low_value',$this->low_value,true);
		$criteria->compare('volume',$this->volume,true);
		$criteria->compare('other_facts',$this->other_facts,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('group_id',$this->group_id,true);
		$criteria->compare('cr_timestamp',$this->cr_timestamp,true);
		$criteria->compare('up_timestamp',$this->up_timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}