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
<div class="alert alert-info alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert">
		<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
	</button>
	Aqu&iacute; puedes crear un grupo e invitar amigos para que se sumen.
	En esta secci&oacute;n podr&aacute;s ver:
	<ul>
		<li><strong>Mis Grupos:</strong> los grupos en los que est&aacute;s
			inscripto o los que administras.</li>
		<li><strong>Pendientes de aprobaci&oacute;n:</strong> los grupos que
			te has postulado y el administrador a&uacute;n no te ha aceptado.</li>
		<li><strong>Buscar grupos:</strong> los grupos en los que
			todav&iacute;a no participas ni eres el administrador. Puedes
			postularte para formar parte de cualquier de ellos, y luego
			ser&aacute; el administrador qui&eacute;n te apruebe. Adem&aacute;s,
			dentro de cada grupo podr&aacute;s encontrar el ranking de sus
			integrantes.</li>
	</ul>
</div>
<p><?php echo CHtml::link('Crear Grupo', array('create'), array('class'=>'btn btn-primary'));?></p>
<div class="row">
	<div class="col-md-9">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#mygroups" role="tab" data-toggle="tab">Mis
					Grupos</a></li>
			<li><a href="#pending" role="tab" data-toggle="tab">Pendientes de
					Aprobaci&oacute;n</a></li>
			<li><a href="#search" role="tab" data-toggle="tab">Buscar Grupos</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="mygroups">
				<div class="panel panel-default inner-panel">				
					<?php 
						$this->widget('zii.widgets.CListView', array(
							'dataProvider'=>$mygroups,
							'itemView'=>'_view',
							'template'=>'{items}{pager}',
							'viewData'=>array('model'=>$model),
							'itemsCssClass'=>'',
							'htmlOptions'=>array('class'=>'list-group'),
							'emptyText'=>'<li class="list-group-item">No hay resultados</li>'
						)); ?>
				</div>
			</div>
			<div class="tab-pane fade" id="pending">
				<div class="panel panel-default inner-panel">										
					<?php 
						$this->widget('zii.widgets.CListView', array(
							'dataProvider'=>$pending,
							'itemView'=>'_view',
							'template'=>'{items}{pager}',
							'viewData'=>array('model'=>$model),
							'id'=>'pending-list',
							'itemsCssClass'=>'',
							'htmlOptions'=>array('class'=>'list-group'),
							'emptyText'=>'<li class="list-group-item">No hay resultados</li>'
						)); ?>
				</div>
			</div>
			<div class="tab-pane fade" id="search">
				<div class="panel panel-default inner-panel">
					<div class="panel-body">
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
						<br>
						<div class="row">
							<div class="col-md-4">
								<strong>Grupo</strong>
							</div>
							<div class="col-md-2">
								<strong>Administrador</strong>
							</div>
							<div class="col-md-2 col-md-offset-4">
								<strong>Acci&oacute;n</strong>
							</div>
						</div>
					</div>
						<?php 
							$this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$all,
								'itemView'=>'_view_toenroll',
								'template'=>'{items}{pager}',
								'id'=>'to-enroll',
								'viewData'=>array('model'=>$model),
								'itemsCssClass'=>'',
								'htmlOptions'=>array('class'=>'list-group'),
								'emptyText'=>'<li class="list-group-item">No hay resultados</li>'
							)); ?>
												
				</div>
				<!-- panel -->
			</div>
			<!-- tab-pane -->
		</div>
	</div>
</div>