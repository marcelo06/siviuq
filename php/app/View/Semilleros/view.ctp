<div class="semilleros view">
<h2><?php echo __('Semillero'); ?></h2>
	<dl>
		<dt><?php echo __('Id Semillero'); ?></dt>
		<dd>
			<?php echo h($semillero['Semillero']['id_semillero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($semillero['Semillero']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion Coordinador'); ?></dt>
		<dd>
			<?php echo h($semillero['Semillero']['identificacion_coordinador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($semillero['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $semillero['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Semillero'), array('action' => 'edit', $semillero['Semillero']['id_semillero'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Semillero'), array('action' => 'delete', $semillero['Semillero']['id_semillero']), array(), __('Are you sure you want to delete # %s?', $semillero['Semillero']['id_semillero'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Semilleros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semillero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
