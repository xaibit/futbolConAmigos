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
	<div class="row">
		<div class="col-xs-1 col-md-1">
			<img width="30" height="30" src="<?php echo Yii::app()->request->baseUrl . '/images/escudos/' . $model->matchRel->localTeam0->image; ?>" alt="">
		</div>
		<div class="col-xs-5 col-md-1">
			<?php echo $form->numberField($model,'localGoals', array('class'=>'form-control', 'min'=>0, 'max'=>'15')); ?>
			<?php echo $form->error($model,'localGoals'); ?>
		</div>
		<div class="col-xs-1 col-md-1">
			<img width="30" height="30" src="<?php echo Yii::app()->request->baseUrl . '/images/escudos/' . $model->matchRel->visitantTeam0->image; ?>" alt="">
		</div>
		<div class="col-xs-5 col-md-1">
			<img width="30" height="30" alt="" src="">
			<?php echo $form->numberField($model,'visitantGoals', array('class'=>'form-control', 'min'=>0, 'max'=>'15')); ?>
			<?php echo $form->error($model,'visitantGoals'); ?>
		</div>			
	</div>
	
	<?php echo $form->hiddenField($model,'score'); ?>
		
	<div class="form-group">
		<p class="form-control-static">
			<?php 
				echo (isset($model->ques1)) ? $model->ques1->text : 'Pregunta 1';
			?>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer1 != null && $model->answer1 == 0) ? 'active' : ''; ?>">
			<?php
				$option11 = ($model->ques1 != null) ? $model->ques1->answer1 : 'Opcion 1';
				
				echo $form->radioButton($model,'answer1', array('value'=>0, 'uncheckValue'=>null)) . $option11; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer1 == 1) ? 'active' : ''; ?>">
			<?php 
				$option12 = ($model->ques1 != null) ? $model->ques1->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer1', array('value'=>1, 'uncheckValue'=>null)) . $option12; 
			?>
		</label>		
		<?php echo $form->error($model,'answer1'); ?>
	</div>

	<div class="form-group">
		<p class="form-control-static">
			<?php 
				echo (isset($model->ques2)) ? $model->ques2->text : 'Pregunta 2';
			?>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer2 != null && $model->answer2 == 0) ? 'active' : ''; ?>">
			<?php 
				$option21 = ($model->ques2 != null) ? $model->ques2->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer2', array('value'=>0, 'uncheckValue'=>null)) . $option21; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer2 == 1) ? 'active' : ''; ?>">
			<?php 
				$option22 = ($model->ques2 != null) ? $model->ques2->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer2', array('value'=>1, 'uncheckValue'=>null)) . $option22; 
			?>
		</label>		
		<?php echo $form->error($model,'answer2'); ?>
	</div>

	<div class="form-group">
		<p class="form-control-static">
			<?php 
				echo (isset($model->ques3)) ? $model->ques3->text : 'Pregunta 3';
			?>
		</p>		
	</div>
	
	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer3 != null && $model->answer3 == 0) ? 'active' : ''; ?>">
			<?php 
				$option31 = ($model->ques3 != null) ? $model->ques3->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer3', array('value'=>0, 'uncheckValue'=>null)) . $option31; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer3 == 1) ? 'active' : ''; ?>">
			<?php 
				$option32 = ($model->ques3 != null) ? $model->ques3->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer3', array('value'=>1, 'uncheckValue'=>null)) . $option32; 
			?>
		</label>		
		<?php echo $form->error($model,'answer3'); ?>
	</div>

	<div class="form-group">
		<p class="form-control-static">
			<?php 
				echo (isset($model->ques4)) ? $model->ques4->text : 'Pregunta 4';
			?>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer4 != null && $model->answer4 == 0) ? 'active' : ''; ?>">
			<?php 
				$option41 = ($model->ques4 != null) ? $model->ques4->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer4', array('value'=>0, 'uncheckValue'=>null)) . $option41; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer4 == 1) ? 'active' : ''; ?>">
			<?php 
				$option42 = ($model->ques4 != null) ? $model->ques4->answer2 : 'Opcion 2';
				echo $form->radioButton($model,'answer4', array('value'=>1, 'uncheckValue'=>null)) . $option42; 
			?>
		</label>		
		<?php echo $form->error($model,'answer4'); ?>
	</div>

	<div class="form-group">
		<p class="form-control-static">
			<?php 
				echo (isset($model->ques5)) ? $model->ques5->text : 'Pregunta 5';
			?>
		</p>		
	</div>

	<div class="btn-group btn-group-justified" data-toggle="buttons">
		<label class="btn btn-default <?php echo ($model->answer5 != null && $model->answer5 == 0) ? 'active' : ''; ?>">
			<?php 
				$option51 = ($model->ques5 != null) ? $model->ques5->answer1 : 'Opcion 1';
				echo $form->radioButton($model,'answer5', array('value'=>0, 'uncheckValue'=>null)) . $option51; 
			?>
		</label>
		<label class="btn btn-default <?php echo ($model->answer5 == 1) ? 'active' : ''; ?>">
			<?php 
				$option52 = ($model->ques5 != null) ? $model->ques5->answer2 : 'Opcion 2';
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

