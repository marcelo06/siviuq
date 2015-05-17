<div class="evaluadors index">
	<h2><?php echo __('Evaluadors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_evaluador'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_completo'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo_profesional'); ?></th>
			<th><?php echo $this->Paginator->sort('institucion'); ?></th>
			<th><?php echo $this->Paginator->sort('especializacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($evaluadors as $evaluador): ?>
	<tr>
		<td><?php echo h($evaluador['Evaluador']['id_evaluador']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['nombre_completo']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['email']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['titulo_profesional']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['institucion']); ?>&nbsp;</td>
		<td><?php echo h($evaluador['Evaluador']['especializacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evaluador['Evaluador']['id_evaluador'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evaluador['Evaluador']['id_evaluador'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evaluador['Evaluador']['id_evaluador']), array(), __('Are you sure you want to delete # %s?', $evaluador['Evaluador']['id_evaluador'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evaluador'), array('action' => 'add')); ?></li>
	</ul>
</div>
