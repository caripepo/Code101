<div class="postages form">
<?php echo $this->Form->create('Postage'); ?>
	<fieldset>
		<legend><?php echo __('Add Postage'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('saturation');
		echo $this->Form->input('mixedadc');
		echo $this->Form->input('level2');
		echo $this->Form->input('level3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Postages'), array('action' => 'index')); ?></li>
	</ul>
</div>
