<?php

/**
 * This is the model class for table "t_works_plan".
 *
 * The followings are the available columns in table 't_works_plan':
 * @property integer $id
 * @property integer $rf_idOrg
 * @property integer $rf_idRoads
 * @property string $rf_idWorkCat
 * @property double $quantityRes
 * @property string $infotime
 * @property integer $rf_idWorkStatus
 * @property string $pogoda
 * @property string $rf_idUser
 * @property integer $cKDM
 * @property integer $cK700
 * @property integer $cT100
 * @property integer $cAGR
 * @property integer $Avtokran
 * @property integer $cROTOR
 * @property integer $cBULD
 * @property integer $cPOGR
 * @property string $obstanovka
 * @property double $ABS
 * @property double $sheben
 * @property double $pesok
 * @property integer $MTZ80
 * @property integer $T150
 * @property integer $T170
 * @property integer $Benzovoz
 * @property integer $Bitunovoz
 * @property integer $asfaltouk
 * @property integer $katok
 * @property integer $vibropl
 * @property integer $vozduhduv
 * @property integer $motokos
 * @property integer $bus
 * @property integer $samosv
 * @property string $ABZ
 * @property double $PGM
 * @property string $uchdor
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
 * @property integer $Zil
 * @property integer $Isk
 * @property integer $Avtogudronator
 * @property integer $D40
 * @property string $datePlan
 */
class WorksPlan extends CActiveRecord
{
    
     public $infotimeS;
      public $infotimeF;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorksPlan the static model class
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
		return 't_works_plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rf_idOrg,  rf_idWorkCat, infotime, pogoda, rf_idUser, datePlan', 'required'),
			array('rf_idOrg, rf_idRoads, rf_idWorkStatus, cKDM, cK700, cT100, cAGR, Avtokran, cROTOR, cBULD, cPOGR, MTZ80, T150, T170, Benzovoz, Bitunovoz, asfaltouk, katok, vibropl, vozduhduv, motokos, bus, samosv, Zil, Isk, Avtogudronator, D40', 'numerical', 'integerOnly'=>true),
			array('quantityRes, ABS, sheben, pesok, PGM, remkolgor, remkolpnev, remkolhol, remkolkar, remkolgorS, remkolpnevS, remkolholS, remkolkarS', 'numerical'),
			array('rf_idWorkCat', 'length', 'max'=>1000),
			array('pogoda, rf_idUser, obstanovka, ABZ, uchdor, remkolgorK, remkolpnevK, remkolholK, remkolkarK, datePlan', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rf_idOrg, rf_idRoads, rf_idWorkCat, quantityRes, infotime, rf_idWorkStatus, pogoda, rf_idUser, cKDM, cK700, cT100, cAGR, Avtokran, cROTOR, cBULD, cPOGR, obstanovka, ABS, sheben, pesok, MTZ80, T150, T170, Benzovoz, Bitunovoz, asfaltouk, katok, vibropl, vozduhduv, motokos, bus, samosv, ABZ, PGM, uchdor, remkolgor, remkolpnev, remkolhol, remkolkar, remkolgorS, remkolpnevS, remkolholS, remkolkarS, remkolgorK, remkolpnevK, remkolholK, remkolkarK, Zil, Isk, Avtogudronator, D40, datePlan', 'safe', 'on'=>'search'),
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('rf_idOrg',$this->rf_idOrg);
		$criteria->compare('rf_idRoads',$this->rf_idRoads);
		$criteria->compare('rf_idWorkCat',$this->rf_idWorkCat,true);
		$criteria->compare('quantityRes',$this->quantityRes);
		$criteria->compare('infotime',$this->infotime,true);
		$criteria->compare('rf_idWorkStatus',$this->rf_idWorkStatus);
		$criteria->compare('pogoda',$this->pogoda,true);
		$criteria->compare('rf_idUser',$this->rf_idUser,true);
		$criteria->compare('cKDM',$this->cKDM);
		$criteria->compare('cK700',$this->cK700);
		$criteria->compare('cT100',$this->cT100);
		$criteria->compare('cAGR',$this->cAGR);
		$criteria->compare('Avtokran',$this->Avtokran);
		$criteria->compare('cROTOR',$this->cROTOR);
		$criteria->compare('cBULD',$this->cBULD);
		$criteria->compare('cPOGR',$this->cPOGR);
		$criteria->compare('obstanovka',$this->obstanovka,true);
		$criteria->compare('ABS',$this->ABS);
		$criteria->compare('sheben',$this->sheben);
		$criteria->compare('pesok',$this->pesok);
		$criteria->compare('MTZ80',$this->MTZ80);
		$criteria->compare('T150',$this->T150);
		$criteria->compare('T170',$this->T170);
		$criteria->compare('Benzovoz',$this->Benzovoz);
		$criteria->compare('Bitunovoz',$this->Bitunovoz);
		$criteria->compare('asfaltouk',$this->asfaltouk);
		$criteria->compare('katok',$this->katok);
		$criteria->compare('vibropl',$this->vibropl);
		$criteria->compare('vozduhduv',$this->vozduhduv);
		$criteria->compare('motokos',$this->motokos);
		$criteria->compare('bus',$this->bus);
		$criteria->compare('samosv',$this->samosv);
		$criteria->compare('ABZ',$this->ABZ,true);
		$criteria->compare('PGM',$this->PGM);
		$criteria->compare('uchdor',$this->uchdor,true);
		$criteria->compare('remkolgor',$this->remkolgor);
		$criteria->compare('remkolpnev',$this->remkolpnev);
		$criteria->compare('remkolhol',$this->remkolhol);
		$criteria->compare('remkolkar',$this->remkolkar);
		$criteria->compare('remkolgorS',$this->remkolgorS);
		$criteria->compare('remkolpnevS',$this->remkolpnevS);
		$criteria->compare('remkolholS',$this->remkolholS);
		$criteria->compare('remkolkarS',$this->remkolkarS);
		$criteria->compare('remkolgorK',$this->remkolgorK,true);
		$criteria->compare('remkolpnevK',$this->remkolpnevK,true);
		$criteria->compare('remkolholK',$this->remkolholK,true);
		$criteria->compare('remkolkarK',$this->remkolkarK,true);
		$criteria->compare('Zil',$this->Zil);
		$criteria->compare('Isk',$this->Isk);
		$criteria->compare('Avtogudronator',$this->Avtogudronator);
		$criteria->compare('D40',$this->D40);
		$criteria->compare('datePlan',$this->datePlan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}