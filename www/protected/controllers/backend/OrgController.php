<?php

class OrgController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
                'actions'=>array('admin','create','delete','index','update','view','getroads'),
                'users'=>array('?'),
            ),
            
             array('allow',
                'actions'=>array('admin','create','delete','index','update','view','getroads'),
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
		$model=new Org;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Org']))
		{
			$model->attributes=$_POST['Org'];
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
		$model = $this->loadModel($id);                
                
                $servOrg = new Serviceorg;
                $criteria=new CDbCriteria;

		$criteria->compare('rf_idOrg', $id);		
                $servOrgData = new CActiveDataProvider($servOrg, array(
			'criteria'=>$criteria,
		));                
                
                // Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Org']))
		{
			$model->attributes=$_POST['Org'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
                        'servOrgData'=>$servOrgData,
		));
	}
        
        /**
	 * Creates a new parser.
	 * @param Guest the post that the new comment belongs to
	 * @return Comment the comment instance
	 */
	protected function newServiceOrg($org)
	{
		$serviceorg=new Serviceorg;
		if(isset($_POST['ajax']) && $_POST['ajax']==='serviceorg-form')
		{
			echo CActiveForm::validate($orgservise);
			Yii::app()->end();
		}
		if(isset($_POST['ServiceOrg']))
		{
			$serviceorg->attributes=$_POST['serviceorg'];
			if($org->addservice($serviceorg))
			{
				$this->refresh();
			}
		}
		return $serviceorg;
	}
        
        public function actionGetroads()
        {
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

            // возвращаем список дорог
            if ($action == 'getRoads' AND isset($_REQUEST['org']))
            {
                             
                
                
                $roads=Roads::model()->findAllBySql
                                                                            (
                                                                               ' SELECT 
                                                                                t_roads.id,
                                                                                t_roads.name,
                                                                                t_roads.rf_idServiceObject


                                                                                FROM t_org    
                                                                                RIGHT JOIN t_serviceorg
                                                                                ON t_org.id = t_serviceorg.rf_idOrg
                                                                                RIGHT JOIN t_roads
                                                                                ON t_serviceorg.rf_idRoad = t_roads.id


                                                                                WHERE t_org.id=\''.$_REQUEST['org'].'\'
                                                                                ORDER BY t_roads.id
                                                                                '
                                                                            );  
                
                
                
                
                $road0=Roads::model()->findByPk(1);
                $a[] = $road0;                
                if (count($roads) > 0)
                    foreach($roads as $r) $a[] = $r;
                    
                echo CJSON::encode($a); // возвращаем данные в JSON формате;
            }
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
		$dataProvider=new CActiveDataProvider('Org');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Org('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Org']))
			$model->attributes=$_GET['Org'];

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
		$model=Org::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='org-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
