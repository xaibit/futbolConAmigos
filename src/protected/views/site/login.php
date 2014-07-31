<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Ingresar</h1>

<p>Por favor llene los siguentes campos con sus datos de usuario:</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con  <span class="required">*</span> son obligatorios</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'contrase&ntilde;a'); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="checkbox">
		<label for="LoginForm[rememberMe]"><?php echo $form->checkBox($model,'rememberMe'); ?> Recordarme</label>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>
