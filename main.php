 <!-- Aplikasi Text to Speech Menggunakan ResponsiveVoiceJS
 ***********************************************************
 * Developer    : Indra Styawantoro
 * Release Date : Maret 2018
 * Update       : -
 * Website      : www.indrasatya.com
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone / WA   : +62-813-7778-3334
 -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />

        <title>Aplikasi Text to Speech Menggunakan ResponsiveVoiceJS</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	    <meta name="description" content="Aplikasi Text to Speech Menggunakan ResponsiveVoiceJS" />
	    <meta name="author" content="Indra Styawantoro" />

	    <!-- favicon -->
    	<link rel="shortcut icon" href="assets/img/favicon.png">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" />

		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/fonts.googleapis.com.css" />

		<!--ace styles-->
		<link rel="stylesheet" type="text/css" href="assets/css/ace.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/ace-rtl.min.css" />

		<!-- custom css -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

		<script src="assets/plugins/ResponsiveVoiceJS/responsivevoice.js"></script>
		<script src="assets/plugins/ResponsiveVoiceJS/jquery-git2.js"></script>
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">

							<div class="space-22"></div>
							
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 style="font-size:25px;text-align:center" class="header lighter bigger">												<div class="space-4"></div>
												Aplikasi Text to Speech Menggunakan ResponsiveVoiceJS
												<div class="space-4"></div>
											</h4>

											<div class="space-10"></div>

											<!-- panggil file "content.php" untuk menampilkan halaman konten-->
            								<?php include "content.php"; ?>
											
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->

									<div style="padding-top:50px;background: #000" class="footer">
										<div class="footer-inner">
											<div style="line-height:30px" class="footer-content">
												<span>
													&copy; 2018 - <a href="http://indrasatya.com">www.indrasatya.com</a>
												</span>
											</div>
										</div>
									</div>
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!--basic scripts-->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>
		<!-- <![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<script src="assets/js/bootstrap.min.js"></script>
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
	</body>
</html>
