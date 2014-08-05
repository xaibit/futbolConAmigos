<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contactenos';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="page-header"><h1>Cont&aacute;ctenos</h1></div>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>Si tenes alguna duda o consulta, por favor completa el siguiente formulario para contactarnos. Los campos con * son requeridos.</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'name', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'email', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'subject', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'body', array('class'=>'text-danger')); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode', array('class'=>'form-control')); ?>
		<span class="help-block">Ingresa las letras que se muestran en la imagen superior. Las letras no son sensibles a las may&uacute;sculas</span>
		</div>
		<?php echo $form->error($model,'verifyCode', array('class'=>'text-danger')); ?>
	</div>
	<?php endif; ?>

	<div class="form-group">
		<?php echo CHtml::submitButton('Enviar', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

<?php endif; ?>