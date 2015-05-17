<div class="registroSoftwares form">
<?php echo $this->Form->create('RegistroSoftware'); ?>
	<fieldset>
		<legend><?php echo __('Edit Registro Software'); ?></legend>
	<?php
		echo $this->Form->input('id_registro_software');
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegistroSoftware.id_registro_software')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('RegistroSoftware.id_registro_software'))); ?></li>
		<li><?php echo $this->Html->link(__('List Registro Softwares'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
