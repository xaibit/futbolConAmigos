<?php

class SiteController extends Controller
{
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
				/*$mail = new YiiMailer();
				//$mail->clearLayout();//if layout is already set in config
				$mail->setFrom($model->email, $model->name);
				$mail->setTo(Yii::app()->params['adminEmail']);
				$mail->setSubject($model->subject);
				$mail->setBody($model->email . ': ' . $model->body);
				$mail->send();*/
				
				
				// Para enviar un correo HTML, debe establecerse la cabecera Content-type
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				
				// Cabeceras adicionales
				$headers .= 'From: '. $model->name . ' <'. $model->email . '>' . "\r\n";
				// Enviarlo
				mail(Yii::app()->params['adminEmail'], $model->subject, $model->email . " escribio " . $model->body, $headers);
				
				Yii::app()->user->setFlash('contact','Gracias por contactarse con nosotros. Estaremos respondi&eacute;ndole tan pronto como nos sea posible.');
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
			if($model->validate() && $model->login())
				$this->redirect(array('match/index'));
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
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionConfirmar()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		$this->layout = 'main';
		$this->render('confirmar');
	}
	/**
	* funcion para activar correo
	*/
	public function actionActivatemail($id,$verificationcode)
    { 
		$key = 525325.24;
			
		//$decrypt=base64_decode($verificationcode);

		$decrypt=$verificationcode / $key; 
		
		$model=User::model()->findByPk($id);
		$model->activo = 1;
		if($model->save())
				$this->redirect(array('user/login','id'=>$model->id));		
	}
	/**
	 *
	 */
	public function actionCalculatePoints()
	{
		$users = User::model()->findAll();
						
		foreach ($users as $user) {
			$total = $user->calculatePoints();
			//actualizo el puntaje del usuario para todos los grupos
			Usergroup::model()->updateAll(array('score'=>$total), 'user='.$user->idUser);
		}
	}
	
	public function actionSendMails()
	{
		$model=new MailForm();
		if(isset($_POST['MailForm']))
		{
			$model->attributes=$_POST['MailForm'];
			if($model->validate())
			{		
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
				// Cabeceras adicionales
				$headers .= 'From: Palpito Futbolero <contacto@palpitofutbolero.com.ar>' . "\r\n";
				// Enviarlo
				$users = User::model()->findAll('nickname!="admin"');
				$mails = array();
				foreach ($users as $user) {
					array_push($mails, $user->email);					
				}
				$headers .= 'Bcc: ' . implode(",", $mails) . "\r\n";	

				$sent = mail(Yii::app()->params['adminEmail'], '=?UTF-8?B?'.base64_encode($model->subject).'?=', $model->body, $headers);
				
				Yii::app()->user->setFlash('mail','Los emails han sido enviados.');
				$this->refresh();
			}
		}
		$this->render('mail',array('model'=>$model));
	}
}