<?php

session_start();

$host = 'localhost';
$dbname = 'rol';
$dbuser = 'root';
$dbpassword = 'Sogekinngu135@';
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$dbuser","$dbpassword");


if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] != "1") {
 header("Location:login.php");
 exit();
}

if(isset($_POST['rol1'])){
  $sql = "SELECT * FROM log where rol_id = 1 ";
  $sth = $pdo->prepare($sql);
  $sth->execute();
  $log_data = $sth->fetchAll();
}

 ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>ROL</title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="/rol/assets/images/logo.svg">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="/rol/assets/images/logo.svg">

  <!-- style -->

  <link rel="stylesheet" href="/rol/libs/font-awesome/css/font-awesome.min.css" type="text/css" />

  <!-- build:css ../assets/css/app.min.css -->
  <link rel="stylesheet" href="/rol/libs/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="/rol/assets/css/app.css" type="text/css" />
  <link rel="stylesheet" href="/rol/assets/css/style.css" type="text/css" />
  <!-- endbuild -->
</head>
<body>


<div class="app" id="app">

<!-- ############ LAYOUT START-->

	<!-- ############ Aside START-->
	<div id="aside" class="app-aside fade box-shadow-x nav-expand white" aria-hidden="true">
		<div class="sidenav modal-dialog dk white">
		  <!-- sidenav top -->
		  <div class="navbar lt">
		    <!-- brand -->
		    <a href="/rol/main.php" class="navbar-brand">
		    	<svg viewBox="0 0 24 24" height="28" width="28" xmlns="http://www.w3.org/2000/svg">
		    	    <path d="M0 0h24v24H0z" fill="none"/>
		    	    <path d="M19.51 3.08L3.08 19.51c.09.34.27.65.51.9.25.24.56.42.9.51L20.93 4.49c-.19-.69-.73-1.23-1.42-1.41zM11.88 3L3 11.88v2.83L14.71 3h-2.83zM5 3c-1.1 0-2 .9-2 2v2l4-4H5zm14 18c.55 0 1.05-.22 1.41-.59.37-.36.59-.86.59-1.41v-2l-4 4h2zm-9.71 0h2.83L21 12.12V9.29L9.29 21z" fill="#fff" class="fill-theme"/>
		    	</svg>
		    	<img src="/rol/assets/images/logo.png" alt="." class="hide">
		    	<span class="hidden-folded d-inline">ROL</span>
		    </a>
		    <!-- / brand -->
		  </div>

		  <!-- Flex nav content -->
		  <div class="flex hide-scroll">
		      <div class="scroll">
		        <div class="nav-border b-primary" data-nav>
		          <ul class="nav bg">

		              <li>
		                <a>
		                  <span class="nav-caret">
		                    <i class="fa fa-caret-down"></i>
		                  </span>
		                  <span class="nav-icon">
		                    <i class="fa fa-align-left"></i>
		                  </span>
		                  <span class="nav-text">Device</span>
		                </a>
		                <ul class="nav-sub">
		                  <li>
                       <form action="" method="post">
		                    <button type="submit" name="rol1" class="btn primary">ROL1</button>
                       </form>
		                  </li>
		                  <li>
		                    <a href="layout.sidenav.html">
		                      <span class="nav-text">ROL2</span>
		                    </a>
		                  </li>
		                  <li>
		                    <a href="layout.aside.html">
		                      <span class="nav-text">ROL3</span>
		                    </a>
		                  </li>
		                </ul>
		              </li>
                  <li>
		                <a href="logout.php">
		                  <span class="nav-icon">
		                    <i class="fa fa-power-off"></i>
		                  </span>
		                  <span class="nav-text">Logout</span>
		                </a>
		              </li>

		          </ul>

		        </div>
		      </div>
		  </div>
    </div>
	</div>
	<!-- ############ Aside END-->

	<!-- ############ Content START-->
	<div id="content" class="app-content box-shadow-0" role="main">
		<!-- Header -->
	    <div class="content-header white  box-shadow-0" id="content-header">
	    	<div class="navbar navbar-expand-lg">
	    	  <!-- btn to toggle sidenav on small screen -->
	    	  <a class="d-lg-none mx-2" data-toggle="modal" data-target="#aside">
	    	    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path d="M80 304h352v16H80zM80 248h352v16H80zM80 192h352v16H80z"/></svg>
	    	  </a>
	    	  <!-- Page title -->
	    	  <div class="navbar-text nav-title flex" id="pageTitle">Dashboard</div>





	    	</div>
	    </div>
	    <!-- Main -->
		<div class="content-main " id="content-main">

<!-- ############ Main START-->


<div>
	<div class="row no-gutters">

    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Bar chart</h3>
          <small class="block text-muted">A bar chart is a way of showing data as bars.</small>
        </div>
        <div class="box-body">
          <canvas id="chart-bar" height="200">
          </canvas>
        </div>
      </div>
    </div>

	</div>
</div>


<!-- ############ Main END-->

	    </div>
	    <!-- Footer -->
	    <div class="content-footer white " id="content-footer">
	    	<div class="d-flex p-3">
	    		<span class="text-sm text-muted flex">&copy; Copyright. Flatfull</span>
	    		<div class="text-sm text-muted">Version 1.1.3</div>
	    	</div>
	    </div>
	</div>
	<!-- ############ Content END-->

<!-- ############ LAYOUT END-->
</div>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="/rol/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
  <script src="/rol/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="/rol/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- core -->
  <script src="/rol/libs/pace-progress/pace.min.js"></script>
  <script src="/rol/libs/pjax/pjax.js"></script>

  <script src="/rol/scripts/lazyload.config.js"></script>
  <script src="/rol/scripts/lazyload.js"></script>
  <script src="/rol/scripts/plugin.js"></script>
  <script src="/rol/scripts/nav.js"></script>
  <script src="/rol/scripts/scrollto.js"></script>
  <script src="/rol/scripts/toggleclass.js"></script>
  <script src="/rol/scripts/theme.js"></script>
  <script src="/rol/scripts/ajax.js"></script>
  <script src="/rol/scripts/app.js"></script>
<!-- endbuild -->
  <script src="/rol/libs/moment/min/moment-with-locales.min.js"></script>
  <script src="/rol/libs/chart.js/dist/Chart.min.js"></script>
  <script src="/rol/scripts/plugins/jquery.chart.js"></script>
  <script src="/rol/scripts/plugins/chartjs.js"></script>

</body>
</html>
