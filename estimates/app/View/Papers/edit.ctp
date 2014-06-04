<div class="papers form">
<?php echo $this->Form->create('Paper'); ?>
	<fieldset>
		<legend><?php echo __('Edit Paper'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('producttype_id');
		echo $this->Form->input('base_cost');
		echo $this->Form->input('Producttype');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Paper.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Paper.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Papers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Producttypes'), array('controller' => 'producttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producttype'), array('controller' => 'producttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
