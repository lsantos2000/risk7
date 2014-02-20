<?php

/**
 * This is the model class for table "risk7.asset_allocation_models".
 *
 * The followings are the available columns in table 'risk7.asset_allocation_models':
 * @property string $aa_model_uuid
 * @property string $aa_model_name
 * @property string $aa_model_description
 * @property string $excpected_ror
 * @property string $risk_factor
 * @property string $user_uuid
 * @property string $group_uuid
 * @property string $cr_timestamp
 * @property string $up_timestamp
 */
class AssetAllocationModels extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AssetAllocationModels the static model class
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
		return 'risk7.asset_allocation_models';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aa_model_uuid, aa_model_name, aa_model_description, excpected_ror, risk_factor', 'required'),
			array('aa_model_name', 'length', 'max'=>255),
			array('excpected_ror, risk_factor', 'length', 'max'=>60),
			array('user_uuid, group_uuid, cr_timestamp, up_timestamp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('aa_model_uuid, aa_model_name, aa_model_description, excpected_ror, risk_factor, user_uuid, group_uuid, cr_timestamp, up_timestamp', 'safe', 'on'=>'search'),
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
			'aa_model_uuid' => 'Aa Model Uuid',
			'aa_model_name' => 'Aa Model Name',
			'aa_model_description' => 'Aa Model Description',
			'excpected_ror' => 'Excpected Ror',
			'risk_factor' => 'Risk Factor',
			'user_uuid' => 'User Uuid',
			'group_uuid' => 'Group Uuid',
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

		$criteria->compare('aa_model_uuid',$this->aa_model_uuid,true);
		$criteria->compare('aa_model_name',$this->aa_model_name,true);
		$criteria->compare('aa_model_description',$this->aa_model_description,true);
		$criteria->compare('excpected_ror',$this->excpected_ror,true);
		$criteria->compare('risk_factor',$this->risk_factor,true);
		$criteria->compare('user_uuid',$this->user_uuid,true);
		$criteria->compare('group_uuid',$this->group_uuid,true);
		$criteria->compare('cr_timestamp',$this->cr_timestamp,true);
		$criteria->compare('up_timestamp',$this->up_timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}