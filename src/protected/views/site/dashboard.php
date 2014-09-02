<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<?php 
		$i=0;
		foreach ($competitions as $competition) { ?>
			<li class="<?php echo ($i== 0) ? "active" : "";?>">
				<a href="<?php echo "#tab-$i";?>" role="tab" data-toggle="tab"><?php echo $competition->name; $i++;?></a>
			</li>				
	<?php } ?>
</ul>

<!-- Tab panes -->
<div class="tab-content dashboard">
<?php 
	$index=0;
	foreach ($competitions as $competition) { 
		$afadates = array();
		if (isset($user)) {
			$matchs = Match::model()->findAll(array(
				'select'=>'t.afaDate', 
				'distinct'=>true, 
				'condition'=>'competition=:competition', 
				'params'=>array(':competition'=>$competition->idCompetition)
			));
			
			foreach ($matchs as $match) {
				array_push($afadates, $user->getPointsByDate($match->afaDate));
			}				
		}
?>
	<div class="<?php echo ($index == 0) ? "tab-pane active":"tab-pane" ?>" id="<?php echo "tab-$index";$index++;?>">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><span class="glyphicon glyphicon-stats"></span>&nbsp;Fecha a Fecha</h3>
					</div>
					<div class="panel-body">
						<div class="panel-group" id="accordion">
						<?php $i = 1; foreach ($afadates as $value) { ?>
							<div class="panel panel-success">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion"
											href="#collapse<?php echo $i;?>"><?php echo $competition->name;?> - Fecha <?php echo $i; ?>
										</a>
									</h4>
								</div>
								<div id="collapse<?php echo $i;?>"
									class="panel-collapse collapse<?php echo ($i == count($afadates)) ? ' in' : '';?>">
									<div class="panel-body">
										<h1>
											<span class="glyphicon glyphicon-hand-right"></span>&nbsp;<?php echo $value; $i++;?>&nbsp;Puntos
										</h1>
									</div>
								</div>
							</div>
					<?php }?>
					 
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<span class="glyphicon glyphicon-info-sign"></span>&nbsp;Compet&iacute;s en los siguientes grupos
						</h3>
					</div>
					<div class="panel-body">
					<?php
						$this->widget('zii.widgets.CListView', array(
							'dataProvider' => $dataProvider,
							'itemView' => '/group/_view_dashboard',
							'template' => '{items}{pager}',
							'itemsCssClass' => '',
							'htmlOptions' => array (
									'class' => 'list-group' 
							),
							'emptyText' => '<li class="list-group-item">No hay resultados</li>' 
						));
					?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<span class="glyphicon glyphicon-signal"></span>&nbsp;Puntaje total
						</h3>
					</div>
					<div class="panel-body">
						<h1>
							<span class="glyphicon glyphicon-hand-right"></span>&nbsp;
							<?php echo (isset($user)) ? $user->score : '0';?>&nbsp;Puntos
						</h1>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<span class="glyphicon glyphicon-star"></span>&nbsp;Puntaje m&aacute;s alto
						</h3>
					</div>
					<div class="panel-body">
						<h1>
							<span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;
							<?php echo (count($afadates) > 0) ? max($afadates) : '0';?>&nbsp;Puntos
						</h1>
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<span class="glyphicon glyphicon-star-empty"></span>Puntaje m&aacute;s bajo
						</h3>
					</div>
					<div class="panel-body">
						<h1>
							<span class="glyphicon glyphicon-thumbs-down"></span>&nbsp;
							<?php echo (count($afadates) > 0) ? min($afadates) : '0';?>&nbsp;Puntos
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>