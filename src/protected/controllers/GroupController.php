<?php

class GroupController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'admin', 'delete','mygroup'),
				'users'=>array('@'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$dataProvider=new CActiveDataProvider('User', array(
				'criteria'=>array(
						'condition'=>'EXISTS (SELECT 1 FROM usergroup WHERE usergroup.group=:group AND usergroup.adminPending=1 AND t.idUser = usergroup.user)',
						'params'=>array(':group'=>$id),
						'order'=>'lastname ASC'
				)
		));
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dataProvider'=>$dataProvider
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Group;
		$model->userAdmin = Yii::app()->user->id;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Group']))
		{
			$model->attributes=$_POST['Group'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idGroup));
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

		if(isset($_POST['Group']))
		{
			$model->attributes=$_POST['Group'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idGroup));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model = new Usergroup();
		$model->adminPending = 1;
		$model->userPending = 0;
		$model->user = Yii::app()->user->id;
		
		$group=new Group('search');
		$group->unsetAttributes();  // clear any default values
		if(isset($_GET['Group']))
			$group->attributes=$_GET['Group'];
		
		$all=new CActiveDataProvider('Group', array(
			'criteria'=>array(
				'order'=>'name ASC'
			)
		));
		$own=new CActiveDataProvider('Group', array(
			'criteria'=>array(
				'condition'=>'EXISTS (SELECT 1 FROM usergroup WHERE usergroup.user=:user AND usergroup.group = t.idGroup AND usergroup.adminPending=0)',
				'params'=>array(':user'=>Yii::app()->user->id)
			)
		));
		/*$ownerGroup=new CActiveDataProvider('Group', array(
			'criteria'=>array(
				'condition'=>'userAdmin=:user',
				'params'=>array(':user'=>Yii::app()->user->id),
				'order'=>'name ASC'
			)
		));
		$pendingGroup=new CActiveDataProvider('Group', array(
				'criteria'=>array(
						'condition'=>'EXISTS (SELECT 1 FROM usergroup WHERE user=:user AND adminPending=1 AND usergroup.group = t.idGroup)',
						'params'=>array(':user'=>Yii::app()->user->id),
						'order'=>'name ASC'
				)
		));*/
		$this->render('index',array(
			'all'=>$all,
			'own'=>$own,
			'model'=>$model,
			'group'=>$group
		));
	}
	
	/**
	 * Lists all models.
	 */
	public function actionMygroup()
	{		
		
		$dataProvider=new CActiveDataProvider('Group', array(
                    'criteria'=>array(
                        'condition'=>'t.idGroup IN (SELECT u.group FROM `usergroup` `u` WHERE u.user= '.Yii::app()->user->id.' )' ,
                    )
                ));
				
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Group('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Group']))
			$model->attributes=$_GET['Group'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Group the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Group::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Group $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='group-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
