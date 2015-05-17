<div class="lineaInvestigacions form">
<?php echo $this->Form->create('LineaInvestigacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Linea Investigacion'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Linea Grupos'), array('controller' => 'linea_grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Grupo'), array('controller' => 'linea_grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
