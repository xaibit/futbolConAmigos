<?php
/* @var $this GroupController */
/* @var $model Group */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Group', 'url'=>array('index')),
	array('label'=>'Create Group', 'url'=>array('create')),
	array('label'=>'Update Group', 'url'=>array('update', 'id'=>$model->idGroup)),
	array('label'=>'Delete Group', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGroup),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Group', 'url'=>array('admin')),
);
Yii::app()->clientScript->registerScript( 'reject', "
$('#popup-reject').on('click', '.btn-modal-ok', function(e) {
	var url = '".Yii::app()->createAbsoluteUrl('usergroup/delete')."';
	url += '/' + $('#popup-reject').attr('data-id')
	$.ajax({
		type: 'POST',
		url: url,
		success: function(data) {
			$.fn.yiiListView.update('players-list');
		}
	});	
	$('#popup-reject').modal('hide');
	return false;
});
$('#players-list').on('click', '.btn-reject', function(e) {
	$('#popup-reject').attr('data-id', $(this).attr('data-id'));
});
" );
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10"><h4><?php echo CHtml::encode($model->name); ?></h4></div>
			<div class="col-md-2"><?php echo CHtml::link('Volver a Mis Grupos', array('index'), array('class'=>'btn btn-default')); ?></div>
		</div>
	</div>
	<div class="panel-body">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active">
				<a href="#players" role="tab" data-toggle="tab">Participantes</a>
			</li>
			<?php if (Yii::app()->user->id == $model->userAdmin): ?>
			<li>
				<a href="#pending" role="tab" data-toggle="tab">Pendientes de Aprobaci&oacute;n</a>
			</li>
			<?php endif;?>
		</ul>

		<div class="tab-content">
			<div class="tab-pane fade in active" id="players">
				<div class="panel panel-default inner-panel">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<strong>Usuario</strong>
							</div>
							<div class="col-md-2">
								<strong>Puntos</strong>
							</div>
							<div class="col-md-4">
								<strong>Acci&oacute;n</strong>
							</div>
						</div>
					</div>
					<?php 
					$this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$players,
						'itemView'=>'_view_player',
						'template'=>'{items}{pager}',
						'viewData' => array('group' => $model->idGroup),
						'id'=>'players-list',
						'itemsCssClass'=>'',
						'htmlOptions'=>array('class'=>'list-group'),
						'emptyText'=>'<li class="list-group-item">No hay resultados</li>'
					)); ?>	
				</div>				
			</div>
			<?php if (Yii::app()->user->id == $model->userAdmin): ?>
			<div class="tab-pane fade" id="pending">
				<div class="panel panel-default inner-panel">
					<div class="panel-body">
						<p>
							Acepta a los usuarios que quieren participar en tu torneo
							presionando el bot&oacute;n <i>Aprobar</i>
						</p>
					</div>
						<?php 
						$this->widget('zii.widgets.CListView', array(
							'dataProvider'=>$dataProvider,
							'itemView'=>'_view_pending',
							'template'=>'{items}{pager}',
							'viewData' => array('group' => $model->idGroup),
							'id'=>'pending-list',
							'itemsCssClass'=>'',
							'htmlOptions'=>array('class'=>'list-group'),
							'emptyText'=>'<li class="list-group-item">No hay resultados</li>'
						)); ?>	
				</div>				
			</div>
			<?php endif;?>
		</div>
	</div>
</div>
<div class="modal fade" id="popup-reject" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Atenci&oacute;n</h4>
			</div>
			<div class="modal-body">
				<p>El usuario ser&aacute; expulsado del grupo. Esta seguro?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary btn-modal-ok">Aceptar</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->