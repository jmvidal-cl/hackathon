<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset()."\r"; ?>
	<title>BCI - Maratón para tu propiedad</title>
	<?php
	echo
	$this->fetch('meta')."\r".
	$this->Html->meta('icon')."\r".
	$this->Html->css('glyphs.css')."\r".
	$this->Html->css('reset.css')."\r".
	$this->Html->css('style.css')."\r";
	?>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<?php echo $this->Html->script('bootstrap.min.js'); ?>
	<?php echo $this->Html->script('functions.js'); ?>
</head>
<body>
	<article>
		<header>
			<div class="container">
				<div class="row flex">
					<div class="col-md-6 logo">
						<?php echo $this->Html->image('bci_logo.jpg', array('alt' => 'BCI')); ?>
						<p>Maratón para tu propiedad</p>
					</div>
					<div class="col-md-6 text_right">
						<div class="cont-ext">
							<div class="cont-int">
								<?php if(empty($_SESSION["datosUsuario"]['Cliente'])){ ?>
								<a href="#" id="registrarse" onclick="abrirLightbox(); return false;"><span class="glyphicon glyphicon-user"></span>Registrarse</a>
								<?php }else{ ?>
								<p><span class="glyphicon glyphicon-user"></span> Bienvenido, <?php echo $_SESSION["datosUsuario"]['Cliente']['nombres']; ?></p>
								<a href="<?php echo $this->Html->url(["controller" => "Login","action" => "cerrarSession"]); ?>"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="separadores">
				<div class="separador verde"></div>
				<div class="separador rojo"></div>
				<div class="separador azul"></div>
				<div class="separador amarillo"></div>
			</div>
		</header>

		<div id="lucho"></div>

		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>

		<footer>
			<div class="container">
				<div class="row flex">
					<div class="col-md-6">
						<p>Atención a Clientes Bci Directo: <mark>600 692 8000</mark>, Mesa Central: <mark>22692 7000</mark><br>
						Av. El Golf 125, Las Condes, Santiago. Notificaciones Legales: Agustinas 1161, 7° piso. Santiago Centro, Santiago.</p>
					</div>
					<div class="col-md-6 text_right">
						<div class="cont-ext">
							<div class="cont-int">
								<ul class="social">
									<li><a href="#"><span class="fa fa-facebook-official"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
									<li><a href="#"><span class="fa fa-whatsapp"></span></a></li>
									<li><a href="#"><span class="fa fa-comment"></span></a></li>
									<li><a href="#"><span class="fa fa-envelope"></span></a></li>
									<li><a href="#"><?php echo $this->Html->image('asterisk.png', array('alt' => 'BCI')); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</article>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>