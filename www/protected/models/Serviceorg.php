<?php

/**
 * This is the model class for table "t_serviceorg".
 *
 * The followings are the available columns in table 't_serviceorg':
 * @property integer $id
 * @property integer $rf_idOrg
 * @property integer $rf_idRoad
 */
class Serviceorg extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Serviceorg the static model class
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
		return 't_serviceorg';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rf_idOrg, rf_idRoad', 'required'),
			array('rf_idOrg, rf_idRoad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rf_idOrg, rf_idRoad', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'rf_idOrg' => 'Rf Id Org',
			'rf_idRoad' => 'Rf Id Roads',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('rf_idOrg',$this->rf_idOrg);
		$criteria->compare('rf_idRoad',$this->rf_idRoad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}