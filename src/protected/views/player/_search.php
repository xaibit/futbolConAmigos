<?php
/* @var $this PlayerController */
/* @var $model Player */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idPlayer'); ?>
		<?php echo $form->textField($model,'idPlayer', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'team'); ?>
		<?php echo $form->textField($model,'team', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

