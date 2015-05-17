<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Id Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Docente']['nombre_completo'], array('controller' => 'docentes', 'action' => 'view', $proyecto['Docente']['id_docente'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula Estudiante1'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['cedula_estudiante1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula Estudiante2'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['cedula_estudiante2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula Estudiante3'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['cedula_estudiante3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['nombre_completo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duracion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['duracion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['objetivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prorroga'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['prorroga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado Esperado'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['resultado_esperado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['resultado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Aprobacion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['codigo_aprobacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Inscripcion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['codigo_inscripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consecutivo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['consecutivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Administrador']['nombre_completo'], array('controller' => 'administradors', 'action' => 'view', $proyecto['Administrador']['id_administrador'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evaluacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Evaluacion']['id_evaluacion'], array('controller' => 'evaluacions', 'action' => 'view', $proyecto['Evaluacion']['id_evaluacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidad'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['modalidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linea Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['LineaInvestigacion']['nombre'], array('controller' => 'linea_investigacions', 'action' => 'view', $proyecto['LineaInvestigacion']['id_linea_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuadro Verificacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['CuadroVerificacion']['id_cuadro_verificacion'], array('controller' => 'cuadro_verificacions', 'action' => 'view', $proyecto['CuadroVerificacion']['id_cuadro_verificacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id_proyecto'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id_proyecto']), array(), __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id_proyecto'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('controller' => 'evaluacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('controller' => 'evaluacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('controller' => 'linea_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('controller' => 'linea_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuadro Verificacions'), array('controller' => 'cuadro_verificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuadro Verificacion'), array('controller' => 'cuadro_verificacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Softwares'), array('controller' => 'registro_softwares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Software'), array('controller' => 'registro_softwares', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Documentos'); ?></h3>
	<?php if (!empty($proyecto['Documento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Documento'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tamano'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Documento'] as $documento): ?>
		<tr>
			<td><?php echo $documento['id_documento']; ?></td>
			<td><?php echo $documento['nombre']; ?></td>
			<td><?php echo $documento['tamano']; ?></td>
			<td><?php echo $documento['url']; ?></td>
			<td><?php echo $documento['proyecto_id']; ?></td>
			<td><?php echo $documento['created']; ?></td>
			<td><?php echo $documento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documentos', 'action' => 'view', $documento['id_documento'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documentos', 'action' => 'edit', $documento['id_documento'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documentos', 'action' => 'delete', $documento['id_documento']), array(), __('Are you sure you want to delete # %s?', $documento['id_documento'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Registro Softwares'); ?></h3>
	<?php if (!empty($proyecto['RegistroSoftware'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Registro Software'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['RegistroSoftware'] as $registroSoftware): ?>
		<tr>
			<td><?php echo $registroSoftware['id_registro_software']; ?></td>
			<td><?php echo $registroSoftware['proyecto_id']; ?></td>
			<td><?php echo $registroSoftware['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'registro_softwares', 'action' => 'view', $registroSoftware['id_registro_software'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'registro_softwares', 'action' => 'edit', $registroSoftware['id_registro_software'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'registro_softwares', 'action' => 'delete', $registroSoftware['id_registro_software']), array(), __('Are you sure you want to delete # %s?', $registroSoftware['id_registro_software'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registro Software'), array('controller' => 'registro_softwares', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
