<div class="journals view">
<h2><?php echo __('Journal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journal Name'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['journal_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journal'), array('action' => 'edit', $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journal'), array('action' => 'delete', $journal['Journal']['id']), null, __('Are you sure you want to delete # %s?', $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
