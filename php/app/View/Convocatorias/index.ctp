<div class="convocatorias index">
	<h2><?php echo __('Convocatorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('Descargar documento'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_final'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($convocatorias as $convocatoria): ?>
	<tr>
		
		<td><?php echo h($convocatoria['Convocatoria']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['descripcion']); ?>&nbsp;</td>
		<?php $archivo=$convocatoria['Convocatoria']['nombre_archivo'];?>
		
		<td><?php echo $this->Html->link(__($archivo), array('controller' => 'convocatorias', 'action' => 'download', $archivo)); ?> </td>
		<td><?php echo h($convocatoria['Convocatoria']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($convocatoria['Convocatoria']['fecha_final']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Aplicar convocatoria'), array('controller' => 'propuestaconvocatorias', 'action' => 'add')); ?>
			
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
		<li><?php echo $this->Html->link(__('New Convocatoria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
