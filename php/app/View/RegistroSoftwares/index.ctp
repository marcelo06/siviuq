<div class="registroSoftwares index">
	<h2><?php echo __('Registro Softwares'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_registro_software'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($registroSoftwares as $registroSoftware): ?>
	<tr>
		<td><?php echo h($registroSoftware['RegistroSoftware']['id_registro_software']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registroSoftware['Proyecto']['nombre_completo'], array('controller' => 'proyectos', 'action' => 'view', $registroSoftware['Proyecto']['id_proyecto'])); ?>
		</td>
		<td><?php echo h($registroSoftware['RegistroSoftware']['descripcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $registroSoftware['RegistroSoftware']['id_registro_software'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $registroSoftware['RegistroSoftware']['id_registro_software'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $registroSoftware['RegistroSoftware']['id_registro_software']), array(), __('Are you sure you want to delete # %s?', $registroSoftware['RegistroSoftware']['id_registro_software'])); ?>
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
		<li><?php echo $this->Html->link(__('New Registro Software'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
