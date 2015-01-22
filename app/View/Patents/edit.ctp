<div class="patents form">
<?php echo $this->Form->create('Patent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Patent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->textarea('patent_name',array('id'=>'test','class'=>'wysihtml5 col-md-8 form-control','rows'=>'5'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Patent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Patent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patents'), array('action' => 'index')); ?></li>
	</ul>
</div>
