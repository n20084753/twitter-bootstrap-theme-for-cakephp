<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Scaffolds
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta(array("name"=>"viewport","content"=>"width=device-width,  initial-scale=1.0"));
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		// docs.css is only for this exapmple, remove for app dev
		echo $this->Html->css('docs');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('vendor/modernizr-2.6.2-respond-1.1.0.min');
	?>
	
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">

	<?php echo $this->element('menu/top_menu'); ?>

	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>

	<!-- Footer
   	================================================== -->
	<footer class="footer">
		<div class="container">
			<p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
			<p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
			<p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
			<p>
				<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
			</p>
			<ul class="footer-links">
				<li><a href="http://blog.getbootstrap.com">Blog</a></li>
				<li class="muted">&middot;</li>
				<li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
				<li class="muted">&middot;</li>
				<li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap and changelog</a></li>
			</ul>
		</div>
	</footer>

	<?php 
		echo $this->Html->script('vendor/jquery-1.8.3.min');

		echo $this->Html->script('vendor/bootstrap-transition');
		echo $this->Html->script('vendor/bootstrap-alert');
		echo $this->Html->script('vendor/bootstrap-modal');
		echo $this->Html->script('vendor/bootstrap-dropdown');
		echo $this->Html->script('vendor/bootstrap-scrollspy');
		echo $this->Html->script('vendor/bootstrap-tab');
		echo $this->Html->script('vendor/bootstrap-tooltip');
		echo $this->Html->script('vendor/bootstrap-popover');
		echo $this->Html->script('vendor/bootstrap-button');
		echo $this->Html->script('vendor/bootstrap-collapse');
		echo $this->Html->script('vendor/bootstrap-carousel');
		echo $this->Html->script('vendor/bootstrap-typeahead');
		echo $this->Html->script('vendor/bootstrap-affix');

		echo $this->Html->script('vendor/holder/holder');
		echo $this->Html->script('vendor/google-code-prettify/prettify');

		// application.js is only for this exapmple, remove for app dev
		echo $this->Html->script('bootstrap/application');
		
		// main.js this file can be used to contain or reference your site/app JavaScript code
		echo $this->Html->script('main');

		echo $this->fetch('script');
	?>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
