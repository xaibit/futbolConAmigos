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
	$.fn.yiiListView.update('to-enroll', {data:$(this).serialize()});
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
				<a href="#mygroups" role="tab" data-toggle="tab">Mis Grupos</a>
			</li>
			<li>
				<a href="#pending" role="tab" data-toggle="tab">Pendientes de Aprobaci&oacute;n</a>
			</li>
			<li>
				<a href="#search" role="tab" data-toggle="tab">Buscar Grupos</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="mygroups">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$mygroups,
					'itemView'=>'_view',
					'template'=>'{items}{pager}',
					'viewData'=>array('model'=>$model)
				)); ?>
			</div>
			<div class="tab-pane fade" id="pending">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$pending,
					'itemView'=>'_view',
					'template'=>'{items}{pager}',
					'viewData'=>array('model'=>$model),
					'id'=>'pending-list'
				)); ?>
			</div>
			<div class="tab-pane fade" id="search">
			<?php
				$form=$this->beginWidget('CActiveForm', array(
					'action'=>Yii::app()->createUrl($this->route),
					'method'=>'get',
					'id'=>'search-group',
					'htmlOptions'=>array('class'=>'form-inline')
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
					'dataProvider'=>$all,
					'itemView'=>'_view_toenroll',
					'template'=>'{items}{pager}',
					'id'=>'to-enroll',
					'viewData'=>array('model'=>$model)
				)); ?>
			</div>
		</div>		
	</div>
</div>