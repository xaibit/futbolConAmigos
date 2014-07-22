<?php
/* @var $this UsergroupController */
/* @var $model Usergroup */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idUserGroup'); ?>
		<?php echo $form->textField($model,'idUserGroup', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'user'); ?>
		<?php echo $form->textField($model,'user', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'group'); ?>
		<?php echo $form->textField($model,'group', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

