<div class="users index">


	<?php if ($flag) { ?>
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3> <br/>
		<ul>
			<li><?php echo $this->Html->link(__('New Chapter'), array('action' => 'add')); ?></li>
		</ul>
		<hr/>
	</div>
	<?php } ?>


	<div class="tables">
	<h2 class="main-title"><?php echo __('Chapters'); ?></h2>
	<div class="main-border"></div>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('No.'); ?></th>
			<th style="width:80%;"><?php echo $this->Paginator->sort('Chapter Name'); ?></th>
			<?php if ($flag) { ?>
			<th><?php echo __('Actions'); ?></th>
			<?php } ?>
	</tr>
	<?php 
	$counter=1;
	foreach ($chapters as $chapter): ?>
	<tr>
		<td><?php echo h($counter++); ?>&nbsp;</td>
		<td><?php echo $chapter['Chapter']['chapter_name']; ?>&nbsp;</td>
		<?php if ($flag) { ?>
		<td>
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $chapter['Chapter']['id'])); ?>&nbsp;
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $chapter['Chapter']['id']), null, __('Are you sure you want to delete # %s?', $chapter['Chapter']['id'])); ?>&nbsp;
		</td>
		<?php } ?>
	</tr>
<?php endforeach; ?>
	</table>
</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>


