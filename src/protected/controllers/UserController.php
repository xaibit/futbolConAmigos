<?php

class UserController extends Controller
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
				'actions'=>array('index','view', 'create','confirm'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update', 'admin', 'delete'),
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
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save()) {
				
				
				$email = $model->email;
				$id = $model->idUser;			
				$sql = 'INSERT INTO usergroup VALUES (null,'.$id.',1,0,0,0)';
				$command = Yii::app()->db->createCommand($sql);
				$command->execute();				
				
				$titulo = 'Confirmacion de correo';
				// mensaje
				$mensaje = 'Presiona <a href="http://www.palpitofutbolero.com.ar/index.php/user/confirm/' . $model->idUser . '">aqui</a> para confirmar tu cuenta de correo. Si no funciona el link, copia y pega la siguiente URL en tu navegador<br />www.palpitofutbolero.com.ar/index.php/user/confirm/' . $model->idUser ;
				// Para enviar un correo HTML, debe establecerse la cabecera Content-type
				$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				// Cabeceras adicionales				
				$cabeceras .= 'From: palpitofutbolero <palpitofutbolero@gmail.com>' . "\r\n";				
				// Enviarlo
				mail($email, $titulo, $mensaje, $cabeceras);
				$this->redirect(array('site/confirmar'));
			}	
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
		$model->password = '';

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if (isset($_POST['User']['password']) && $_POST['User']['password'] != "") {
				$isValid = $model->validate();
					
				if ($isValid) {
					$salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
					$model->password = crypt($model->password, $salt);
				}				
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->idUser));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionConfirm($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
		$model->score="0";
		if($model->save()) {				
			$this->redirect(array('site/index'));
		}
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
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	/**
	* funcion para enviar emails
	*/
	public static function sendMail($email,$id)
    {   
        $message            = new YiiMailMessage;
           //this points to the file test.php inside the view path
        $message->view = "test";
        $sid                 = $id;
        $criteria            = new CDbCriteria();
        $criteria->condition = "id=".$sid."";            
        $user          = User::model()->findByPk($sid);        
        $params              = array('usermail'=>$user);
        $message->subject    = 'email confirmation';
        $message->setBody($params, 'text/html');                
        $message->addTo($email);
        $message->from = 'mail@mimail.com.ar';   
        Yii::app()->mail->send($message);       
    }
}
