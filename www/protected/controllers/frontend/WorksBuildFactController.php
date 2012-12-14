<?php

class WorksBuildFactController extends Controller
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
		$model=new WorksBuildFact;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WorksBuildFact']))
		{
			$model->attributes=$_POST['WorksBuildFact'];
                         $model->infotime = date('Y-m-d H:i');
                       $model->rf_idRoads = 779;
                      //  $model->rf_idRoadsBuild=$_POST['rf_idRoadsBuild'];
                        $model-> rf_idOrg = (int) Yii::app()->user->id;
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

		if(isset($_POST['WorksBuildFact']))
		{
			$model->attributes=$_POST['WorksBuildFact'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('WorksBuildFact');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new WorksBuildFact('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WorksBuildFact']))
			$model->attributes=$_GET['WorksBuildFact'];

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
		$model=WorksBuildFact::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='works-build-fact-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
