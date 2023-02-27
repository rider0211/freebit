<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>freebit.me | Your Free Decentralized ID</title>	

		<meta name="keywords" content="freebit.me | Your Free Decentralized ID" />
		<meta name="description" content="freebit.me | Your Free Decentralized ID">
		<meta name="author" content="James Coulter">

		<!-- Favicon -->
		<link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="./assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="./assets/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="./assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="./assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="./assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="./assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="./assets/css/theme.css">
		<link rel="stylesheet" href="./assets/css/theme-elements.css">
		<link rel="stylesheet" href="./assets/css/theme-blog.css">
		<link rel="stylesheet" href="./assets/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="./assets/vendor/circle-flip-slideshow/css/component.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="./assets/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="./assets/css/custom.css">

		<!-- Head Libs -->
		<script src="./assets/vendor/modernizr/modernizr.min.js"></script>

        <!-- <link rel="stylesheet" href="./assets/css/main.css"> -->

        <!-- other -->

        <link rel="stylesheet" href="./assets/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">


        <link rel="stylesheet" type="text/css" href="./assets/other/css/opensans-font.css">
        <link rel="stylesheet" type="text/css" href="./assets/other/css/roboto-font.css">
        <link rel="stylesheet" type="text/css" href="./assets/other/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/other/css/jquery-ui.min.css">
        <link rel="stylesheet" href="./assets/other/css/style.css"/>

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  

        <!-- Twitter universal website tag code -->
		<script>
		!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
		},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
		a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
		// Insert Twitter Pixel ID and Standard Event data below
		twq('init','o8t17');
		twq('track','PageView');
		</script>
		<!-- End Twitter universal website tag code -->
	</head>

	<body data-plugin-page-transition>		
		<div class="body">

			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-logo">
								<a href="/">
									<img alt="freebit" class="logo-response" width="400" height="100" data-sticky-width="200" data-sticky-height="50" data-sticky-top="45" src="./assets/img/freebit-namecoin-logo.png">
								</a>
							</div>
							@if(Auth::check())
							<div class="header-column justify-content-center align-items-end" >
								<form action="/logout" method="post" style="margin-top:45px">
									@csrf
									<input type="submit" value="Logout"  class="btn btn-primary px-3">
								</form>
							</div>
							@endif
						</div>
					</div>
				</div>
			</header>
