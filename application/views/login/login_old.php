<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Team Allocation Tool|Student |</title>

<!-- Core CSS -->
<link href="<?php echo base_url(); ?>assets/css/tatui.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">

<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>

	<div id="wrapper">
            <header>
    
        <div id="header">
            <h2 class="welcome">Welcome to the Team Allocation Tool</h2>
        </div>
</header>

		<!-- Navigation -->
                <nav>
                    <div class="dropdown">
			<button class="dropbtn">Logon</button>
			
			</div>
	</div>
	<!-- /.navigation -->
	</nav>
                

    

  


















  <script type="text/javascript">
    (function () {
      $(function () {
        $('.login--container').removeClass('preload');
        this.timer = window.setTimeout(function (_this) {
          return function () {
            return $('.login--container').toggleClass('login--active');
          };
        }(this), 2000);

        return $('.js-toggle-login').click(function (_this) {
          return function () {
            window.clearTimeout(_this.timer);
            $('.login--container').toggleClass('login--active');
            return $('.login--username-container input').focus();
          };
        }(this));
      });
    }.call(this));
  </script>