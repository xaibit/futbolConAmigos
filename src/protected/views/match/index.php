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
			
		</div><!-- panel -->			
	</div><!-- tab-pane -->
	<?php 
			$i++;
		} 
	?>		
</div>