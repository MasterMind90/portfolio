<div class="journals form">
<?php echo $this->Form->create('Journal'); ?>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Add Journal'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->textarea('journal_name',array('id'=>'test','class'=>'wysihtml5 col-md-8 form-control','rows'=>'5'));
	?>
</div>
</div>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Submit'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->end(__('Submit'));
	?>
</div>
</div>


<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('List Journals'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Html->link(__('List Journals'), array('action' => 'index'));
	?>
</div>
</div>


</div>

