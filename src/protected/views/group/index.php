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
?>

<div class="page-header">
	<h1>Grupos</h1>
</div>
<p><?php echo CHtml::link('Crear Grupo', array('create'), array('class'=>'btn btn-primary'));?></p>
<div class="row">
	<div class="col-md-9">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#owner" role="tab" data-toggle="tab">Grupos
					que administro</a></li>
			<li><a href="#enrolled" role="tab" data-toggle="tab">Grupos a los que
					estoy inscripto</a></li>
			<li><a href="#available" role="tab" data-toggle="tab">Postularme</a></li>
			<li><a href="#pending" role="tab" data-toggle="tab">Pendientes de mi aprobaci&oacute;n</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="owner">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$owner,
					'itemView'=>'_view',
					'template'=>'{items}{pager}'
				)); ?>
			</div>
			<div class="tab-pane" id="enrolled">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$enrolled,
					'itemView'=>'_view',
					'template'=>'{items}{pager}'
				)); ?>
			</div>
			<div class="tab-pane" id="available">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$available,
					'itemView'=>'_view_toenroll',
					'template'=>'{items}{pager}',
					'viewData' => array( 'model' => $model),
					'id'=>'to-enroll'
				)); ?>
			</div>
			<div class="tab-pane" id="pending">
			<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$pending,
					'itemView'=>'_view',
					'template'=>'{items}{pager}'
				)); ?>
			</div>
		</div>		
	</div>
</div>