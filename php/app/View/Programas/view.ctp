<div class="programas view">
<h2><?php echo __('Programa'); ?></h2>
	<dl>
		<dt><?php echo __('Id Programa'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['id_programa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iniciales'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['iniciales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Programa'), array('action' => 'edit', $programa['Programa']['id_programa'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Programa'), array('action' => 'delete', $programa['Programa']['id_programa']), array(), __('Are you sure you want to delete # %s?', $programa['Programa']['id_programa'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Programas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docentes'); ?></h3>
	<?php if (!empty($programa['Docente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Docente'); ?></th>
		<th><?php echo __('Nombre Completo'); ?></th>
		<th><?php echo __('Clasificacion'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Dedicacion'); ?></th>
		<th><?php echo __('Anio Vinculacion'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Representante'); ?></th>
		<th><?php echo __('Programa Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($programa['Docente'] as $docente): ?>
		<tr>
			<td><?php echo $docente['id_docente']; ?></td>
			<td><?php echo $docente['nombre_completo']; ?></td>
			<td><?php echo $docente['clasificacion']; ?></td>
			<td><?php echo $docente['cedula']; ?></td>
			<td><?php echo $docente['dedicacion']; ?></td>
			<td><?php echo $docente['anio_vinculacion']; ?></td>
			<td><?php echo $docente['grupo_investigacion_id']; ?></td>
			<td><?php echo $docente['representante']; ?></td>
			<td><?php echo $docente['programa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docentes', 'action' => 'view', $docente['id_docente'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docentes', 'action' => 'edit', $docente['id_docente'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docentes', 'action' => 'delete', $docente['id_docente']), array(), __('Are you sure you want to delete # %s?', $docente['id_docente'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Estudiantes'); ?></h3>
	<?php if (!empty($programa['Estudiante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Estudiante'); ?></th>
		<th><?php echo __('Nombre Completo'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Semestre Actual'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Programa Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($programa['Estudiante'] as $estudiante): ?>
		<tr>
			<td><?php echo $estudiante['id_estudiante']; ?></td>
			<td><?php echo $estudiante['nombre_completo']; ?></td>
			<td><?php echo $estudiante['cedula']; ?></td>
			<td><?php echo $estudiante['semestre_actual']; ?></td>
			<td><?php echo $estudiante['email']; ?></td>
			<td><?php echo $estudiante['telefono']; ?></td>
			<td><?php echo $estudiante['direccion']; ?></td>
			<td><?php echo $estudiante['grupo_investigacion_id']; ?></td>
			<td><?php echo $estudiante['programa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estudiantes', 'action' => 'view', $estudiante['id_estudiante'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estudiantes', 'action' => 'edit', $estudiante['id_estudiante'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estudiantes', 'action' => 'delete', $estudiante['id_estudiante']), array(), __('Are you sure you want to delete # %s?', $estudiante['id_estudiante'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
