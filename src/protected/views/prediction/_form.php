<?php
/* @var $this PredictionController */
/* @var $model Prediction */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prediction-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'localGoals'); ?>
		<?php echo $form->numberField($model,'localGoals', array('class'=>'form-control', 'min'=>0, 'max'=>'15')); ?>
		<?php echo $form->error($model,'localGoals'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'visitantGoals'); ?>
		<?php echo $form->numberField($model,'visitantGoals', array('class'=>'form-control', 'min'=>0, 'max'=>'15')); ?>
		<?php echo $form->error($model,'visitantGoals'); ?>
	</div>

	<?php echo $form->hiddenField($model,'score'); ?>
		
	<div class="form-group">
		<?php echo $form->labelEx($model,'question1'); ?>
		<?php echo $form->textField($model,'question1', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question1'); ?>
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer1 == 0) ? 'active' : ''; ?>">
			<?php 
				$option11 = ($model->question10 != null) ? $model->question10->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer1', array('value'=>0, 'uncheckValue'=>null)) . $option11; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer1 == 1) ? 'active' : ''; ?>">
			<?php 
				$option12 = ($model->question10 != null) ? $model->question10->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer1', array('value'=>1, 'uncheckValue'=>null)) . $option12; 
			?>
		</label>		
		<?php echo $form->error($model,'answer1'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question2'); ?>
		<?php echo $form->textField($model,'question2', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question2'); ?>
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer2 == 0) ? 'active' : ''; ?>">
			<?php 
				$option21 = ($model->question20 != null) ? $model->question20->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer2', array('value'=>0, 'uncheckValue'=>null)) . $option21; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer2 == 1) ? 'active' : ''; ?>">
			<?php 
				$option22 = ($model->question20 != null) ? $model->question20->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer2', array('value'=>1, 'uncheckValue'=>null)) . $option22; 
			?>
		</label>		
		<?php echo $form->error($model,'answer2'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question3'); ?>
		<?php echo $form->textField($model,'question3', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question3'); ?>
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer3 == 0) ? 'active' : ''; ?>">
			<?php 
				$option31 = ($model->question30 != null) ? $model->question30->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer3', array('value'=>0, 'uncheckValue'=>null)) . $option31; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer3 == 1) ? 'active' : ''; ?>">
			<?php 
				$option32 = ($model->question30 != null) ? $model->question30->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer3', array('value'=>1, 'uncheckValue'=>null)) . $option32; 
			?>
		</label>		
		<?php echo $form->error($model,'answer3'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question4'); ?>
		<?php echo $form->textField($model,'question4', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question4'); ?>
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer4 == 0) ? 'active' : ''; ?>">
			<?php 
				$option41 = ($model->question40 != null) ? $model->question40->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer4', array('value'=>0, 'uncheckValue'=>null)) . $option41; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer4 == 1) ? 'active' : ''; ?>">
			<?php 
				$option42 = ($model->question40 != null) ? $model->question40->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer4', array('value'=>1, 'uncheckValue'=>null)) . $option42; 
			?>
		</label>		
		<?php echo $form->error($model,'answer4'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'question5'); ?>
		<?php echo $form->textField($model,'question5', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'question5'); ?>
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer5 == 0) ? 'active' : ''; ?>">
			<?php 
				$option51 = ($model->question50 != null) ? $model->question50->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer5', array('value'=>0, 'uncheckValue'=>null)) . $option51; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer5 == 1) ? 'active' : ''; ?>">
			<?php 
				$option52 = ($model->question50 != null) ? $model->question50->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer5', array('value'=>1, 'uncheckValue'=>null)) . $option52; 
			?>
		</label>		
		<?php echo $form->error($model,'answer5'); ?>
	</div>
	
	<?php echo $form->hiddenField($model,'user'); ?>	
	<?php echo $form->hiddenField($model,'match'); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'predictioncol'); ?>
		<?php echo $form->textField($model,'predictioncol',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'predictioncol'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

