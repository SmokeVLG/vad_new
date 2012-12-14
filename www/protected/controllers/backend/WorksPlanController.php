<?php

class WorksPlanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new WorksPlan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WorksPlan']))
		{
                       
                                 
			$model->attributes=$_POST['WorksPlan'];
                        $model->infotime = date('Y-m-d H:i');                   
                        
                        
                         if($_POST['WorksPlan']['rf_idRoadsBuild']!='-') $model->rf_idRoads=779;
                    
                    
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
                
                $infotime = date('Y-m-d H:i');
		$this->render('create',array(
			'model'=>$model,
                        'infotime'=>$infotime,
		));
                
         
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WorksPlan']))
		{
			$model->attributes=$_POST['WorksPlan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

              
		$infotime = date('Y-m-d H:i');
		$this->render('create',array(
			'model'=>$model,
                        'infotime'=>$infotime,
                    
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('WorksPlan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new WorksPlan('search');
                
                
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WorksPlan']))
			$model->attributes=$_GET['WorksPlan'];
              
		$this->render('admin',array(
			'model'=>$model,
                       
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=WorksPlan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='works-plan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
