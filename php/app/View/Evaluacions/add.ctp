<div class="evaluacions form">
<?php echo $this->Form->create('Evaluacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Evaluacion'); ?></legend>
	<?php
		echo $this->Form->input('cronograma');
		echo $this->Form->input('estado_tema');
		echo $this->Form->input('estrategias_comunicacion');
		echo $this->Form->input('investigador_principal');
		echo $this->Form->input('impacto_social');
		echo $this->Form->input('justificacion');
		echo $this->Form->input('metodologia');
		echo $this->Form->input('objetivos');
		echo $this->Form->input('planteamineto');
		echo $this->Form->input('presupuesto');
		echo $this->Form->input('producto_esperado');
		echo $this->Form->input('resultado_esperado');
		echo $this->Form->input('calificacion_total');
		echo $this->Form->input('concepto_evaluador');
		echo $this->Form->input('observacion');
		echo $this->Form->input('fecha_limite_entrega');
		echo $this->Form->input('fecha_entrega');
		echo $this->Form->input('evaluador_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Evaluacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluadors'), array('controller' => 'evaluadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluador'), array('controller' => 'evaluadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
