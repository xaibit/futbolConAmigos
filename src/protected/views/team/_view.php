<?php
/* @var $this TeamController */
/* @var $data Team */
?>

<div class="span3 view">
	
	<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo CHtml::encode($data->name); ?></h3>
      </div>
      <div class="panel-body">
        <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/escudos/'.$data->image);?>
      </div>
    </div>
	<input type="hidden" value="<?php echo $data->idTeam ; ?>" />
	<input type="hidden" value="<?php echo CHtml::encode($data->name); ?>" />
	<input type="hidden" value="<?php echo CHtml::encode($data->image); ?>" />

</div>