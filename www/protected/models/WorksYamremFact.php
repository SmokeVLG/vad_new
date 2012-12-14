<?php

/**
 * This is the model class for table "t_works_yamrem_fact".
 *
 * The followings are the available columns in table 't_works_yamrem_fact':
 * @property integer $id
 * @property integer $rf_idOrg
 * @property integer $rf_idRoads
 * @property string $infotime
 * @property string $rf_idUser
 * @property double $remkolgor
 * @property double $remkolpnev
 * @property double $remkolhol
 * @property double $remkolkar
 * @property double $remkolgorS
 * @property double $remkolpnevS
 * @property double $remkolholS
 * @property double $remkolkarS
 * @property string $remkolgorK
 * @property string $remkolpnevK
 * @property string $remkolholK
 * @property string $remkolkarK
 * @property string $datePlan
 */
class WorksYamremFact extends CActiveRecord
{
      
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkYamremFact the static model class
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
		return 't_works_fact';
	}



	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('rf_idOrg, rf_idRoads, infotime, rf_idUser, datePlan', 'required'),
			array('rf_idOrg, rf_idRoads', 'numerical', 'integerOnly'=>true),
			
                    
                       array('remkolgor,remkolpnev,remkolhol,remkolkar,remkolgorS,remkolpnevS,remkolholS,remkolkarS,', 'type','type' => 'float'),
                          
                      
                    
			array('rf_idUser, remkolgorK, remkolpnevK, remkolholK, remkolkarK, datePlan', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rf_idOrg, rf_idRoads, infotime, rf_idUser, remkolgor, remkolpnev, remkolhol, remkolkar, remkolgorS, remkolpnevS, remkolholS, remkolkarS, remkolgorK, remkolpnevK, remkolholK, remkolkarK, datePlan', 'safe', 'on'=>'search'),
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

		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

                 
		$criteria->compare('id',$this->id);
		
                $criteria->compare('rf_idRoads',$this->rf_idRoads);
                $criteria->compare('rf_idOrg',$this->rf_idOrg);
               
                $criteria->compare('infotime',$this->infotime,true);
               
                $criteria->compare('rf_idUser',$this->rf_idUser,true);
              
                
               $criteria->compare('datePlan',$this->datePlan,true);
               
               
            $criteria->compare( 'remkolgor'  ,$this->remkolgor  ,true);
                $criteria->compare( 'remkolgorS' ,$this-> remkolgorS ,true);
                $criteria->compare( 'remkolgorK' ,$this-> remkolgorK ,true);
                $criteria->compare( 'remkolpnev' ,$this-> remkolpnev ,true);
                $criteria->compare( 'remkolpnevS',$this-> remkolpnevS,true);
                $criteria->compare( 'remkolpnevK',$this-> remkolpnevK,true);
                $criteria->compare( 'remkolhol'  ,$this-> remkolhol  ,true);
                $criteria->compare( 'remkolholS' ,$this-> remkolholS ,true);
                $criteria->compare( 'remkolholK' ,$this-> remkolholK ,true);
                $criteria->compare( 'remkolkar'  ,$this-> remkolkar  ,true);
                $criteria->compare( 'remkolkarS' ,$this-> remkolkarS ,true);
                $criteria->compare( 'remkolkarK' ,$this-> remkolkarK ,true);
                           
                         
                   
               
                              
              
               
               
      

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}