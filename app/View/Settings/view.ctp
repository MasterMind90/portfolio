<div class="settings view">
<h2><?php echo __('Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Introduction'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['introduction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conference'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['conference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journal'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['journal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patent'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['patent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Settings Id'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['settings_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Setting'), array('action' => 'edit', $setting['Setting']['settings_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Setting'), array('action' => 'delete', $setting['Setting']['settings_id']), null, __('Are you sure you want to delete # %s?', $setting['Setting']['settings_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
