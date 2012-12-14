<?php

/**
 * This is the model class for table "t_work_work".
 *
 * The followings are the available columns in table 't_work_work':
 * @property integer $id
 * @property string $name
 * @property string $comment
 * @property integer $rf_idWorkCat
 */
class WorkWork extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkWork the static model class
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
		return 't_work_work';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, comment, rf_idWorkCat', 'required'),
			array('rf_idWorkCat', 'numerical', 'integerOnly'=>true),
			array('name, comment', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, comment, rf_idWorkCat', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'comment' => 'Comment',
			'rf_idWorkCat' => 'Rf Id Work Cat',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('rf_idWorkCat',$this->rf_idWorkCat);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}