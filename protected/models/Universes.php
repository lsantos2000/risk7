<?php

/**
 * This is the model class for table "risk7.universes".
 *
 * The followings are the available columns in table 'risk7.universes':
 * @property string $universe_id
 * @property string $univ_status_cd
 */
class Universes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Universes the static model class
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
		return 'risk7.universes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('univ_status_cd', 'required'),
			array('univ_status_cd', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('universe_id, univ_status_cd', 'safe', 'on'=>'search'),
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
			'universe_id' => 'Universe',
			'univ_status_cd' => 'Univ Status Cd',
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

		$criteria->compare('universe_id',$this->universe_id,true);
		$criteria->compare('univ_status_cd',$this->univ_status_cd,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}