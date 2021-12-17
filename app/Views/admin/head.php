<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#162946">
		<meta name="theme-color" content="#e67605">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Car Listing,Dealer,Rental Auto Classifieds Bootstrap Modern Responsive Clean HTML Template</title>

		<!-- Bootstrap Css -->
		<link href="<?php echo base_url().URL_SEPARATOR; ?>assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo URL_CSS.'sidemenu.css'; ?>" rel="stylesheet" />

		<!-- Dashboard css -->
		<link href="<?php echo URL_CSS.'style.css'; ?>" rel="stylesheet" />
		<link href="<?php echo URL_CSS.'admin-custom.css'; ?>" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url().URL_SEPARATOR; ?>/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo URL_CSS.'icons.css'; ?>" rel="stylesheet"/>

		<!-- Color-Skins -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().URL_SEPARATOR; ?>assets/color-skins/color13.css" />

	</head>
	<?php $session = \Config\Services::session(); ?>
	<body class="<?php ($session->get('loggedIn')=="")?"construction-image":""; ?>">

		<!--Loader-->
		<div id="global-loader">
			<!-- <img src="../assets/images/loader.svg" class="loader-img " alt=""> -->
		</div>
		<!--/Loader-->
