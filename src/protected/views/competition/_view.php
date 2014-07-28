<?php
/* @var $this CompetitionController */
/* @var $data Competition */
?>
<span class="list-group-item competition">
	<?php if (isset($data->image)):?> 
	<img width="50" height="50"
		alt="<?php echo CHtml::encode($data->name); ?>"
		src="<?php echo Yii::app()->request->baseUrl .'/images/escudos/'.$data->image; ?>">&nbsp;
	<?php endif;?>
	<strong><?php echo $data->name;?></strong>
</span>