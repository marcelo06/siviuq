<div class="estudianteSemilleros view">
<h2><?php echo __('Estudiante Semillero'); ?></h2>
	<dl>
		<dt><?php echo __('Id Estudiante Semillero'); ?></dt>
		<dd>
			<?php echo h($estudianteSemillero['EstudianteSemillero']['id_estudiante_semillero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudiante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudianteSemillero['Estudiante']['nombre_completo'], array('controller' => 'estudiantes', 'action' => 'view', $estudianteSemillero['Estudiante']['id_estudiante'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semillero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudianteSemillero['Semillero']['nombre'], array('controller' => 'semilleros', 'action' => 'view', $estudianteSemillero['Semillero']['id_semillero'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estudiante Semillero'), array('action' => 'edit', $estudianteSemillero['EstudianteSemillero']['id_estudiante_semillero'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estudiante Semillero'), array('action' => 'delete', $estudianteSemillero['EstudianteSemillero']['id_estudiante_semillero']), array(), __('Are you sure you want to delete # %s?', $estudianteSemillero['EstudianteSemillero']['id_estudiante_semillero'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiante Semilleros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante Semillero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semilleros'), array('controller' => 'semilleros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semillero'), array('controller' => 'semilleros', 'action' => 'add')); ?> </li>
	</ul>
</div>
