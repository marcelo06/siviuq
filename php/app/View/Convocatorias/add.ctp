<div class="convocatorias form">
<?php echo $this->Form->create('Convocatoria', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Convocatoria'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		//echo $this->Form->input('nombre_archivo');
		//echo $this->Form->input('tamano');
		//echo $this->Form->input('url');
		echo $this->Form->file('archivo');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_final');
		echo $this->Form->input('administrador_id');
		echo $this->Form->input('estado',array('type' =>'hidden', 'value' =>1));
			
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Convocatorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
