<div class="books form">
<?php echo $this->Form->create('Book'); ?>

<div class="row">
<div class="col-md-4">
	<h1 class="main-title"><?php echo __('Add Book'); ?></h1>
</div>
<div class="col-md-8">
	
	<?php
		echo $this->Form->textarea('book_name',array('id'=>'test','class'=>'wysihtml5 col-md-8 form-control','rows'=>'5'));
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
	<h1 class="main-title"><?php echo __('List Books'); ?></h1>
</div>
<div class="col-md-8">
	<?php
		echo $this->Html->link(__('List Books'), array('action' => 'index'));
	?>
</div>
</div>


</div>

