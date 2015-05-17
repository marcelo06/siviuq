<div class="lineaGrupos view">
<h2><?php echo __('Linea Grupo'); ?></h2>
	<dl>
		<dt><?php echo __('Id Linea Grupo'); ?></dt>
		<dd>
			<?php echo h($lineaGrupo['LineaGrupo']['id_linea_grupo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lineaGrupo['GrupoInvestigacion']['nombre'], array('controller' => 'grupo_investigacions', 'action' => 'view', $lineaGrupo['GrupoInvestigacion']['id_grupo_investigacion'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linea Investigacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lineaGrupo['LineaInvestigacion']['nombre'], array('controller' => 'linea_investigacions', 'action' => 'view', $lineaGrupo['LineaInvestigacion']['id_linea_investigacion'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Linea Grupo'), array('action' => 'edit', $lineaGrupo['LineaGrupo']['id_linea_grupo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Linea Grupo'), array('action' => 'delete', $lineaGrupo['LineaGrupo']['id_linea_grupo']), array(), __('Are you sure you want to delete # %s?', $lineaGrupo['LineaGrupo']['id_linea_grupo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Grupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Grupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupo Investigacions'), array('controller' => 'grupo_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Investigacion'), array('controller' => 'grupo_investigacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Linea Investigacions'), array('controller' => 'linea_investigacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Linea Investigacion'), array('controller' => 'linea_investigacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
