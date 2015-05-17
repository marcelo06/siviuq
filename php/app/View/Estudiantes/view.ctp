<div class="estudiantes view">
<h2><?php echo __('Estudiante'); ?></h2>
	<dl>
		<dt><?php echo __('Id Estudiante'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['id_estudiante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['nombre_completo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre Actual'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['semestre_actual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiante['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $estudiante['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiante['Programa']['nombre'], array('controller' => 'programas', 'action' => 'view', $estudiante['Programa']['id_programa'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estudiante'), array('action' => 'edit', $estudiante['Estudiante']['id_estudiante'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estudiante'), array('action' => 'delete', $estudiante['Estudiante']['id_estudiante']), array(), __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id_estudiante'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('controller' => 'programas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('controller' => 'programas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiante Semilleros'), array('controller' => 'estudiante_semilleros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante Semillero'), array('controller' => 'estudiante_semilleros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estudiante Semilleros'); ?></h3>
	<?php if (!empty($estudiante['EstudianteSemillero'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Estudiante Semillero'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th><?php echo __('Semillero Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estudiante['EstudianteSemillero'] as $estudianteSemillero): ?>
		<tr>
			<td><?php echo $estudianteSemillero['id_estudiante_semillero']; ?></td>
			<td><?php echo $estudianteSemillero['estudiante_id']; ?></td>
			<td><?php echo $estudianteSemillero['semillero_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estudiante_semilleros', 'action' => 'view', $estudianteSemillero['id_estudiante_semillero'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estudiante_semilleros', 'action' => 'edit', $estudianteSemillero['id_estudiante_semillero'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estudiante_semilleros', 'action' => 'delete', $estudianteSemillero['id_estudiante_semillero']), array(), __('Are you sure you want to delete # %s?', $estudianteSemillero['id_estudiante_semillero'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estudiante Semillero'), array('controller' => 'estudiante_semilleros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
