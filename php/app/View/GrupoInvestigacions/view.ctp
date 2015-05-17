<div class="grupoInvestigacions view">
<h2><?php echo __('Grupo de Investigación'); ?></h2>
	<dl>
		<dt><?php echo __('Id Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo h($grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($grupoInvestigacion['GrupoInvestigacion']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($grupoInvestigacion['GrupoInvestigacion']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($grupoInvestigacion['GrupoInvestigacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($grupoInvestigacion['GrupoInvestigacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupo Investigacion'), array('action' => 'edit', $grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupo Investigacion'), array('action' => 'delete', $grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion']), array(), __('Are you sure you want to delete # %s?', $grupoInvestigacion['GrupoInvestigacion']['id_grupo_investigacion'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Proyectos'), array('controller' => 'grupo_proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Proyecto'), array('controller' => 'grupo_proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Grupos'), array('controller' => 'linea_grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Grupo'), array('controller' => 'linea_grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patentes'), array('controller' => 'patentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patente'), array('controller' => 'patentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propuesta Convocatorias'), array('controller' => 'propuesta_convocatorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propuesta Convocatoria'), array('controller' => 'propuesta_convocatorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semilleros'), array('controller' => 'semilleros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semillero'), array('controller' => 'semilleros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articulos'); ?></h3>
	<?php if (!empty($grupoInvestigacion['Articulo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Articulo'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tamano'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Identificacion Autor'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupoInvestigacion['Articulo'] as $articulo): ?>
		<tr>
			<td><?php echo $articulo['id_articulo']; ?></td>
			<td><?php echo $articulo['nombre']; ?></td>
			<td><?php echo $articulo['tamano']; ?></td>
			<td><?php echo $articulo['url']; ?></td>
			<td><?php echo $articulo['descripcion']; ?></td>
			<td><?php echo $articulo['grupo_investigacion_id']; ?></td>
			<td><?php echo $articulo['identificacion_autor']; ?></td>
			<td><?php echo $articulo['created']; ?></td>
			<td><?php echo $articulo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articulos', 'action' => 'view', $articulo['id_articulo'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articulos', 'action' => 'edit', $articulo['id_articulo'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articulos', 'action' => 'delete', $articulo['id_articulo']), array(), __('Are you sure you want to delete # %s?', $articulo['id_articulo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Docentes'); ?></h3>
	<?php if (!empty($grupoInvestigacion['Docente'])): ?>
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
	<?php foreach ($grupoInvestigacion['Docente'] as $docente): ?>
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
	<?php if (!empty($grupoInvestigacion['Estudiante'])): ?>
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
	<?php foreach ($grupoInvestigacion['Estudiante'] as $estudiante): ?>
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
<div class="related">
	<h3><?php echo __('Related Grupo Proyectos'); ?></h3>
	<?php if (!empty($grupoInvestigacion['GrupoProyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Grupo Proyecto'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupoInvestigacion['GrupoProyecto'] as $grupoProyecto): ?>
		<tr>
			<td><?php echo $grupoProyecto['id_grupo_proyecto']; ?></td>
			<td><?php echo $grupoProyecto['grupo_investigacion_id']; ?></td>
			<td><?php echo $grupoProyecto['proyecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grupo_proyectos', 'action' => 'view', $grupoProyecto['proyecto_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grupo_proyectos', 'action' => 'edit', $grupoProyecto['proyecto_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grupo_proyectos', 'action' => 'delete', $grupoProyecto['proyecto_id']), array(), __('Are you sure you want to delete # %s?', $grupoProyecto['proyecto_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupo Proyecto'), array('controller' => 'grupo_proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Linea Grupos'); ?></h3>
	<?php if (!empty($grupoInvestigacion['LineaGrupo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Linea Grupo'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Linea Investigacion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupoInvestigacion['LineaGrupo'] as $lineaGrupo): ?>
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
	<h3><?php echo __('Related Patentes'); ?></h3>
	<?php if (!empty($grupoInvestigacion['Patente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Patente'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Identificacion Autor'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Nombre Archivo'); ?></th>
		<th><?php echo __('Tamano'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupoInvestigacion['Patente'] as $patente): ?>
		<tr>
			<td><?php echo $patente['id_patente']; ?></td>
			<td><?php echo $patente['nombre']; ?></td>
			<td><?php echo $patente['grupo_investigacion_id']; ?></td>
			<td><?php echo $patente['identificacion_autor']; ?></td>
			<td><?php echo $patente['descripcion']; ?></td>
			<td><?php echo $patente['nombre_archivo']; ?></td>
			<td><?php echo $patente['tamano']; ?></td>
			<td><?php echo $patente['url']; ?></td>
			<td><?php echo $patente['created']; ?></td>
			<td><?php echo $patente['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patentes', 'action' => 'view', $patente['id_patente'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patentes', 'action' => 'edit', $patente['id_patente'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patentes', 'action' => 'delete', $patente['id_patente']), array(), __('Are you sure you want to delete # %s?', $patente['id_patente'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patente'), array('controller' => 'patentes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Propuesta Convocatorias'); ?></h3>
	<?php if (!empty($grupoInvestigacion['PropuestaConvocatoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Propuesta'); ?></th>
		<th><?php echo __('Convocatoria Id'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Nombre Archivo'); ?></th>
		<th><?php echo __('Tamano'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupoInvestigacion['PropuestaConvocatoria'] as $propuestaConvocatoria): ?>
		<tr>
			<td><?php echo $propuestaConvocatoria['id_propuesta']; ?></td>
			<td><?php echo $propuestaConvocatoria['convocatoria_id']; ?></td>
			<td><?php echo $propuestaConvocatoria['grupo_investigacion_id']; ?></td>
			<td><?php echo $propuestaConvocatoria['titulo']; ?></td>
			<td><?php echo $propuestaConvocatoria['descripcion']; ?></td>
			<td><?php echo $propuestaConvocatoria['nombre_archivo']; ?></td>
			<td><?php echo $propuestaConvocatoria['tamano']; ?></td>
			<td><?php echo $propuestaConvocatoria['url']; ?></td>
			<td><?php echo $propuestaConvocatoria['estado']; ?></td>
			<td><?php echo $propuestaConvocatoria['created']; ?></td>
			<td><?php echo $propuestaConvocatoria['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'propuesta_convocatorias', 'action' => 'view', $propuestaConvocatoria['id_propuesta'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'propuesta_convocatorias', 'action' => 'edit', $propuestaConvocatoria['id_propuesta'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'propuesta_convocatorias', 'action' => 'delete', $propuestaConvocatoria['id_propuesta']), array(), __('Are you sure you want to delete # %s?', $propuestaConvocatoria['id_propuesta'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Propuesta Convocatoria'), array('controller' => 'propuesta_convocatorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Semilleros'); ?></h3>
	<?php if (!empty($grupoInvestigacion['Semillero'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Semillero'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Identificacion Coordinador'); ?></th>
		<th><?php echo __('Grupo Investigacion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupoInvestigacion['Semillero'] as $semillero): ?>
		<tr>
			<td><?php echo $semillero['id_semillero']; ?></td>
			<td><?php echo $semillero['nombre']; ?></td>
			<td><?php echo $semillero['identificacion_coordinador']; ?></td>
			<td><?php echo $semillero['grupo_investigacion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'semilleros', 'action' => 'view', $semillero['id_semillero'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'semilleros', 'action' => 'edit', $semillero['id_semillero'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'semilleros', 'action' => 'delete', $semillero['id_semillero']), array(), __('Are you sure you want to delete # %s?', $semillero['id_semillero'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Semillero'), array('controller' => 'semilleros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
