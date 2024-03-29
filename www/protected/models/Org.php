<?php

/**
 * This is the model class for table "t_org".
 *
 * The followings are the available columns in table 't_org':
 * @property integer $id
 * @property string $name
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Users[] $users
 * @property WorkGsm[] $workGsms
 */
class Org extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Org the static model class
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
		return 't_org';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, comment', 'required'),
			array('name, comment', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, comment', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'Users', 'rf_idOrg'),
			'workGsms' => array(self::HAS_MANY, 'WorkGsm', 'rf_idOrg'),
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
                     'rf_idRoads' => 'Дорога [объект-наименование]',
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}