<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="page-header"><h1>Ingresar</h1></div>

<p>Por favor llene los siguentes campos con sus datos de usuario. Los campos con  <span class="required">*</span> son obligatorios.</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true
	),
)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password', array('class'=>'text-danger')); ?>
	</div>

	<div class="checkbox">
		<label for="LoginForm[rememberMe]"><?php echo $form->checkBox($model,'rememberMe'); ?> Recordarme</label>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>
