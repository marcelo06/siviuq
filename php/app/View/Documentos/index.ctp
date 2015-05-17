<div class="documentos index">
	<h2><?php echo __('Documentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_documento'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('tamano'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($documentos as $documento): ?>
	<tr>
		<td><?php echo h($documento['Documento']['id_documento']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['tamano']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['url']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($documento['Proyecto']['nombre_completo'], array('controller' => 'proyectos', 'action' => 'view', $documento['Proyecto']['id_proyecto'])); ?>
		</td>
		<td><?php echo h($documento['Documento']['created']); ?>&nbsp;</td>
		<td><?php echo h($documento['Documento']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $documento['Documento']['id_documento'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $documento['Documento']['id_documento'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $documento['Documento']['id_documento']), array(), __('Are you sure you want to delete # %s?', $documento['Documento']['id_documento'])); ?>
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
		<li><?php echo $this->Html->link(__('New Documento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
