<div class="spots form">
<?php echo $this->Form->create('Spot'); ?>
	<fieldset>
		<legend><?php echo __('Add Spot'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('depth');
		echo $this->Form->input('bay_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bays'), array('controller' => 'bays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bay'), array('controller' => 'bays', 'action' => 'add')); ?> </li>
	</ul>
</div>
