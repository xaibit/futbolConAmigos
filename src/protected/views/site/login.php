<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'contrase&ntilde;a'); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
		<span class="help-block">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</span>
	</div>

	<div class="checkbox">
		<label for="LoginForm[rememberMe]"><?php echo $form->checkBox($model,'rememberMe'); ?> Recordarme</label>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>
