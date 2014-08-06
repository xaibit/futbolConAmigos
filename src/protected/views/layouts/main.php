<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="language" content="en" />

<!-- Bootstrap -->
<link
	href="<?php echo Yii::app()->request->baseUrl; ?>/plugins/bootstrap/css/bootstrap-flatly.min.css"
	rel="stylesheet" type="text/css">

<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"
	rel="stylesheet" type="text/css">
<!--<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">P&aacute;lpito Futbolero</a>
			</div>
			<div class="navbar-collapse collapse">
			<?php		
				$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Inicio', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
						/*array('label'=>'Usuarios', 'url'=>array('/user/index'), 'visible'=>!Yii::app()->user->isGuest),*/
						array('label'=>'Grupos', 'url'=>array('/group/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Partidos', 'url'=>array('/match/index'), 'visible'=>!Yii::app()->user->isGuest),
						/*array('label'=>'Preguntas', 'url'=>array('/question/index'), 'visible'=>!Yii::app()->user->isGuest),*/
						array('label'=>'Predicciones', 'url'=>array('/prediction/index'), 'visible'=>!Yii::app()->user->isGuest),
						/*array('label'=>'Equipos', 'url'=>array('/team/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Jugadores', 'url'=>array('/player/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Usuario-Grupo', 'url'=>array('/usergroup/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Competicion', 'url'=>array('/competition/index'), 'visible'=>!Yii::app()->user->isGuest),*/
						array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Contacto', 'url'=>array('/site/contact')),
						array('label'=>'Ayuda&nbsp;<span class="glyphicon glyphicon-question-sign"></span>', 'url'=>array('/site/page', 'view'=>'help'), 'visible'=>!Yii::app()->user->isGUest),
						array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Mi perfil', 'url'=>array('/user/update','id'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Salir', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						
					),
					'htmlOptions' => array (
								'class' => 'nav navbar-nav' 
					),
					'activeCssClass' => 'active',
					'itemCssClass' => '',
					'encodeLabel'=>false
				)); 
			?>
			</div>
			<!-- collapsable section -->
		</div>
		<!--  navbar container -->
	</nav>
	<!-- mainmenu -->		
	<div class="container">
		<?php echo $content; ?>
	</div>
	<!-- main container -->
	<footer class="footer">
		<div class="container">
			<p class="text-muted">Copyright &copy; <?php echo date('Y'); ?> 
			<a href="http://palpitofutbolero.com.ar">palpitofutbolero.com.ar</a>&nbsp;|&nbsp;
			<a class="mailto" href="mailto:palpitofutbolero@gmail.com">palpitofutbolero@gmail.com</a>&nbsp;|&nbsp;Todos
				los derechos reservados
			</p>
		</div>
	</footer>
	<!-- footer -->
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript"
		src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
