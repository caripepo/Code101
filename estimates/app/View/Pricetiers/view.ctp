<div class="pricetiers view">
<h2><?php echo __('Pricetier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pricetier['Pricetier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pricetier['Pricetier']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjustment'); ?></dt>
		<dd>
			<?php echo h($pricetier['Pricetier']['adjustment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pricetier['Pricetier']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pricetier['Pricetier']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pricetier'), array('action' => 'edit', $pricetier['Pricetier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pricetier'), array('action' => 'delete', $pricetier['Pricetier']['id']), array(), __('Are you sure you want to delete # %s?', $pricetier['Pricetier']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pricetiers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pricetier'), array('action' => 'add')); ?> </li>
	</ul>
</div>
