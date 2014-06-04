<div class="sizes form">
<?php echo $this->Form->create('Size'); ?>
	<fieldset>
		<legend><?php echo __('Add Size'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('product_id');
		echo $this->Form->input('height');
		echo $this->Form->input('width');
		echo $this->Form->input('setup');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sizes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>