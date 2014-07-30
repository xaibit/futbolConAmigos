<?php
/* @var $this GroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groups',
);

$this->menu=array(
	array('label'=>'Create Group', 'url'=>array('create')),
	array('label'=>'Manage Group', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('#search-group').submit(function(){
	$.fn.yiiListView.update('groups', {data:$(this).serialize()});
	return false;
});
");

?>

<div class="page-header">
	<h1>Grupos</h1>
</div>
<p><?php echo CHtml::link('Crear Grupo', array('create'), array('class'=>'btn btn-primary'));?></p>
<div class="row">
	<div class="col-md-9">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active">
				<a href="#own" role="tab" data-toggle="tab">Mis Grupos</a>
			</li>
			<li>
				<a href="#search" role="tab" data-toggle="tab">Buscar Grupos</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="own">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$own,
					'itemView'=>'_view',
					'template'=>'{items}{pager}'
				)); ?>
			</div>
			<div class="tab-pane" id="search">
			<?php
				$form=$this->beginWidget('CActiveForm', array(
					'action'=>Yii::app()->createUrl($this->route),
					'method'=>'get',
					'id'=>'search-group'
				)); 
			?>
			<div class="form-group">
				<?php echo $form->label($group,'name'); ?>
				<?php echo $form->textField($group,'name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
			</div>
			<div class="form-group">
				<?php echo CHtml::submitButton('Buscar', array('class'=>'btn btn-info')); ?>
			</div>
			<?php $this->endWidget(); ?>
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$group->search(),
					'itemView'=>'_view',
					'template'=>'{items}{pager}',
					'id'=>'groups'
				)); ?>
			</div>
			<!-- <div class="tab-pane" id="available">
			<?php 
				/*$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$available,
					'itemView'=>'_view_toenroll',
					'template'=>'{items}{pager}',
					'viewData' => array( 'model' => $model),
					'id'=>'to-enroll'
				));*/ ?>
			</div>
			<div class="tab-pane" id="pending">
			<?php 
				/*$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$pending,
					'itemView'=>'_view',
					'template'=>'{items}{pager}'
				));*/ ?>
			</div>-->
		</div>		
	</div>
</div>