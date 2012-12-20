<?php 
	
	$current_page = $this->params['action'];

?>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" target="_blank" href="http://twitter.github.com/bootstrap/">Bootstrap</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li <?php if($current_page=="index"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Scaffolding', array('controller' => 'docs', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="base_css"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Base CSS', array('controller' => 'docs', 'action' => 'base_css')); ?>
					</li>
					<li <?php if($current_page=="components"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Components', array('controller' => 'docs', 'action' => 'components')); ?>
					</li>
					<li <?php if($current_page=="javascript"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('JavaScript', array('controller' => 'docs', 'action' => 'javascript')); ?>
					</li>
				</ul>
          			</div>
        		</div>
	</div>
</div>