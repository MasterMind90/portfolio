<div id="content">
			<h3><?php echo $this->Html->link(__('<-- Back'),array('controller'=>'groups')); ?> </h3> <br/>
			<?php if ($flag) { ?>
			<div class="actions">
				<h3><?php echo __('Add Media To '.$group['group_name']); ?> </h3> <br/>
				<ul>
					<li><?php echo $this->Html->link(__('New Media'), array('action' => 'add',$group['id']),array('style'=>'font-size:150%')); ?></li>
				</ul>
			</div>
			<?php } ?>
			<div class="clear"></div>

			<?php if (!empty($medias)){ ?>
			<div class="portfolio port2">
						
				<div class="filters demo1">
					<div class="filter clearfix">
						<ul>
							<!-- <li><a href="#" class="active" data-filter="*">All</a></li>
							<li><a href="#" data-filter=".class1">Web Design</a></li>
							<li><a href="#" data-filter=".class2">Illustration</a></li>
							<li><a href="#" data-filter=".class3">Applications</a></li>
							<li><a href="#" data-filter=".class4">Branding</a></li>
							<li><a href="#" data-filter=".class5">Photography</a></li> -->
						</ul>
					</div>
					<h1 class="main-title">Images Gallary</h1>
					<div class="main-border"></div>	
					<div class="clear"></div>
					<div class="container clearfix">
						<ul class="filter-container clearfix row">
							<?php foreach($medias as $media){ ?>
							<li class="class1 class5">
								<div class="view view-two mb20"> 
									

									
									<?php echo $this->Html->image($media['Media']['media_path'],array('width'=>'200px','height'=>'270px')); ?>




								</div>
								<h2><?php echo $media['Media']['media_title']; ?></h2>
								<p><?php echo $media['Media']['media_desc']; ?></p>
								<?php if ( $flag ){ ?>
								<p> <span> <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $media['Media']['id']), null, __('Are you sure you want to delete # %s?', $media['Media']['id'])); ?>&nbsp; </span> </p>
								<?php } ?>
							</li>
							<?php } ?>
							
							
						</ul>

						<div class="clear"></div>
					</div>
				</div>

				<div class="clear"></div>

				

			</div>
			<!-- End Portfilio -->
			<?php }else{
				echo '<h2> FOLDER IS EMPTY </h2>';
				} ?>












			<!-- <div class="portfolio port2">
						
				<div class="filters demo1">
					<div class="filter clearfix">
						<ul>
							
						</ul>
					</div>
					<h1 class="main-title">Videos Gallary</h1>
					<div class="main-border"></div>	
					<div class="clear"></div>
					<div class="container clearfix">
						<h1 class="main-title">Brain and Heart from Computer Science Perspective</h1>
						<div class="row">
							<div class="col-md-12">
								<video controls>
								 	<source src="/project1/img/uploads/videos/Uni_version.mp4" type="video/mp4">
									Your browser does not support HTML5 video.
								</video>
							</div>
							
						</div>
						

						<div class="clear"></div>
					</div>
				</div>

				<div class="clear"></div><br><br><br><br><br>

				

			</div>
			 -->
			<!-- End Portfilio -->

			

		</div>