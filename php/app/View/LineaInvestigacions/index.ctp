<div class="lineaInvestigacions index">
	<h2><?php echo __('Linea Investigacions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_linea_investigacion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lineaInvestigacions as $lineaInvestigacion): ?>
	<tr>
		<td><?php echo h($lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion']); ?>&nbsp;</td>
		<td><?php echo h($lineaInvestigacion['LineaInvestigacion']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($lineaInvestigacion['LineaInvestigacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($lineaInvestigacion['LineaInvestigacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion']), array(), __('Are you sure you want to delete # %s?', $lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion'])); ?>
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
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Linea Grupos'), array('controller' => 'linea_grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Grupo'), array('controller' => 'linea_grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
