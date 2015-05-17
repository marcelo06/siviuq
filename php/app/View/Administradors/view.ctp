<div class="administradors view">
<h2><?php echo __('Administrador'); ?></h2>
	<dl>
		<dt><?php echo __('Id Administrador'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['id_administrador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['nombre_completo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Cargo'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['descripcion_cargo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administrador'), array('action' => 'edit', $administrador['Administrador']['id_administrador'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administrador'), array('action' => 'delete', $administrador['Administrador']['id_administrador']), array(), __('Are you sure you want to delete # %s?', $administrador['Administrador']['id_administrador'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('controller' => 'cuadro_verificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('controller' => 'cuadro_verificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cuadro Verificacions'); ?></h3>
	<?php if (!empty($administrador['CuadroVerificacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Cuadro Verificacion'); ?></th>
		<th><?php echo __('Asignacion Horas'); ?></th>
		<th><?php echo __('Auxiliar Investigacion'); ?></th>
		<th><?php echo __('Bibliografia'); ?></th>
		<th><?php echo __('Coinvestigadores'); ?></th>
		<th><?php echo __('Cronograma'); ?></th>
		<th><?php echo __('Descripcion Gastos'); ?></th>
		<th><?php echo __('Estado General'); ?></th>
		<th><?php echo __('Estudiantes Investigacion'); ?></th>
		<th><?php echo __('Estrategia Comunicacion'); ?></th>
		<th><?php echo __('Impacto Social'); ?></th>
		<th><?php echo __('Investigador Principal'); ?></th>
		<th><?php echo __('Justificacion'); ?></th>
		<th><?php echo __('Linea Investigacion'); ?></th>
		<th><?php echo __('Marco Teorico'); ?></th>
		<th><?php echo __('Materiales Insumos'); ?></th>
		<th><?php echo __('Metodologia'); ?></th>
		<th><?php echo __('Modalidad'); ?></th>
		<th><?php echo __('Objetivo General'); ?></th>
		<th><?php echo __('Objetivos Especificos'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Otros Rubros'); ?></th>
		<th><?php echo __('Planteamiento Problema'); ?></th>
		<th><?php echo __('Presentacion Vigencia'); ?></th>
		<th><?php echo __('Presupuesto'); ?></th>
		<th><?php echo __('Resultados Esperados'); ?></th>
		<th><?php echo __('Software Adquirido'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Viajes'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($administrador['CuadroVerificacion'] as $cuadroVerificacion): ?>
		<tr>
			<td><?php echo $cuadroVerificacion['id_cuadro_verificacion']; ?></td>
			<td><?php echo $cuadroVerificacion['asignacion_horas']; ?></td>
			<td><?php echo $cuadroVerificacion['auxiliar_investigacion']; ?></td>
			<td><?php echo $cuadroVerificacion['bibliografia']; ?></td>
			<td><?php echo $cuadroVerificacion['coinvestigadores']; ?></td>
			<td><?php echo $cuadroVerificacion['cronograma']; ?></td>
			<td><?php echo $cuadroVerificacion['descripcion_gastos']; ?></td>
			<td><?php echo $cuadroVerificacion['estado_general']; ?></td>
			<td><?php echo $cuadroVerificacion['estudiantes_investigacion']; ?></td>
			<td><?php echo $cuadroVerificacion['estrategia_comunicacion']; ?></td>
			<td><?php echo $cuadroVerificacion['impacto_social']; ?></td>
			<td><?php echo $cuadroVerificacion['investigador_principal']; ?></td>
			<td><?php echo $cuadroVerificacion['justificacion']; ?></td>
			<td><?php echo $cuadroVerificacion['linea_investigacion']; ?></td>
			<td><?php echo $cuadroVerificacion['marco_teorico']; ?></td>
			<td><?php echo $cuadroVerificacion['materiales_insumos']; ?></td>
			<td><?php echo $cuadroVerificacion['metodologia']; ?></td>
			<td><?php echo $cuadroVerificacion['modalidad']; ?></td>
			<td><?php echo $cuadroVerificacion['objetivo_general']; ?></td>
			<td><?php echo $cuadroVerificacion['objetivos_especificos']; ?></td>
			<td><?php echo $cuadroVerificacion['observaciones']; ?></td>
			<td><?php echo $cuadroVerificacion['otros_rubros']; ?></td>
			<td><?php echo $cuadroVerificacion['planteamiento_problema']; ?></td>
			<td><?php echo $cuadroVerificacion['presentacion_vigencia']; ?></td>
			<td><?php echo $cuadroVerificacion['presupuesto']; ?></td>
			<td><?php echo $cuadroVerificacion['resultados_esperados']; ?></td>
			<td><?php echo $cuadroVerificacion['software_adquirido']; ?></td>
			<td><?php echo $cuadroVerificacion['titulo']; ?></td>
			<td><?php echo $cuadroVerificacion['viajes']; ?></td>
			<td><?php echo $cuadroVerificacion['administrador_id']; ?></td>
			<td><?php echo $cuadroVerificacion['created']; ?></td>
			<td><?php echo $cuadroVerificacion['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cuadro_verificacions', 'action' => 'view', $cuadroVerificacion['id_cuadro_verificacion'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cuadro_verificacions', 'action' => 'edit', $cuadroVerificacion['id_cuadro_verificacion'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cuadro_verificacions', 'action' => 'delete', $cuadroVerificacion['id_cuadro_verificacion']), array(), __('Are you sure you want to delete # %s?', $cuadroVerificacion['id_cuadro_verificacion'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('controller' => 'cuadro_verificacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($administrador['Proyecto'])): ?>
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
	<?php foreach ($administrador['Proyecto'] as $proyecto): ?>
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
