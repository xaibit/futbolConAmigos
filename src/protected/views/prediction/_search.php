<?php
/* @var $this PredictionController */
/* @var $model Prediction */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idPrediction'); ?>
		<?php echo $form->textField($model,'idPrediction', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'localGoals'); ?>
		<?php echo $form->textField($model,'localGoals', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'visitantGoals'); ?>
		<?php echo $form->textField($model,'visitantGoals', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'question1'); ?>
		<?php echo $form->textField($model,'question1', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer1'); ?>
		<?php echo $form->textField($model,'answer1', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'question2'); ?>
		<?php echo $form->textField($model,'question2', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer2'); ?>
		<?php echo $form->textField($model,'answer2', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'question3'); ?>
		<?php echo $form->textField($model,'question3', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer3'); ?>
		<?php echo $form->textField($model,'answer3', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'question4'); ?>
		<?php echo $form->textField($model,'question4', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer4'); ?>
		<?php echo $form->textField($model,'answer4', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'question5'); ?>
		<?php echo $form->textField($model,'question5', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'answer5'); ?>
		<?php echo $form->textField($model,'answer5', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'user'); ?>
		<?php echo $form->textField($model,'user', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'match'); ?>
		<?php echo $form->textField($model,'match', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'predictioncol'); ?>
		<?php echo $form->textField($model,'predictioncol',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

