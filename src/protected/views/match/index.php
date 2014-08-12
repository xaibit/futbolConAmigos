<?php
/* @var $this MatchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Matches',
);

$this->menu=array(
	array('label'=>'Create Match', 'url'=>array('create')),
	array('label'=>'Manage Match', 'url'=>array('admin')),
);
?>

<div class="page-header">
	<h1>Partidos</h1>
</div>
<div class="alert alert-info alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert">
		<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
	</button>
	En esta secci&oacute;n se listan todos los partidos a predecir, y
	haciendo click en cada uno podr&aacute;s predecir o editar la
	predicci&oacute;n que hayas realizado anteriormente. Recuerda que
	puedes editarlo hasta una hora antes del inicio del partido.<br> 
	<span class="glyphicon glyphicon-certificate"></span>
	<strong>: Puedes palpitar el partido.</strong><br> 
	<span class="glyphicon glyphicon-edit"></span>
	<strong>: Puedes modificar el p&aacute;lpito realizado.</strong><br> 
	<span class="glyphicon glyphicon-remove"></span>
	<strong>: No puedes modificar el p&aacute;lpito realizado.</strong><br> 
	<span class="glyphicon glyphicon-minus"></span>
	<strong>: El partido ya se realiz&oacute; y no lo has palpitado.</strong>
</div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<?php
		$i = 0;
		foreach ($competitions as $competition) { 
	?>
			<li class="<?php echo ($i==0) ? "active" : ""; ?>"><a
		href="<?php echo '#tab-' . $i; ?>" role="tab" data-toggle="tab">
					<?php echo $competition->name; ?>
				</a></li>
	<?php 
			$i++;
		} 
	?>
</ul>

<!-- Tab panes -->
<div class="tab-content">	
	<?php
		$i = 0;
		foreach ($competitions as $competition) { 
	?>
	<div class="tab-pane fade<?php echo ($i==0) ? " in active" : ""; ?>"
		id="<?php echo 'tab-'. $i; ?>">
		<div class="panel panel-default inner-panel">
			<?php
				$this->widget('zii.widgets.CListView', array(
						'dataProvider'=> new CActiveDataProvider('Match', array(
							'criteria' => array(
								'with' => array(
									'predictions' => array(
										'condition' => 'user=' . Yii::app()->user->id
									)
								),								
								'order'=>'date ASC',
								'condition'=>'competition=:competition',
								'params'=>array(':competition'=>$competition->idCompetition)
							),
							'countCriteria'=>array()
						)),
						'template'=>'{items}',
						'itemView'=>'_view',
						'itemsCssClass'=>'',
						'enablePagination'=>false,
						'htmlOptions'=>array('class'=>'list-group'),
						'emptyText'=>'<li class="list-group-item">No hay resultados</li>'
				));
			?>
			
		</div>
		<!-- panel -->
	</div>
	<!-- tab-pane -->
	<?php 
			$i++;
		} 
	?>		
</div>