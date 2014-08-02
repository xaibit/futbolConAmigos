<?php
/* @var $this PredictionController */
/* @var $model Prediction */

$this->breadcrumbs=array(
	'Predictions'=>array('index'),
	$model->idPrediction,
);

$this->menu=array(
	array('label'=>'List Prediction', 'url'=>array('index')),
	array('label'=>'Create Prediction', 'url'=>array('create')),
	array('label'=>'Update Prediction', 'url'=>array('update', 'id'=>$model->idPrediction)),
	array('label'=>'Delete Prediction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPrediction),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prediction', 'url'=>array('admin')),
);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
		<span class="badge"><?php echo isset($model->localGoals) ? $model->localGoals : '-'; ?></span>&nbsp;
		<?php echo $model->matchRel->localTeam0->name;?>
		&nbsp;-&nbsp;<?php echo $model->matchRel->visitantTeam0->name;?>
		<span class="badge"><?php echo isset($model->localGoals) ? $model->visitantGoals : '-'; ?></span>
	</div>
	<div class="panel-body">
		<p>
			<strong><?php echo isset($model->ques1) ? $model->ques1->text : ''; ?></strong>
			<?php echo isset($model->answer1) ? $model->ques1->getOption($model->answer1) : ''; ?>
		</p>
		<p>
			<strong><?php echo isset($model->ques2) ? $model->ques2->text : ''; ?></strong>
			<?php echo isset($model->answer2) ? $model->ques2->getOption($model->answer2) : ''; ?>
		</p>
		<p>
			<strong><?php echo isset($model->ques3) ? $model->ques3->text : ''; ?></strong>
			<?php echo isset($model->answer3) ? $model->ques3->getOption($model->answer3) : ''; ?>
		</p>
		<p>
			<strong><?php echo isset($model->ques4) ? $model->ques4->text : ''; ?></strong>
			<?php echo isset($model->answer4) ? $model->ques4->getOption($model->answer4) : ''; ?>
		</p>
		<p>
			<strong><?php echo isset($model->ques5) ? $model->ques5->text : ''; ?></strong>
			<?php echo isset($model->answer5) ? $model->ques5->getOption($model->answer5) : ''; ?>
		</p>
		<p><span class="label label-success"><strong>Puntos:&nbsp;</strong><?php echo $model->score; ?></span></p>
	</div>
</div>