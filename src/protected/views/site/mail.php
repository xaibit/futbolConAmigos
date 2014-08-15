<div class="page-header"><h1>Env&iacute;o de Mails</h1></div>

<?php if(Yii::app()->user->hasFlash('mail')): ?>

<div class="alert alert-success">
	<?php echo Yii::app()->user->getFlash('mail'); ?>
</div>

<?php else: ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mail-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

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

	<div class="form-group">
		<?php echo CHtml::submitButton('Enviar', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

<?php endif; ?>