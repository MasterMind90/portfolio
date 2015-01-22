<div id="content"><h4 class="innerAll margin-none border-bottom text-center"><i class="fa fa-lock"></i> Login to your Account</h4>


<?php echo $this->Session->flash(); ?>



<div class="login spacing-x2">
	<div class="placeholder text-center"><i class="fa fa-lock"></i></div>
	
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default">
			<div class="panel-body innerAll">
		  			
		  			<?php echo $this->Form->create('User'); ?>
		  	  		<div class="form-group">
			    		<!-- <label for="exampleInputUsername">Username</label> -->
			    		<?php echo $this->Form->input('username',array('type'=>'text','class'=>'form-control','placeholder'=>'Enter Username','id'=>'exampleInputUsername')); ?>
		    			<!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
			  		</div>
			  		<div class="form-group">
			    		<!-- <label for="exampleInputPassword1">Password</label> -->
			    		<?php echo $this->Form->input('password',array('type'=>'password','class'=>'form-control','placeholder'=>'Password','id'=>'exampleInputPassword1')); ?>
			    		<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
			  		</div>

			  		<button type="submit" class="btn btn-primary btn-block">Login</button>
			  		<?php echo $this->Form->end(); ?>
		  			<div class="checkbox">
			    		<label>
			      			<input type="checkbox"> Remember my details
			    		</label>
			  		</div>
				</form>
		  	</div>
		</div>
	</div>


	<!-- <div class="col-sm-6 col-sm-offset-3 text-center">
		<a href="signup.html?lang=en" class="btn btn-info">Create a new account? <i class="fa fa-pencil"></i> </a>
	</div> -->
</div>
</div>