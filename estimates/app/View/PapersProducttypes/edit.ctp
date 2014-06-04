<div class="papersProducttypes form">
<?php echo $this->Form->create('PapersProducttype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Papers Producttype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('paper_id');
		echo $this->Form->input('producttype_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PapersProducttype.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PapersProducttype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Papers Producttypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Papers'), array('controller' => 'papers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paper'), array('controller' => 'papers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Producttypes'), array('controller' => 'producttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producttype'), array('controller' => 'producttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
