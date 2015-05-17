<div class="documentos form">
<?php echo $this->Form->create('Documento'); ?>
	<fieldset>
		<legend><?php echo __('Add Documento'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('tamano');
		echo $this->Form->input('url');
		echo $this->Form->input('proyecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Documentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
