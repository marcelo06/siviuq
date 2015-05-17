<div class="evaluadors form">
<?php echo $this->Form->create('Evaluador'); ?>
	<fieldset>
		<legend><?php echo __('Add Evaluador'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Evaluadors'), array('action' => 'index')); ?></li>
	</ul>
</div>
