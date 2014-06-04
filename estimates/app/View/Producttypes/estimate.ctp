<div class="producttypes form">
<?php echo $this->Form->create('Producttype'); ?>
	<fieldset>
		<legend><?php echo __('Add Producttype'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Paper');
        echo $this->Form->input('Size');
		echo $this->Form->input('Quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Producttypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Papers'), array('controller' => 'papers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('controller' => 'papers', 'action' => 'add')); ?> </li>
	</ul>
</div>
