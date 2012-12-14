<?php

/**
 * This is the model class for table "t_wishes".
 *
 * The followings are the available columns in table 't_wishes':
 * @property integer $id
 * @property integer $rf_idRoad
 * @property integer $rf_idWorkStatus
 * @property string $comments
 */
class Wish extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wish the static model class
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
		return 't_wishes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rf_idWorkStatus, comments', 'required'),
			array('rf_idRoad, rf_idWorkStatus', 'numerical', 'integerOnly'=>true),
			array('comments', 'length', 'max'=>300),
                        array('ourComments', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rf_idRoad, rf_idWorkStatus, comments', 'safe', 'on'=>'search'),
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
                    'roads' => array(self::HAS_MANY, 'Roads', 'rf_idRoad'),
                    'workStatus' => array(self::HAS_MANY, 'WorkStatus', 'rf_idWorkStatus'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Код',
			'rf_idRoad' => 'Дорога',
			'rf_idWorkStatus' => 'Статус',
			'comments' => 'Текст обращения',
                        'ourComments' => 'Текст ответа',
                        'date_wish' => 'Время обращения',
                        'date_ans' => 'Время ответа'
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
		$criteria->compare('rf_idRoad',$this->rf_idRoad);
		$criteria->compare('rf_idWorkStatus',$this->rf_idWorkStatus);
		$criteria->compare('comments',$this->comments,true);
                $criteria->compare('ourComments',$this->comments,true);                
                $criteria->compare('date_wish',$this->date_wish);                
                $criteria->compare('date_ans',$this->date_ans);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}