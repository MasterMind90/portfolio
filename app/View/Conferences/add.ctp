<div class="conferences form">
<?php echo $this->Form->create('Conference'); ?>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Add Conference'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Form->textarea('conference_name',array('id'=>'test','class'=>'wysihtml5 col-md-8 form-control','rows'=>'5'));
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
	<h1 class="main-title"><?php echo __('List Conferences'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Html->link(__('List Conferences'), array('action' => 'index'));
	?>
</div>
</div>


</div>

