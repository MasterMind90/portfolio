<div class="users index">
	
	<div class="tables">
	<h2 class="main-title"><?php echo __('Interests'); ?></h2>
	<div class="main-border"></div>
	<table class="table table-bordered">
	<tr>
			<th style="text-align:center;">No.</th>
			<th style="width:95%;">Interest Name</th>
	</tr>
	<?php 
	$counter=1;
	foreach ($interests as $interest): ?>
	<tr>
		<td style="text-align:center;"><?php echo h($counter++); ?>&nbsp;</td>
		<td><?php echo $interest['Interest']['interest_name']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
</div>






<div class="users index">
	
	<div class="tables">
	<h2 class="main-title"><?php echo __('Projects'); ?></h2>
	<div class="main-border"></div>
	<table class="table table-bordered">
	<tr>
			<th style="text-align:center;">No.</th>
			<th style="width:95%;">Project Name</th>
			
	</tr>
	<?php 
	$counter=1;
	foreach ($projects as $project): ?>
	<tr>
		<td style="text-align:center;"><?php echo h($counter++); ?>&nbsp;</td>
		<td><?php echo $project['Project']['project_name']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
	
</div>





