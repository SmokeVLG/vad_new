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
                'actions'=>array('admin','create','delete','index','update','view'),
                'users'=>array('?'),
            ),
            
             array('allow',
                'actions'=>array('admin','create','delete','index','update','view'),
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
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
            
             
            
             //Yii::app()->getRequest()->redirect('index.php?r=worksPlan/admin');
            
            
	}
        public function actionIndexVazhn()
	{
		$this->render('indexVazhn');            
	}
               public function actionIndexVvesti()
	{
		$this->render('indexVvesti');            
	}
               public function actionIndexMonitor()
	{
		$this->render('indexMonitor');            
	}
               public function actionIndexDR()
	{
		$this->render('indexDR');            
	}
               public function actionIndexBuild()
	{
		$this->render('indexBuild');            
	}
               public function actionIndexGSM()
	{
		$this->render('indexGSM');            
	}
    
                   public function actionIndexInfoPlan()
	{
                        $model=new WorksPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');
                
                
                
                $rep->infotimeF = date('d-m-Y');
              
                
		  
                 $this->render('InfoPlan', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));
	}
                   public function actionIndexInfoFact()
	{
		$model=new WorksPlan('search');
                         $rep = new WorksPlan; 
                
                $rep->infotimeS = date('d-m-Y');          
                
                
                $rep->infotimeF = date('d-m-Y');
           
                
		  
                 $this->render('InfoFact', array(
                             
               'report'=>$rep,
                     'model'=>$model,
                         ));            
	}
          public function actionIndexInfo()
	{
		$this->render('indexInfo');            
	}
        private function MygetDatesPrev()
        {
            
                
            $now = (int)date("H");          
            if( $now  > 7)
                {                  
                   Yii::app()->params['myDateRepFormat']= date('Y-m-d');                   
                   Yii::app()->params['myDateRepFormat'].= ' 08:00:00';           
                }
             else
                 {                                        
                   Yii::app()->params['myDateRepFormat']= date('Y-m-d', strtotime(date('Y-m-d', strtotime(date('d-m-Y'))) . ' -1 day'));                 
                   Yii::app()->params['myDateRepFormat'].= ' 08:00:00';               
                 }        
                      
        }    
        //Действие при нажатие на ссылку Мониторинг
	public function actionMonitoring()
	{  
            $this->MygetDatesPrev();  //Инициализация переменных
            
            $sql_sum = 'CALL GetSumMonitorToDateVad(\''.Yii::app()->params['myDateRepFormat'].'\')'; //Расчет суммы            
            $dataSumProvider = new CSqlDataProvider($sql_sum, array(
               //'keyField'=>'num',
               'pagination'=>false,
                
            ));       
            
        
            
            $sql = 'CALL GetDataMonitorToDateVad(\''.Yii::app()->params['myDateRepFormat'].'\')';     //Расчет остальных переменных              
            $dataProvider = new CSqlDataProvider($sql, array(
               'keyField'=>'num',
               'pagination'=>false,
               
           ));          
         
            
           $this->render('serviceObject', array('dataProvider'=>$dataProvider,
                                                'dataSumProvider'=>$dataSumProvider->getData()
           ));
	}
        
        public function actionRoadMonitor()
	{  
           $serviceObj = intval($_GET['so']);//Инициализация переменной
           
           $this->MygetDatesPrev();  //Инициализация переменных  
           
           //Расчет данных по определенному району
           $sql = 'CALL GetDataRoadMonitorToDateVad(\''.Yii::app()->params['myDateRepFormat'].'\' , '.$serviceObj.'  )'; 
           
           $dataProvider = new CSqlDataProvider($sql, array(
               'keyField'=>'num',
               'pagination'=>false,
                
           ));
           
           //Ссылка назад
           $url_back = $this->createUrl('monitoring');
           
           //print_arr($dataProvider->getData()); die;           
            
           $this->render('roads', array(
               'serviceObj'=>ServiceObject::model()->findByPk($serviceObj)->name,
               'dataProvider'=>$dataProvider,
               'url_back'=>$url_back));
	}
        public function actionWorkMonitor()
	{  
            
            //Инициализация переменных
           $road = intval($_GET['ro']);
           $serviceObject = intval($_GET['so']);
           $this->MygetDatesPrev();
            
           $sql = 'CALL GetDataWorkMonitorToDateVad(\''.Yii::app()->params['myDateRepFormat'].'\' , '.$road.'  )'; 
           
           $dataProvider = new CSqlDataProvider($sql, array(
               'keyField'=>'num',
               'pagination'=>false,
              
           ));
           
           $url_back = $this->createUrl('roadmonitor', array('so'=>$serviceObject));
            
           $this->render('works', array(
               'road'=>Roads::model()->findByPk($road)->name,               
               'dataProvider'=>$dataProvider,
               'url_back'=>$url_back
           ));
	}
      /*
         * Создание отчета План
         */        
       /*
         * Создание отчета
         */        
             public function actionReportMonToDateAndOrgPlanVad()
	{  
                 
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !
           
           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
       
           
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
                // отойдем от объектов :)
                // Организации
                    // Получаем организации
                $id_org = (int) Yii::app()->user->id;
                              
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org                        
                         ';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false
                ));
                $url_back = $this->createUrl('worksPlan/admin');  
                
                
                $dateRep=date('Y-m-d', strtotime($dateRep));                        
             
               
                $dateRep3=date('Y-m-d', strtotime($dateRep3));                        
             
                
                
                           
                                          
                // Объекты
                $sql = 'CALL GetDataReportMonToDateAndOrgPlanVad(\''.$dateRep.'\' ,\''.$dateRep3.'\' , '.(int) Yii::app()->user->id.' )'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                    
                ));

               //print_r($dataProviderSO->getData()); die;
                
                
                $this->renderPartial('application.views.frontend.worksPlan.rptMonitor.mainToDateAndOrgPlanVad', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back));
           }
	}
        

         /*
         * Создание отчета Факт
         */        
        public function actionReportMonToDateAndOrgFactVad()
	{  
           $dateRep = $_POST['WorksPlan']['infotimeS']; // проверку на дату !

           $dateRep3 = $_POST['WorksPlan']['infotimeF'];
        
           
           
           
           $dateRepEnd = date('d-m-Y', strtotime(date('Y-m-d', strtotime($dateRep)) .  '+1 day'));
           $datesPrev = $this->MygetDatesPrev();
           if ($_POST['yt0'] === 'Выполнить запрос')
           {            
                // отойдем от объектов :)
                // Организации
                    // Получаем организации
                $id_org = (int) Yii::app()->user->id;
               
               
                $sql = 'SELECT (CASE @n IS NULL WHEN TRUE THEN @n:=1 ELSE @n:=@n+1 END) AS num, '.
                        'id, '.
                        'NAME FROM t_org                        
                         ';
                
                
                $dataProviderOrg = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                    
                ));
                $url_back = $this->createUrl('worksFact/admin');                
          
                $dateRep=date('Y-m-d', strtotime($dateRep));                        
       
               
                 $dateRep3=date('Y-m-d', strtotime($dateRep3));                        
                         
                                          
                // Объекты
                $sql = 'CALL GetDataReportMonToDateAndOrgFactVad(\''.$dateRep.'\' , \''.$dateRep3.'\' ,'.(int) Yii::app()->user->id.' )'; 
                
                $dataProviderSO = new CSqlDataProvider($sql, array(
                    'keyField'=>'num',
                    'pagination'=>false,
                     
                ));

               //print_r($dataProviderSO->getData()); die;
                
                
                $this->renderPartial('application.views.frontend.worksPlan.rptMonitor.mainToDateAndOrgFactVad', array(
                    'dataOrg'=>$dataProviderOrg->getData(),
                    'dataSO'=>$dataProviderSO->getData(),                    
                    'url_back'=>$url_back));
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
			if($model->validate() && $model->login() && Yii::app()->user->checkAccess('user'))
				
                            if($model->username=="VKU")
                            {
                                 print_r($this->redirect("index.php?r=WorkVku/create")); 
                            }
                           if($model->username=="Kalachovskoe")
                            {
                                 print_r($this->redirect("index.php?r=WorkKalach/create")); 
                            }
                            
                            
                            $this->redirect(Yii::app()->user->returnUrl);
                        
                        if( !Yii::app()->user->checkAccess('user'))
                        {
			    echo ('Для просмотра данной страницы необходимо обладать правами Пользователя');
                            Yii::app()->user->logout();
                        }
                        
                        
		}
		// display the login form
		$this->render('login',array('model'=>$model));
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