<?php

/**
 * This is the model class for table "t_work_kalach".
 *
 * The followings are the available columns in table 't_work_kalach':
 * @property integer $id
 * @property double $toplivo
 * @property double $benzin80
 * @property double $benzin92
 * @property double $karti
 * @property integer $rf_idOrg
 * @property string $datePlan
 * @property string $infotime
 * @property string $rf_idUser
 */
class WorkKalach extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkKalach the static model class
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
		return 't_work_kalach';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rf_idOrg, datePlan, infotime, rf_idUser', 'required'),
			array('rf_idOrg', 'numerical', 'integerOnly'=>true),
			array('toplivo, benzin80, benzin92, karti', 'numerical'),
			array('datePlan, rf_idUser', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, toplivo, benzin80, benzin92, karti, rf_idOrg, datePlan, infotime, rf_idUser', 'safe', 'on'=>'search'),
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
			
			'benzin80' => 'Бензин 80-ый',
			'benzin92' => 'Бензин 92-ой',
			'id' => 'ID',                                      
                        'remkolgor'  => 'Ямочный ремонт горячей АБС',
                        'remkolgorS'   =>'Площадь ямочного ремонт',
                        'remkolgorK' => 'На каком километре?',
                        'remkolpnev' => 'Ямочный ремонт пневмонабросом',
                        'remkolpnevS' => 'Площадь ямочного ремонт',
                        'remkolpnevK' => 'На каком километре?',
                        'remkolhol' => 'Ямочный ремонт холодной АБС',
                        'remkolholS' => 'Площадь ямочного ремонт',
                        'remkolholK' => 'На каком километре?',
                        'remkolkar'  => 'Ямочный ремонт  картами',
                        'remkolkarS' => 'Площадь ямочного ремонт',
                        'remkolkarK'  => 'На каком километре?',                        
		        'rf_idRoadsBuild' => 'Дорога [Строительство]',                      
                        'rf_idRoads' => 'Дорога [объект-наименование]',
                        'rf_idOrg' => 'Организация',                                       
			'infotime' => 'Время подачи информации',			
                        'obstanovka' => 'Дорожная обстановка',                    
                        'rf_idWorkStatus' => 'Состояние',
                        'rf_idWorkCat' => 'Вид работ',                        
                        'pogoda' => 'Данные о погоде',
                        'rf_idUser' => 'Дежурный',                        
                        'cKDM' => 'КДМ',
                        'cK700' => 'K700',
                        'cT100' => 'T100',
                        'cAGR' => 'А/гр',
                        'Avtokran' => 'Автокран',
                        'cROTOR' => 'Ротор',
                        'cBULD' => 'Бульд.',
                        'cPOGR' => 'Погруз',                    
                        'datePlan' => 'Дата наряда', 
                        'ABS' => 'Асфальтобетонная смесь  ',
                        'sheben' => 'Щебень ',                        
                        'MTZ80' => 'МТЗ-80',
                        'T150' => 'T-150',
                        'T170' => 'T-170',
                        'Benzovoz' => 'Бензовоз',
                        'Bitunovoz' => 'Битуновоз',
                        'asfaltouk' => 'Асфальтоукладчики',
                        'katok' => 'Каток',
                        'vibropl' => 'Виброплиты',
                        'vozduhduv' => 'Воздуходувка',                    
                        'motokos' => 'Мотокосилки',
                        'bus' => 'Автобусы/Вахтовые автомобили',
                        'samosv' => 'Самосвалы',                    
                        'Zil' => 'Зил',
                        'Isk' => 'Эскаватор',                    
                        'Avtogudronator' => 'Автогудронатор',
                        'D40' => 'T-40',                   
                        'ABZ' => 'Работает ли завод АБЗ (да/нет)',
                        'PGM' => 'ПГМ(Дробное число через точку 5.5)',
                        'uchdor' => 'Участок дороги',
                    'quantityRes'=>'Количество ПСС',
                    'toplivo'=>'Топливо',
                        'benzin'=>'Бензин',
                        'karti'	=>'Топливные карты',
                    'id'=>'Идентификатор',	
                   'lip'=>'Липки',
                    'zim'=>'Зимовской',
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
		$criteria->compare('toplivo',$this->toplivo);
		$criteria->compare('benzin80',$this->benzin80);
		$criteria->compare('benzin92',$this->benzin92);
		$criteria->compare('karti',$this->karti);
		$criteria->compare('rf_idOrg',$this->rf_idOrg);
		$criteria->compare('datePlan',$this->datePlan,true);
		$criteria->compare('infotime',$this->infotime,true);
		$criteria->compare('rf_idUser',$this->rf_idUser,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}