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

/*Yii::app ()->clientScript->registerScript('ajaxUpdate', "
		$('#pending-list').on('click', '.btn-approve', function(){
			$.fn.yiiListView.update('pending-list')
		 });	
 		return false;", CClientScript::POS_READY);*/
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo CHtml::encode($model->name)?></h3>
	</div>
	<div class="panel-body">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#players">Participantes</a>
					</h4>
				</div>
				<div id="players" class="panel-collapse collapse in">
					<div class="panel-body">ACA IRIA LA TABLA DE JUGADORES DEL TORNEO
						CON LOS PUNTOS</div>
				</div>
			</div>
			<?php if ($model->userAdmin == Yii::app()->user->id):?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#pending">Pendientes
							de Aprobaci&oacute;n</a>
					</h4>
				</div>
				<div id="pending" class="panel-collapse collapse">
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
							'id'=>'pending-list'
						)); ?>					
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>