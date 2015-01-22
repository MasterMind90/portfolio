<div class="users index">
	
	<div class="tables">
	<h2 class="main-title"><?php echo __('Books'); ?></h2>
	<div class="main-border"></div>
	<table class="table table-bordered">
	<tr>
			<th style="text-align:center;">No.</th>
			<th style="width:95%;">Book Name</th>
	</tr>
	<?php 
	$counter=1;
	foreach ($books as $book): ?>
	<tr>
		<td style="text-align:center;"><?php echo h($counter++); ?>&nbsp;</td>
		<td><?php echo $book['Book']['book_name']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>

</div>


<div class="users index">
	
	<div class="tables">
	<h2 class="main-title"><?php echo __('Conferences'); ?></h2>
	<div class="main-border"></div>
	<table class="table table-bordered">
	<tr>
			<th style="text-align:center;">No.</th>
			<th style="width:95%;">Conference Name</th>
	</tr>
	<?php 
	$counter=1;
	foreach ($conferences as $conference): ?>
	<tr>
		<td style="text-align:center;"><?php echo h($counter++); ?>&nbsp;</td>
		<td><?php echo $conference['Conference']['conference_name']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
	
</div>


<div class="users index">
	
	<div class="tables">
	<h2 class="main-title"><?php echo __('Chapters'); ?></h2>
	<div class="main-border"></div>
	<table class="table table-bordered">
	<tr>
			<th style="text-align:center;">No.</th>
			<th style="width:95%;">Chapter Name</th>
	</tr>
	<?php 
	$counter=1;
	foreach ($chapters as $chapter): ?>
	<tr>
		<td style="text-align:center;"><?php echo h($counter++); ?>&nbsp;</td>
		<td><?php echo $chapter['Chapter']['chapter_name']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>

</div>










