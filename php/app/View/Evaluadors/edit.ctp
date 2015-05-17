<div class="evaluadors form">
<?php echo $this->Form->create('Evaluador'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evaluador'); ?></legend>
	<?php
		echo $this->Form->input('id_evaluador');
		echo $this->Form->input('nombre_completo');
		echo $this->Form->input('cedula');
		echo $this->Form->input('direccion');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('titulo_profesional');
		echo $this->Form->input('institucion');
		echo $this->Form->input('especializacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evaluador.id_evaluador')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Evaluador.id_evaluador'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluadors'), array('action' => 'index')); ?></li>
	</ul>
</div>
