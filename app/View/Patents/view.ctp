<div class="patents view">
<h2><?php echo __('Patent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patent['Patent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patent Name'); ?></dt>
		<dd>
			<?php echo h($patent['Patent']['patent_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patent['Patent']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patent['Patent']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patent'), array('action' => 'edit', $patent['Patent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patent'), array('action' => 'delete', $patent['Patent']['id']), null, __('Are you sure you want to delete # %s?', $patent['Patent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
