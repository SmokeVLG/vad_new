<?php

class SiteController extends Controller
{
    /**
	 * Declares class-based actions.
	 */
    
	public function filters()
    {
        return array(
            'accessControl',
        );
    }
   
    
   public function accessRules()
    {
        return array(
            array('deny',
                'actions'=>array('contact','error','index','monitoring','reportMon','roadMonitor','workMonitor'),
                'users'=>array('?'),
            ),
            
             array('allow',
                'actions'=>array('contact','error','index','monitoring','reportMon','roadMonitor','workMonitor'),
                'roles'=>array('admin'),
            ),
       
        );
    } 
    
    
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
   
  
        private function MygetDatesPrev()
        {
            $now = (int)date("H");
            if( $now  > 5)
            {                  
                Yii::app()->params['myDateRepFormat']= date('Y-m-d');                   
                Yii::app()->params['myDateRepFormat'].= ' 06:00:00';           
            }
            else
            {                                        
                Yii::app()->params['myDateRepFormat']= date('Y-m-d', strtotime(date('Y-m-d', strtotime(date('d-m-Y'))) . ' -1 day'));                 
                Yii::app()->params['myDateRepFormat'].= ' 06:00:00';               
            }                     
        }
        
        /**
         * 
		*/
        
        //Действие при нажатие на ссылку МониторингПлан
		public function actionMonitoringplan()
		{	
                        $this->MygetDatesPrev();  //Инициализация переменных
			
			Yii::app()->db->pdoInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
			
			//Расчет общей суммы
			$sql_sum  = 'CALL GetSumMonitorToDatePlanVad(\''.Yii::app()->params['myDateRepFormat'].'\')';
			$dataSumProvider = new CSqlDataProvider($sql_sum, array(
			   //'keyField'=>'num',
			   'pagination'=>false,
                        
			));
			
			//Расчет остальных параметров
            $sql_sum  = 'CALL GetDataMonitorToDateMaxPlanVad(\''.Yii::app()->params['myDateRepFormat'].'\')';
            $dataProvider = new CSqlDataProvider($sql_sum, array(
               //'keyField'=>'num',
               'pagination'=>false,
              
            ));
			
            $this->render('serviceObjectPlan', array('dataProvider'=>$dataProvider,
                                                 'dataSumProvider'=>$dataSumProvider->getData()
            ));           
        }
        
        
         //Действие при нажатие на ссылку МониторингФакт
		public function actionMonitoringfact()
		{	
            $this->MygetDatesPrev();  //Инициализация переменных
			
			Yii::app()->db->pdoInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
			
			//Расчет общей суммы
			$sql_sum  = 'CALL GetSumMonitorToDateFactVad(\''.Yii::app()->params['myDateRepFormat'].'\')';
			$dataSumProvider = new CSqlDataProvider($sql_sum, array(
			   //'keyField'=>'num',
			   'pagination'=>false,
                                
			));
			
			//Расчет остальных параметров
            $sql_sum  = 'CALL GetDataMonitorToDateMaxFactVad(\''.Yii::app()->params['myDateRepFormat'].'\')';
            $dataProvider = new CSqlDataProvider($sql_sum, array(
               //'keyField'=>'num',
               'pagination'=>false,
                    
            ));
			
            $this->render('serviceObjectFact', array('dataProvider'=>$dataProvider,
                                                 'dataSumProvider'=>$dataSumProvider->getData()
            ));           
        }
        
        
        
       
          //Действие при нажатие на ссылку МониторингПлан
		public function actionMonitoringyamremplan()
		{	
                        $this->MygetDatesPrev();  //Инициализация переменных
			
			Yii::app()->db->pdoInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
			
			$time = date('d-m-Y');  
			$sql  = 'CALL GetSumMonitorToDateDrsuYamremPlanNew2Yamrem(\''.$time.'\')';
			$dataProvider = new CSqlDataProvider($sql, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                        
			));
                        
                        
                        $sql2  = 'CALL GetSumMonitorToDateDrsuYamremPlanNot2Yamrem(\''.Yii::app()->params['myDateRepFormat'].'\')';
			$dataProvider2 = new CSqlDataProvider($sql2, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                           
			));
                        
			
                 $this->render('serviceObjectDrsuYamremPlan2', array('dataProvider'=>$dataProvider,
                                                                    'dataProvider2'=>$dataProvider2,
                                                          ));      
        }
        
       
        
        //Действие при нажатие на ссылку МониторингФакт
		public function actionMonitoringyamremfact()
		{	
                        $this->MygetDatesPrev();  //Инициализация переменных
			
			Yii::app()->db->pdoInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
			 
                        
                        
			$time = date('d-m-Y', strtotime(date('d-m-Y', strtotime(date('d-m-Y'))) . ' -1 day'));   
			$sql  = 'CALL GetSumMonitorToDateDrsuYamremFactNew2Yamrem(\''.$time.'\')';
			$dataProvider = new CSqlDataProvider($sql, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                               
			));
                        
                         $sql2  = 'CALL GetSumMonitorToDateDrsuYamremFactNot2Yamrem(\''.$time.'\')';
			$dataProvider2 = new CSqlDataProvider($sql2, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                             
			));
                        
			
                 $this->render('serviceObjectDrsuYamremFact2', array('dataProvider'=>$dataProvider,
                                                                    'dataProvider2'=>$dataProvider2,
                                                          ));          
        }
		public function actionMonitoringgsm()
		{	
                        $this->MygetDatesPrev();  //Инициализация переменных
			
			Yii::app()->db->pdoInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
			
			$time = date('d-m-Y', strtotime(date('d-m-Y', strtotime(date('d-m-Y'))) . ' -0 day'));   
			$sql  = 'CALL GetSumMonitorToDateDrsuGSMNewGsm(\''.$time.'\')';
			$dataProvider = new CSqlDataProvider($sql, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                            
			));
                        
                        $time2 = date('d-m-Y', strtotime(date('d-m-Y', strtotime(date('d-m-Y'))) . ' -0 day'));   
			$sql2  = 'CALL GetSumMonitorToDateDrsuGSMNewGsmVku(\''.$time2.'\')';
			$dataProvider2 = new CSqlDataProvider($sql2, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                            
			));
                        
                        
                        $time5 = date('d-m-Y', strtotime(date('d-m-Y', strtotime(date('d-m-Y'))) . ' -0 day'));   
			$sql5  = 'CALL GetSumMonitorToDateDrsuGSMNewGsmKal(\''.$time5.'\')';
			$dataProvider5 = new CSqlDataProvider($sql5, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                            
			));
                        
           
                        
                        $time3 = date('d-m-Y', strtotime(date('d-m-Y', strtotime(date('d-m-Y'))) . ' -0 day'));  
                        
                         //    print_r($time3); die;
                             
                        $sql3  = 'CALL GetSumMonitorToDateDrsuGSMNotGsm(\''.$time3.'\')';
			$dataProvider3 = new CSqlDataProvider($sql3, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                           
			));
                        
                         $time4 = date('d-m-Y', strtotime(date('d-m-Y', strtotime(date('d-m-Y'))) . ' -0 day'));   
                        $sql4  = 'CALL GetSumMonitorToDateDrsuGSMNotGsmVku(\''.$time4.'\')';
			$dataProvider4 = new CSqlDataProvider($sql4, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                           
			));
                        
                        $time6 = date('d-m-Y', strtotime(date('d-m-Y', strtotime(date('d-m-Y'))) . ' -0 day'));   
                        $sql6  = 'CALL GetSumMonitorToDateDrsuGSMNotGsmKal(\''.$time6.'\')';
			$dataProvider6 = new CSqlDataProvider($sql6, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                           
			));
              //  print_r($time4);die;
			
                 $this->render('serviceObjectDrsuGSM', array('dataProvider'=>$dataProvider,
                                                             'dataProvider2'=>$dataProvider2,
                                                             'dataProvider3'=>$dataProvider3,
                                                             'dataProvider4'=>$dataProvider4,
                                                             'dataProvider5'=>$dataProvider5,
                                                             'dataProvider6'=>$dataProvider6,
                                                          ));          
        }

               
        
                 
                
                
                
                
                
                
                
                
                
                
                
                 //Действие при нажатие на ссылку МониторингФакт
		public function actionMonitoringdrsu()
		{	
                     $this->MygetDatesPrev();  //Инициализация переменных
			
			Yii::app()->db->pdoInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
			
			
                        
                        $time0 = date('d-m-Y');   
                        print_r($time0);
                        
			$sql  = 'CALL GetSumMonitorToDateDrsuVad(\''.$time0.'\')';
			$dataProvider = new CSqlDataProvider($sql, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                              
			));
                                                
                        $sql2  = 'CALL GetSumMonitorToDateDrsuNotVad(\''.$time0.'\')';
			$dataProvider2 = new CSqlDataProvider($sql2, array(
			   'keyField'=>'num',
			   'pagination'=>false,
                           
			));
                                             
                        
                        
			
                 $this->render('serviceObjectDrsu', array('dataProvider'=>$dataProvider,
                                                          'dataProvider2'=>$dataProvider2,
                                                          
                                                          ));           
                }
                
                
                
                
                
                
            
        
        public function actionRoadMonitorPlan()
		{  
           $serviceObj = intval($_GET['so']);//Инициализация переменной
           
           $this->MygetDatesPrev();  //Инициализация переменных  
           
           //Расчет данных по определенному району
//              
           $sql = 'CALL GetDataRoadMonitorToDatePlanVad(\''.Yii::app()->params['myDateRepFormat'].'\',\''.$serviceObj.'\')';
           $dataProvider = new CSqlDataProvider($sql, array(
               'keyField'=>'num',
               'pagination'=>false,
              
           ));
           
           //Ссылка назад
           $url_back = $this->createUrl('monitoring');
           
           //print_arr($dataProvider->getData()); die;           
            
           $this->render('roadsPlan', array(
               'serviceObj'=>ServiceObject::model()->findByPk($serviceObj)->name,
               'dataProvider'=>$dataProvider,
               'url_back'=>$url_back));
	}
        
        public function actionRoadMonitorFact()
		{  
           $serviceObj = intval($_GET['so']);//Инициализация переменной
           
           $this->MygetDatesPrev();  //Инициализация переменных  
           
           //Расчет данных по определенному району
//              
           $sql = 'CALL GetDataRoadMonitorToDateFactVad(\''.Yii::app()->params['myDateRepFormat'].'\',\''.$serviceObj.'\')';
           $dataProvider = new CSqlDataProvider($sql, array(
               'keyField'=>'num',
               'pagination'=>false,
              
           ));
           
           //Ссылка назад
           $url_back = $this->createUrl('monitoring');
           
           //print_arr($dataProvider->getData()); die;           
            
           $this->render('roadsFact', array(
               'serviceObj'=>ServiceObject::model()->findByPk($serviceObj)->name,
               'dataProvider'=>$dataProvider,
               'url_back'=>$url_back));
	}

        public function actionWorkMonitorPlan()
	{  
            
            //Инициализация переменных
           $road = intval($_GET['ro']);
           $serviceObject = intval($_GET['so']);
           $this->MygetDatesPrev();

       
           $sql='CALL GetDataWorkMonitorToDatePlanVad(\''.Yii::app()->params['myDateRepFormat'].'\',\''.$road.'\')';
           $dataProvider = new CSqlDataProvider($sql, array(
               'keyField'=>'num',
               'pagination'=>false,
            
           ));
           
         
           
           $url_back = $this->createUrl('roadmonitorplan', array('so'=>$serviceObject)); 
            
           $this->render('works', array(
               'road'=>Roads::model()->findByPk($road)->name,               
               'dataProvider'=>$dataProvider,
               'url_back'=>$url_back
           ));
	}
        
        
         public function actionWorkMonitorFact()
	{  
            
            //Инициализация переменных
           $road = intval($_GET['ro']);
           $serviceObject = intval($_GET['so']);
           $this->MygetDatesPrev();

       
           $sql='CALL GetDataWorkMonitorToDateVad(\''.Yii::app()->params['myDateRepFormat'].'\',\''.$road.'\')';
           $dataProvider = new CSqlDataProvider($sql, array(
               'keyField'=>'num',
               'pagination'=>false,
            
           ));
           
         
           
           $url_back = $this->createUrl('roadmonitorfact', array('so'=>$serviceObject)); 
            
           $this->render('works', array(
               'road'=>Roads::model()->findByPk($road)->name,               
               'dataProvider'=>$dataProvider,
               'url_back'=>$url_back
           ));
	}

        /*
         * Создание отчета Факт
         */        
        public function actionReportMonDRPP()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
       
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
      
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                   
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        
             
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
               
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDatePlanVad(\''.$dateRep.'\', \''.$dateRep3.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
              
                    
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainDRPP', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    ));
           }
	}
        
        
        
        
         /*
         * Создание отчета Факт
         */        
        public function actionReportMonDRPPR()
	{  
            
            $org = $_POST['Wid_org']; 
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
         
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
     
           
           
           
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        
        
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
         
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDatePlanRVad(\''.$dateRep.'\', \''.$dateRep3.'\', \''.$org.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                
                    
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainDRPPR', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    'org'=>$org,
                    ));
           }
	}
        
        
        public function actionReportMonDRPFR()
	{  
            
            $org = $_POST['Wid_org']; 
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
           
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
           
           
           
           
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                   
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        
               
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
          
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateFactRVad(\''.$dateRep.'\', \''.$dateRep3.'\', \''.$org.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                   
                    
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainDRPFR', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    'org'=>$org,
                    ));
           }
	}
        
        
        
        public function actionReportMonYRPFR()
	{  
            
            $org = $_POST['Wid_org']; 
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
         
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
         
           
           
           
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                 
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        
               
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
          
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateYamremFactRYamrem(\''.$dateRep.'\', \''.$dateRep3.'\', \''.$org.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                   
                    
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainYRPFR', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    'org'=>$org,
                    ));
           }
	}
        
        
               public function actionReportMonYRPPR()
	{  
            
            $org = $_POST['Wid_org']; 
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
     
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
           
           
           
           
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
            
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        
      
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
             
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateYamremPlanRYamrem(\''.$dateRep.'\', \''.$dateRep3.'\', \''.$org.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
              
                    
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainYRPPR', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    'org'=>$org,
                    ));
           }
	}
        
         /*
         * Создание отчета План
         */        
        public function actionReportMonDRPF()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
          
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
       
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
            
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                      
              
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
              
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateFactVad(\''.$dateRep.'\', \''.$dateRep3.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                   
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainDRPF', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    ));
           }
	}
        
        
         public function actionReportMonGSM()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
          
        
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
            
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                      
              
               
                        
              
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateGSM(\''.$dateRep.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                   
                ));

                
                  // Объекты
                $sql2 = 'CALL GetDataReportMonToDateGSMVku(\''.$dateRep.'\')'; 
                
                $dataProviderSO2 = new CSqlDataProvider($sql2, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                   
                ));
                

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainGSM', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,                   
                    ));
                
                
                 $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainGSMVku', array(
                    
                    'dataSO'=>$dataProviderSO2->getData(), 
                     'url_back'=>$url_back,
                                     
                    ));
                
           }
	}
        
       
          /*
         * Создание отчета План
         */        
        public function actionReportMonYRPF()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
        
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
        
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
               
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        
            
               
                 
               $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
               
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateYamremFactYamrem(\''.$dateRep.'\', \''.$dateRep3.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                  
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainYRPF', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    ));
           }
	}
            public function actionReportMonYRPFS()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !        
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
        
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                 
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                    
            
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
               
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateYamremFactSYamrem(\''.$dateRep.'\', \''.$dateRep3.'\')';                 
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainYRPFS', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    ));
           }
	}
        
           public function actionReportMonYRPFSR()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
        
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
        
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                    
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        
            
               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
               
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateYamremFactSRYamrem(\''.$dateRep.'\', \''.$dateRep3.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                 
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainYRPFSR', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    ));
           }
	}

                public function actionReportMonYRPP()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
    
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
        
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
               
                // Получаем организации
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false
                ));
                $url_back = $this->createUrl('worksPlan/admin'); 
                
                $dateRep=date('d-m-Y', strtotime($dateRep));                        

               
                 $dateRep3=date('d-m-Y', strtotime($dateRep3));                        
             
               
                
             
                // Объекты
                $sql = 'CALL GetDataReportMonToDateYamremPlanYamrem(\''.$dateRep.'\', \''.$dateRep3.'\')'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
         
                ));

            

                $this->renderPartial('application.views.backend.worksPlan.rptMonitor.mainYRPP', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back,
                    'dateRep'=>$dateRep,
                    'dateRep3'=>$dateRep3,
                    ));
           }
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login() && Yii::app()->user->checkAccess('admin'))
				$this->redirect(Yii::app()->user->returnUrl);
                        
                        
                         if( !Yii::app()->user->checkAccess('admin'))
                        {
			    echo ('Для просмотра данной страницы необходимо обладать правами Администратора');
                            Yii::app()->user->logout();
                        }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

        
        
        	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
            
            

                
                $this->render('index');  
      
                         
	}  
        
          public function actionIndexEdit()
	{
		$this->render('indexEdit');            
	}
               public function actionIndexMonitoring()
	{
		$this->render('indexMonitoring');            
	}
               public function actionIndexSpravochniki()
	{
		$this->render('indexSpravochniki');            
	}
               public function actionIndexInfo()
	{
		$this->render('indexInfo');            
	}
               
   
          public function actionIndexInfoDRPP()
	{
                        $model=new WorksPlan('search');
                         
                        $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
        
                
                
                $rep->infotimeF = date('d-m-Y');
            
                  
             
                
		  
                 $this->render('indexInfoDRPP', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));
	}
        
        
         public function actionIndexInfoGSM()
	{
                        $model=new WorksPlan('search');
                         
                        $rep = new WorksPlan; 
                
                       $rep->infotimeS = date('d-m-Y');
               
		  
                 $this->render('indexInfoGSM', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));
	}
        
            public function actionIndexInfoDRPF()
	{
		$model=new WorksPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
       
                
                
                $rep->infotimeF = date('d-m-Y');
             
                  
               
                
		  
                 $this->render('indexInfoDRPF', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
        
        public function actionIndexInfoYRPF()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');          
                
                
                $rep->infotimeF = date('d-m-Y');
             
                  
             
                
		  
                 $this->render('indexInfoYRPF', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
          public function actionIndexInfoYRPFS()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');          
                
                
                $rep->infotimeF = date('d-m-Y');
             
                  
             
                
		  
                 $this->render('indexInfoYRPFS', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
          public function actionIndexInfoYRPFSR()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');          
                
                
                $rep->infotimeF = date('d-m-Y');
             
                  
             
                
		  
                 $this->render('indexInfoYRPFSR', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
 
        
                public function actionIndexInfoYRPP()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
              
                
                
                $rep->infotimeF = date('d-m-Y');
               
                  
             
                
		  
                 $this->render('indexInfoYRPP', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
        
         public function actionIndexInfoMonDrsu()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
              
                
                
            
               
                  
             
                
		  
                 $this->render('indexInfoMonDrsu', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
        
               public function actionIndexInfoDRPPR()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
            
                
                
                $rep->infotimeF = date('d-m-Y');
            
                  
            
                
		  
                 $this->render('indexInfoDRPPR', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
        
         public function actionIndexInfoDRPFR()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
            
                
                
                $rep->infotimeF = date('d-m-Y');
             
               
                
		  
                 $this->render('indexInfoDRPFR', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
        }
        
        public function actionIndexInfoYRPFR()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
               
                
                $rep->infotimeF = date('d-m-Y');
             
                  
               
                
		  
                 $this->render('indexInfoYRPFR', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
        }
        
        
          public function actionIndexInfoYRPPR()
	{
		$model=new worksBuildPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
             
                
                
                $rep->infotimeF = date('d-m-Y');
              
                  
         
                
		  
                 $this->render('indexInfoYRPPR', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
        }
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}