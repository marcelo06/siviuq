<div class="lineaInvestigacions view">
<h2><?php echo __('Linea Investigacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id Linea Investigacion'); ?></dt>
		<dd>
			<?php echo h($lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($lineaInvestigacion['LineaInvestigacion']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lineaInvestigacion['LineaInvestigacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lineaInvestigacion['LineaInvestigacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Linea Investigacion'), array('action' => 'edit', $lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Linea Investigacion'), array('action' => 'delete', $lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion']), array(), __('Are you sure you want to delete # %s?', $lineaInvestigacion['LineaInvestigacion']['id_linea_investigacion'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Grupos'), array('controller' => 'linea_grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Grupo'), array('controller' => 'linea_grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Linea Grupos'); ?></h3>
	<?php if (!empty($lineaInvestigacion['LineaGrupo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Linea Grupo'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Linea Investigacion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lineaInvestigacion['LineaGrupo'] as $lineaGrupo): ?>
		<tr>
			<td><?php echo $lineaGrupo['id_linea_grupo']; ?></td>
			<td><?php echo $lineaGrupo['grupo_investigacion_id']; ?></td>
			<td><?php echo $lineaGrupo['linea_investigacion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'linea_grupos', 'action' => 'view', $lineaGrupo['id_linea_grupo'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'linea_grupos', 'action' => 'edit', $lineaGrupo['id_linea_grupo'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'linea_grupos', 'action' => 'delete', $lineaGrupo['id_linea_grupo']), array(), __('Are you sure you want to delete # %s?', $lineaGrupo['id_linea_grupo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Linea Grupo'), array('controller' => 'linea_grupos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($lineaInvestigacion['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Proyecto'); ?></th>
		<th><?php echo __('Docente Id'); ?></th>
		<th><?php echo __('Cedula Estudiante1'); ?></th>
		<th><?php echo __('Cedula Estudiante2'); ?></th>
		<th><?php echo __('Cedula Estudiante3'); ?></th>
		<th><?php echo __('Nombre Completo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Duracion'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Prorroga'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Resultado Esperado'); ?></th>
		<th><?php echo __('Resultado'); ?></th>
		<th><?php echo __('Codigo Aprobacion'); ?></th>
		<th><?php echo __('Codigo Inscripcion'); ?></th>
		<th><?php echo __('Consecutivo'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th><?php echo __('Evaluacion Id'); ?></th>
		<th><?php echo __('Modalidad'); ?></th>
		<th><?php echo __('Linea Investigacion Id'); ?></th>
		<th><?php echo __('Cuadro Verificacion Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lineaInvestigacion['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['id_proyecto']; ?></td>
			<td><?php echo $proyecto['docente_id']; ?></td>
			<td><?php echo $proyecto['cedula_estudiante1']; ?></td>
			<td><?php echo $proyecto['cedula_estudiante2']; ?></td>
			<td><?php echo $proyecto['cedula_estudiante3']; ?></td>
			<td><?php echo $proyecto['nombre_completo']; ?></td>
			<td><?php echo $proyecto['descripcion']; ?></td>
			<td><?php echo $proyecto['duracion']; ?></td>
			<td><?php echo $proyecto['objetivo']; ?></td>
			<td><?php echo $proyecto['prorroga']; ?></td>
			<td><?php echo $proyecto['estado']; ?></td>
			<td><?php echo $proyecto['ciudad']; ?></td>
			<td><?php echo $proyecto['resultado_esperado']; ?></td>
			<td><?php echo $proyecto['resultado']; ?></td>
			<td><?php echo $proyecto['codigo_aprobacion']; ?></td>
			<td><?php echo $proyecto['codigo_inscripcion']; ?></td>
			<td><?php echo $proyecto['consecutivo']; ?></td>
			<td><?php echo $proyecto['administrador_id']; ?></td>
			<td><?php echo $proyecto['evaluacion_id']; ?></td>
			<td><?php echo $proyecto['modalidad']; ?></td>
			<td><?php echo $proyecto['linea_investigacion_id']; ?></td>
			<td><?php echo $proyecto['cuadro_verificacion_id']; ?></td>
			<td><?php echo $proyecto['created']; ?></td>
			<td><?php echo $proyecto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id_proyecto'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id_proyecto'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id_proyecto']), array(), __('Are you sure you want to delete # %s?', $proyecto['id_proyecto'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
