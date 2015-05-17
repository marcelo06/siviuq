<div class="registroSoftwares view">
<h2><?php echo __('Registro Software'); ?></h2>
	<dl>
		<dt><?php echo __('Id Registro Software'); ?></dt>
		<dd>
			<?php echo h($registroSoftware['RegistroSoftware']['id_registro_software']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registroSoftware['Proyecto']['nombre_completo'], array('controller' => 'proyectos', 'action' => 'view', $registroSoftware['Proyecto']['id_proyecto'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($registroSoftware['RegistroSoftware']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Registro Software'), array('action' => 'edit', $registroSoftware['RegistroSoftware']['id_registro_software'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Registro Software'), array('action' => 'delete', $registroSoftware['RegistroSoftware']['id_registro_software']), array(), __('Are you sure you want to delete # %s?', $registroSoftware['RegistroSoftware']['id_registro_software'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Softwares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Software'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
