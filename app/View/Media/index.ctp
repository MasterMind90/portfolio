<div id="content">
			<?php if ($flag) { ?>
			<div class="actions">
				<h3><?php echo __('Add Media'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('New Media'), array('action' => 'add')); ?></li>
				</ul>
			</div>
			<?php } ?>
			<div class="clear"></div>

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
									<!-- <img src="upload/portfolio/port4-1.jpg" alt="" />  -->
									<?php echo $this->Html->image($media['Media']['media_path'],array('width'=>'200px','height'=>'270px')) ?>
									<!-- <div class="mask"> 
										<div class="i-icons">

											<a href="upload/portfolio/port4-1.jpg"  data-fancybox-group="group"><i class="fa fa-search"></i></a>
							        		<a href="#"><i class="fa fa-link"></i></a>
										</div>
									</div> -->
								</div>
								<h2><?php echo $media['Media']['media_title']; ?></h2>
								<p><?php echo $media['Media']['media_desc']; ?></p>
								<p> <span> <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $media['Media']['id']), null, __('Are you sure you want to delete # %s?', $media['Media']['id'])); ?>&nbsp; </span> </p>
							</li>
							<?php } ?>
							
							
						</ul>

						<div class="clear"></div>
					</div>
				</div>

				<div class="clear"></div>

				

			</div>
			<!-- End Portfilio -->












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
			<!-- End Portfilio -->

			

		</div>