<?php
/**
 * --------------
 * Final Layout
 * --------------
 *	PortFolio
 *		- The default template of the system
 *		- Called and set in the AppController.php
 *	Created : 8/4/2014
 *	Updated : Few minutes ago
 *	@author  Amjad
 */
?>
<!DOCTYPE html>
<html>
	<head>
		
		<?php
			// The <title> element
			echo $this->element('head.title');

			// The <meta> element
			echo $this->element('head.meta');


			// Cakephp default
			echo $this->element('head.cakephp-default');
			
			// Load the asset in head
			echo $this->element('layout.head.asset');

		?>
	</head>
	<body>
		<?php 
			//Top Red Header Element
			echo $this->element('layout.body.header'); 


			//Sidebar Element
			//Get the controller and add the specific side-menu according to controller
			//$controller = $this->params['controller'];
			//Apply sidebar menu based on the roles
			switch($activeUser['type'])
			{
				case "cs":
					echo $this->element('layout.body.menu-admin'); 
				break;
				case "student":
					echo $this->element('layout.body.menu-student'); 
				break;
				case "company":
					echo $this->element('layout.body.menu-employer'); 
				break;
			}

			
			// 	MAIN CONTENT
			// 	Retrieve the content from the view
			// 	ControllerAction->View			
			echo $this->fetch('content');
			
			//Footer Element
			echo $this->element('layout.body.footer');

			// Lower body asset
			echo $this->element('layout.body.lower-asset');
		?>
	</body>
</html>
