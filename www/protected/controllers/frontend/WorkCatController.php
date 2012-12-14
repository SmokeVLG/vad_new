<?php

class WorkCatController extends Controller
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

        
        
        
        
         public function actionGetwork()
        {
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

            // возвращаем список дорог
            if ($action == 'getwork' AND isset($_REQUEST['wrg']))
            {
              $roads=WorkWork::model()->findAllByAttributes(array('rf_idWorkCat'=>$_REQUEST['wrg']));
                                       
                if (count($roads) > 0)
                    foreach($roads as $r) $a[] = $r;
                    
                echo CJSON::encode($a); // возвращаем данные в JSON формате;
                            
                
             //      echo CJSON::encode($roads); // возвращаем данные в JSON формате;
            }
        }
        
          
           public function actionAdminMini()
	{
		$model=new WorkCat('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WorkCat']))
			$model->attributes=$_GET['WorkCat'];

                 $this->layout = false; // отключить лейауты  
 
		 $this->render('adminMini',array(
			'model'=>$model,
                        
		));                
                                
	}
        
              public function actionAdminMinifact()
	{
		$model=new WorkCat('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WorkCat']))
			$model->attributes=$_GET['WorkCat'];

                 $this->layout = false; // отключить лейауты  
 
		 $this->render('adminMinifact',array(
			'model'=>$model,
                        
		));                
                                
	} 
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new WorkCat;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WorkCat']))
		{
			$model->attributes=$_POST['WorkCat'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['WorkCat']))
		{
			$model->attributes=$_POST['WorkCat'];
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
            $works = WorksPlan::model()->findAllByAttributes(array('rf_idWorkCat'=>$id));
            if(count($works) > 0) {
                Yii::app()->user->setFlash('result','За данным видом работ закреплены объекты. Удаление запрещено.');
            }
            else
            {
                $this->loadModel($id)->delete();
                Yii::app()->user->setFlash('result','Объект успешно удален.');
            }
            if(!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('WorkCat');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new WorkCat('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WorkCat']))
			$model->attributes=$_GET['WorkCat'];

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
		$model=WorkCat::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='work-cat-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
