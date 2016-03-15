<div class="regions form">
<?php echo $this->Form->create('Region'); ?>
	<fieldset>
		<legend><?php echo __('Add Region'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Regions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bays'), array('controller' => 'bays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bay'), array('controller' => 'bays', 'action' => 'add')); ?> </li>
	</ul>
</div>
