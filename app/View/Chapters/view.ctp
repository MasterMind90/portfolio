<div class="chapters view">
<h2><?php echo __('Chapter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($chapter['Chapter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chapter Name'); ?></dt>
		<dd>
			<?php echo h($chapter['Chapter']['chapter_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($chapter['Chapter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($chapter['Chapter']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chapter'), array('action' => 'edit', $chapter['Chapter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Chapter'), array('action' => 'delete', $chapter['Chapter']['id']), null, __('Are you sure you want to delete # %s?', $chapter['Chapter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chapters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chapter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
