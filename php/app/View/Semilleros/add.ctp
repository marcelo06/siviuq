<div class="semilleros form">
<?php echo $this->Form->create('Semillero'); ?>
	<fieldset>
		<legend><?php echo __('Add Semillero'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('identificacion_coordinador');
		echo $this->Form->input('grupo_investigacion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Semilleros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
