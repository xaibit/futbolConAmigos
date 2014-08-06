<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="jumbotron text-center">
  <h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
  <p>El lugar donde podr&aacute;s demostrar tus conocimientos futboleros y porque no tu suerte, pronosticando los resultados fecha a fecha de los torneos nacionales. La pelota ya est&aacute; en juego, segu&iacute; tu instinto futbolero y jug&aacute;.</p>  
  <?php if (Yii::app()->user->isGuest) { ?>
  <p>
  	<?php echo CHtml::link('Registrarse', array('user/create'), array('class' => 'btn btn-primary btn-lg btn-register')); ?>&nbsp;
  	<?php echo CHtml::link('Iniciar Sesi&oacute;n', array('site/login'), array('class' => 'btn btn-default btn-lg')); ?>
  </p>
  <?php } ?>
</div>
