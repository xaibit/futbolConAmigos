<?php
/* @var $this MatchController */
/* @var $model Match */

$this->breadcrumbs=array(
	'Matches'=>array('index'),
	$model->idMatch,
);

$this->menu=array(
	array('label'=>'List Match', 'url'=>array('index')),
	array('label'=>'Create Match', 'url'=>array('create')),
	array('label'=>'Update Match', 'url'=>array('update', 'id'=>$model->idMatch)),
	array('label'=>'Delete Match', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idMatch),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Match', 'url'=>array('admin')),
);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
		<span class="badge"><?php echo isset($model->localGoals) ? $model->localGoals : '-'; ?></span>&nbsp;
		<?php echo $model->localTeam0->name;?>
		&nbsp;-&nbsp;<?php echo $model->visitantTeam0->name;?>
		<span class="badge"><?php echo isset($model->localGoals) ? $model->visitantGoals : '-'; ?></span>
	</div>
	<div class="panel-body">
		<p><strong>D&iacute;a: </strong><?php echo date("d/m/Y", strtotime($model->date));?></p>
		<p><strong>Lugar: </strong><?php echo CHtml::encode($model->place); ?></p>
		<p><strong><?php echo $model->afaDate?> &#170 Fecha</strong></p>
	</div>
</div>
