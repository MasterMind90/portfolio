<!DOCTYPE html>
<html>
<head>
	<title>::Login::</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<?php 
		echo $this->Html->meta('icon');
		echo $this->Html->css('assets/components/library/bootstrap/css/bootstrap.min'); 
		echo $this->Html->css('assets/components/library/icons/fontawesome/assets/css/font-awesome.min'); 
		echo $this->Html->css('assets/components/library/icons/glyphicons/assets/css/glyphicons_regular'); 
		echo $this->Html->css('assets/components/library/icons/glyphicons/assets/css/glyphicons_social'); 
		echo $this->Html->css('assets/components/library/icons/glyphicons/assets/css/glyphicons_filetypes'); 
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Roboto:400,300,700');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700');
		
		echo $this->Html->css('assets/components/library/icons/pictoicons/css/picto'); 
		echo $this->Html->css('assets/components/library/animate/animate.min'); 
		echo $this->Html->css('assets/css/admin/module.admin.page.login.min'); 
	?>
</head>
<body class=" loginWrapper">

	
	
	<?php echo $this->fetch('content'); ?>	
	
	

	<script>
	var basePath = '',
		commonPath = '../assets/',
		rootPath = '../',
		DEV = false,
		componentsPath = '../assets/components/';
	
	var primaryColor = '#cb4040',
		dangerColor = '#b55151',
		infoColor = '#466baf',
		successColor = '#8baf46',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	
	var themerPrimaryColor = primaryColor;
	</script>
</body>
</html>