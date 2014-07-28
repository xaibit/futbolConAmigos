<?php
/* @var $this GroupController */
/* @var $data Group */
?>
<?php 		
		if (Yii::app()->user->id){
			$criteria = new CDbCriteria;  
			$criteria->condition ='t.user  = '.Yii::app()->user->id.' AND t.group = '.$data->idGroup;
			$usergroup = Usergroup::model()->find($criteria);							
		}				
	?>	
<div class="row view ">
	<div class="panel panel-default">
		<div class="panel-body">    
			<input value="<?php echo $data->idGroup; ?>" type="hidden" />
			<p><?php echo $data->name; ?></p>
			<?php echo CHtml::link('ver', array('view', 'id'=>$data->idGroup)); ?>
			<?php  if ($usergroup == NULL) {	?>
			
			
			<?php echo CHtml::button('postularse',array('submit'=>array('usergroup/create'),'params'=>array('group' => $data->idGroup, 'user' => Yii::app()->user->id)));?>
			<?php  } ?>
			
			<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('idGroup')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->idGroup), array('view', 'id'=>$data->idGroup)); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
			<?php echo CHtml::encode($data->name); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('userAdmin')); ?>:</b>
			<?php echo CHtml::encode($data->userAdmin); ?>
			<br />
			-->
		</div>
	</div>
</div>