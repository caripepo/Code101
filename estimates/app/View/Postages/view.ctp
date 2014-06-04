<div class="postages view">
<h2><?php echo __('Postage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saturation'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['saturation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mixedadc'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['mixedadc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level2'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['level2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level3'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['level3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($postage['Postage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Postage'), array('action' => 'edit', $postage['Postage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Postage'), array('action' => 'delete', $postage['Postage']['id']), array(), __('Are you sure you want to delete # %s?', $postage['Postage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Postages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postage'), array('action' => 'add')); ?> </li>
	</ul>
</div>
