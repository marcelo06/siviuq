<div class="semilleros index">
	<h2><?php echo __('Semilleros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_semillero'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion_coordinador'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_investigacion_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($semilleros as $semillero): ?>
	<tr>
		<td><?php echo h($semillero['Semillero']['id_semillero']); ?>&nbsp;</td>
		<td><?php echo h($semillero['Semillero']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($semillero['Semillero']['identificacion_coordinador']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($semillero['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $semillero['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $semillero['Semillero']['id_semillero'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $semillero['Semillero']['id_semillero'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $semillero['Semillero']['id_semillero']), array(), __('Are you sure you want to delete # %s?', $semillero['Semillero']['id_semillero'])); ?>
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
		<li><?php echo $this->Html->link(__('New Semillero'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
