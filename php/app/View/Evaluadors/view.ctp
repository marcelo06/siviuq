<div class="evaluadors view">
<h2><?php echo __('Evaluador'); ?></h2>
	<dl>
		<dt><?php echo __('Id Evaluador'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['id_evaluador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['nombre_completo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo Profesional'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['titulo_profesional']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institucion'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['institucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especializacion'); ?></dt>
		<dd>
			<?php echo h($evaluador['Evaluador']['especializacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluador'), array('action' => 'edit', $evaluador['Evaluador']['id_evaluador'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluador'), array('action' => 'delete', $evaluador['Evaluador']['id_evaluador']), array(), __('Are you sure you want to delete # %s?', $evaluador['Evaluador']['id_evaluador'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluadors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluador'), array('action' => 'add')); ?> </li>
	</ul>
</div>
