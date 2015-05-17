<div class="evaluacions index">
	<h2><?php echo __('Evaluacions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_evaluacion'); ?></th>
			<th><?php echo $this->Paginator->sort('cronograma'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_tema'); ?></th>
			<th><?php echo $this->Paginator->sort('estrategias_comunicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('investigador_principal'); ?></th>
			<th><?php echo $this->Paginator->sort('impacto_social'); ?></th>
			<th><?php echo $this->Paginator->sort('justificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('metodologia'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivos'); ?></th>
			<th><?php echo $this->Paginator->sort('planteamineto'); ?></th>
			<th><?php echo $this->Paginator->sort('presupuesto'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_esperado'); ?></th>
			<th><?php echo $this->Paginator->sort('resultado_esperado'); ?></th>
			<th><?php echo $this->Paginator->sort('calificacion_total'); ?></th>
			<th><?php echo $this->Paginator->sort('concepto_evaluador'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_limite_entrega'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_entrega'); ?></th>
			<th><?php echo $this->Paginator->sort('evaluador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($evaluacions as $evaluacion): ?>
	<tr>
		<td><?php echo h($evaluacion['Evaluacion']['id_evaluacion']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['cronograma']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['estado_tema']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['estrategias_comunicacion']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['investigador_principal']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['impacto_social']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['justificacion']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['metodologia']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['objetivos']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['planteamineto']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['presupuesto']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['producto_esperado']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['resultado_esperado']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['calificacion_total']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['concepto_evaluador']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['observacion']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['fecha_limite_entrega']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['fecha_entrega']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evaluacion['Evaluador']['nombre_completo'], array('controller' => 'evaluadors', 'action' => 'view', $evaluacion['Evaluador']['id_evaluador'])); ?>
		</td>
		<td><?php echo h($evaluacion['Evaluacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($evaluacion['Evaluacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evaluacion['Evaluacion']['id_evaluacion'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evaluacion['Evaluacion']['id_evaluacion'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evaluacion['Evaluacion']['id_evaluacion']), array(), __('Are you sure you want to delete # %s?', $evaluacion['Evaluacion']['id_evaluacion'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluadors'), array('controller' => 'evaluadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluador'), array('controller' => 'evaluadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
