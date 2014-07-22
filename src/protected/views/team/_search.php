<?php
/* @var $this TeamController */
/* @var $model Team */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idTeam'); ?>
		<?php echo $form->textField($model,'idTeam', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>500, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

