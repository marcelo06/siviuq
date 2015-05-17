<div class="administradors index">
	<h2><?php echo __('Administradors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_administrador'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_completo'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion_cargo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($administradors as $administrador): ?>
	<tr>
		<td><?php echo h($administrador['Administrador']['id_administrador']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['nombre_completo']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['email']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['descripcion_cargo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $administrador['Administrador']['id_administrador'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $administrador['Administrador']['id_administrador'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $administrador['Administrador']['id_administrador']), array(), __('Are you sure you want to delete # %s?', $administrador['Administrador']['id_administrador'])); ?>
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
		<li><?php echo $this->Html->link(__('New Administrador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('controller' => 'cuadro_verificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('controller' => 'cuadro_verificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
