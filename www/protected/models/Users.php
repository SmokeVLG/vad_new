<?php

/**
 * This is the model class for table "t_users".
 *
 * The followings are the available columns in table 't_users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $role
 * @property integer $rf_idOrg
 *
 * The followings are the available model relations:
 * @property Org $rfIdOrg
 */
class Users extends CActiveRecord
{
    
    
    
    
         public function validatePassword($password)
    {
         
         ///
         // return ($password===$this->password);
        
        return $this->hashPassword($password)===$this->password;
              
    }
 
    public function hashPassword($password)
    {
        return md5($password);
    }
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 't_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, rf_idOrg', 'numerical', 'integerOnly'=>true),
			array('username, password, role', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, role, rf_idOrg', 'safe', 'on'=>'search'),
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
			'rfIdOrg' => array(self::BELONGS_TO, 'Org', 'rf_idOrg'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'role' => 'Role',
			'rf_idOrg' => 'Rf Id Org',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('rf_idOrg',$this->rf_idOrg);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}