<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>
		Sign In
		- Nav Jeevan Task Management System
	</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="task management" name="description" />
	<meta content="bizBiscuit.com" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-responsive.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style-metro.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/themes/blue.css') }}" />
	<link rel="stylesheet" href="{{ asset('plugins/uniform/css/uniform.default.css') }}" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" href="{{ asset('css/pages/login.css') }}" />
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<h2><font color="#0099CC" face="Trebuchet MS, Arial, Helvetica, sans-serif">NAV</font><font color="#FFFFFF" face="Trebuchet MS, Arial, Helvetica, sans-serif">JEEVAN</font></h2>
	</div>
	<!-- END LOGO -->
	@yield('content')
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2013 &copy; Task Management System by bizBiscuit.com
	</div>

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery-1.10.1.min.js') }}"></script>
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery-migrate-1.2.1.min.js') }}"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}"></script>      
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--[if lt IE 9]>
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/excanvas.min.js') }}"></script>
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/respond.min.js') }}"></script>  
	<![endif]-->   
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery.blockui.min.js') }}"></script>  
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery.cookie.min.js') }}"></script>
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/uniform/jquery.uniform.min.js') }}"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script> 
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script language="javascript" type="text/javascript" src="{{ asset('scripts/app.js') }}"></script>
	<script language="javascript" type="text/javascript" src="{{ asset('scripts/index.js') }}"></script>        
	<!-- END PAGE LEVEL SCRIPTS -->  
	<!-- END JAVASCRIPTS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script language="javascript" type="text/javascript" src="{{ asset('plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script language="javascript" type="text/javascript" src="{{ asset('scripts/app.js') }}"></script>
	<script language="javascript" type="text/javascript" src="{{ asset('scripts/login.js') }}"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   //Login.init(); // Login initialize
		});
	</script>
</body>
<!-- END BODY -->
</html>