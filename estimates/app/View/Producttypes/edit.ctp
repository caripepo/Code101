<div class="producttypes form">
<?php echo $this->Form->create('Producttype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Producttype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Paper');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producttype.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Producttype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Producttypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Papers'), array('controller' => 'papers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('controller' => 'papers', 'action' => 'add')); ?> </li>
	</ul>
</div>
