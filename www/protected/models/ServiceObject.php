<?php

/**
 * This is the model class for table "t_service_objects".
 *
 * The followings are the available columns in table 't_service_objects':
 * @property integer $id
 * @property integer $rf_idArea
 * @property string $name
 * @property string $comments
 */
class ServiceObject extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ServiceObject the static model class
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
		return 't_service_objects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rf_idArea, name, ', 'required'),
			array('rf_idArea', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>300),
			array('comments', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rf_idArea, name, comments', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
                // 
                  //  'works' --> имя связи
                    //  'Work' — имя AR-класса, связанного с данным классом, 
                    //  'rf_idServiceObject' -  обозначает один или несколько внешних ключей, используемых для связи.
		return array(
                    'areasSO' => array(self::HAS_MANY, 'Area', 'rf_idArea'),
                    'worksSO' => array(self::BELONGS_TO, 'WorksPlan', 'rf_idServiceObject'),
                    'works_buildSO' => array(self::BELONGS_TO, 'worksBuildPlan', 'rf_idServiceObject'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Код',
			'rf_idArea' => 'Округ',
			'name' => 'Наименование',
			'comments' => 'Комментарии',
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
		$criteria->compare('rf_idArea',$this->rf_idArea);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('comments',$this->comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}