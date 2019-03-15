
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
		                <a href="dashboard.html">
		                  <span class="nav-icon">
		                    <i class="fa fa-power-off"></i>
		                  </span>
		                  <span class="nav-text">Logout</span>
		                </a>
		              </li>
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
		                    <a href="layout.header.html">
		                      <span class="nav-text">ROL1</span>
		                    </a>
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
		              <li class="pb-2 hidden-folded"></li>
		          </ul>
		          <ul class="nav ">

		                <li class="nav-header hidden-folded mt-2">
		                  <span class="text-xs">UI Elements</span>
		                </li>
		                <li>
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon no-fade">
		                      <i class="badge badge-xs badge-o md b-warning"></i>
		                    </span>
		                    <span class="nav-text">UI kit</span>
		                  </a>
		                  <ul class="nav-sub nav-mega nav-mega-3">
		                    <li>
		                      <a href="ui.arrow.html" >
		                        <span class="nav-text">Arrow</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.badge.html" >
		                        <span class="nav-text">Badge</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.box.html" >
		                        <span class="nav-text">Box</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.button.html" >
		                        <span class="nav-text">Button</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.color.html" >
		                        <span class="nav-text">Color</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.dropdown.html" >
		                        <span class="nav-text">Dropdown</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.grid.html" >
		                        <span class="nav-text">Grid</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.icon.html" >
		                        <span class="nav-text">Icon</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.list.html" >
		                        <span class="nav-text">List Group</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.modal.html" >
		                        <span class="nav-text">Modal</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.nav.html" >
		                        <span class="nav-text">Nav</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.streamline.html" >
		                        <span class="nav-text">Streamline</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.timeline.html" >
		                        <span class="nav-text">Timeline</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.widget.html" >
		                        <span class="nav-text">Widget</span>
		                      </a>
		                    </li>
		                  </ul>
		                </li>
		                <li>
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon no-fade">
		                      <i class="badge badge-xs badge-o md b-success"></i>
		                    </span>
		                    <span class="nav-text">Components</span>
		                  </a>
		                  <ul class="nav-sub nav-mega">
		                    <li>
		                      <a href="ui.calendar.html">
		                        <span class="nav-text">Calendar</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.scroll.html" >
		                        <span class="nav-text">Infinite Scroll</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.sortable.html" >
		                        <span class="nav-text">Sortable</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.scrollreveal.html" >
		                        <span class="nav-text">Scroll Reveal</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="ui.map.html" >
		                        <span class="nav-text">Vector map</span>
		                      </a>
		                    </li>
		                  </ul>
		                </li>

		                <li>
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon no-fade">
		                      <i class="badge badge-xs badge-o md b-primary"></i>
		                    </span>
		                    <span class="nav-text">Form</span>
		                  </a>
		                  <ul class="nav-sub">
		                    <li>
		                      <a href="form.layout.html" >
		                        <span class="nav-text">Form Layout</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="form.element.html" >
		                        <span class="nav-text">Form Element</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="form.validation.html" >
		                        <span class="nav-text">Form Validation</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="form.editor.html" >
		                        <span class="nav-text">Editor</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="form.picker.html">
		                        <span class="nav-text">Picker</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="form.select.html" >
		                        <span class="nav-text">Select</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="form.wizard.html">
		                        <span class="nav-text">Wizard</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="form.dropzone.html">
		                        <span class="nav-text">File Upload</span>
		                      </a>
		                    </li>
		                  </ul>
		                </li>

		                <li>
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon">
		                      <i class="badge badge-xs badge-o md"></i>
		                    </span>
		                    <span class="nav-text">Tables</span>
		                  </a>
		                  <ul class="nav-sub">
		                    <li>
		                      <a href="static.html" >
		                        <span class="nav-text">Static table</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="bootstrap.table.html" >
		                        <span class="nav-text">Bootstrap Table</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="datatable.html" >
		                        <span class="nav-text">Datatable</span>
		                      </a>
		                    </li>
		                  </ul>
		                </li>
		                <li>
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon">
		                      <i class="badge badge-xs badge-o md"></i>
		                    </span>
		                    <span class="nav-text">Charts</span>
		                  </a>
		                  <ul class="nav-sub">
		                    <li>
		                      <a href="chart.html" >
		                        <span class="nav-text">Chart</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="chart.peity.html" >
		                        <span class="nav-text">Peity</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="chartjs.html" >
		                        <span class="nav-text">Chartjs</span>
		                      </a>
		                    </li>
		                  </ul>
		                </li>
		                <li class="nav-header hidden-folded mt-2">
		                  <span class="text-xs">Extras</span>
		                </li>
		                <li>
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon">
		                      <i class="badge badge-xs badge-o md"></i>
		                    </span>
		                    <span class="nav-text">Pages</span>
		                  </a>
		                  <ul class="nav-sub nav-mega">
		                    <li>
		                      <a href="profile.html" >
		                        <span class="nav-text">Profile</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="setting.html" >
		                        <span class="nav-text">Setting</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="search.html" >
		                        <span class="nav-text">Search</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="faq.html" >
		                        <span class="nav-text">FAQ</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="gallery.html" >
		                        <span class="nav-text">Gallery</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="invoice.html" >
		                        <span class="nav-text">Invoice</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="price.html" >
		                        <span class="nav-text">Price</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="blank.html" >
		                        <span class="nav-text">Blank</span>
		                      </a>
		                    </li>
		                  </ul>
		                </li>
		                <li>
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon">
		                      <i class="badge badge-xs badge-o md"></i>
		                    </span>
		                    <span class="nav-text">Access</span>
		                  </a>
		                  <ul class="nav-sub nav-mega">
		                    <li>
		                      <a href="signin.html" >
		                        <span class="nav-text">Sign In</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="signup.html" >
		                        <span class="nav-text">Sign Up</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="forgot-password.html" >
		                        <span class="nav-text">Forgot Password</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="lockme.html" >
		                        <span class="nav-text">Lockme Screen</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="404.html" >
		                        <span class="nav-text">Error 404</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="505.html" >
		                        <span class="nav-text">Error 505</span>
		                      </a>
		                    </li>
		                  </ul>
		                </li>
		                <li class="mb-3">
		                  <a>
		                    <span class="nav-caret">
		                      <i class="fa fa-caret-down"></i>
		                    </span>
		                    <span class="nav-icon">
		                      <i class="badge badge-xs badge-o md"></i>
		                    </span>
		                    <span class="nav-text">Multi level</span>
		                  </a>
		                  <ul class="nav-sub nav-mega">
		                    <li>
		                      <a href="#sub_1">
		                        <span class="nav-text">Level one</span>
		                      </a>
		                    </li>
		                    <li>
		                      <a href="#sub_1_">
		                        <span class="nav-caret">
		                          <i class="fa fa-caret-down"></i>
		                        </span>
		                        <span class="nav-text">Level one</span>
		                      </a>
		                      <ul class="nav-sub nav-mega">
		                        <li>
		                          <a href="#sub_2">
		                            <span class="nav-text">Level two</span>
		                          </a>
		                        </li>
		                        <li>
		                          <a href="#sub_2_">
		                            <span class="nav-caret">
		                              <i class="fa fa-caret-down"></i>
		                            </span>
		                            <span class="nav-text">Level two</span>
		                          </a>
		                          <ul class="nav-sub nav-mega">
		                            <li>
		                              <a href="#sub_3_1">
		                                <span class="nav-text">Level three</span>
		                              </a>
		                            </li>
		                            <li>
		                              <a href="#sub_3_2">
		                                <span class="nav-text">Level three</span>
		                              </a>
		                            </li>
		                          </ul>
		                        </li>
		                      </ul>
		                    </li>
		                  </ul>
		                </li>
		          </ul>
		        </div>
		      </div>
		  </div>

		  <!-- sidenav bottom -->
		  <div class="no-shrink lt">
		    <div class="nav-fold">
		    	<a class="d-flex p-2-3" data-toggle="dropdown">
		    	    <span class="avatar w-28 grey hide">J</span>
		    	    <img src="/rol/assets/images/a0.jpg" alt="..." class="w-28 circle">
		    	</a>
		    	<div class="dropdown-menu  w pt-0 mt-2 animate fadeIn">
		    	  <div class="row no-gutters b-b mb-2">
		    	    <div class="col-4 b-r">
		    	      <a href="app.user.html" class="py-2 pt-3 d-block text-center">
		    	        <i class="fa text-md fa-phone-square text-muted"></i>
		    	        <small class="d-block">Call</small>
		    	      </a>
		    	    </div>
		    	    <div class="col-4 b-r">
		    	      <a href="app.message.html" class="py-2 pt-3 d-block text-center">
		    	        <i class="fa text-md fa-comment text-muted"></i>
		    	        <small class="d-block">Chat</small>
		    	      </a>
		    	    </div>
		    	    <div class="col-4">
		    	      <a href="app.inbox.html" class="py-2 pt-3 d-block text-center">
		    	        <i class="fa text-md fa-envelope text-muted"></i>
		    	        <small class="d-block">Email</small>
		    	      </a>
		    	    </div>
		    	  </div>
		    	  <a class="dropdown-item" href="profile.html">
		    	    <span>Profile</span>
		    	  </a>
		    	  <a class="dropdown-item" href="setting.html">
		    	    <span>Settings</span>
		    	  </a>
		    	  <a class="dropdown-item" href="app.inbox.html">
		    	    <span class="float-right"><span class="badge info">6</span></span>
		    	    <span>Inbox</span>
		    	  </a>
		    	  <a class="dropdown-item" href="app.message.html">
		    	    <span>Message</span>
		    	  </a>
		    	  <div class="dropdown-divider"></div>
		    	  <a class="dropdown-item" href="docs.html">
		    	    Need help?
		    	  </a>
		    	  <a class="dropdown-item" href="signin.html">Sign out</a>
		    	</div>
		    	<div class="hidden-folded flex p-2-3 bg">
		    		<div class="d-flex p-1">
		    			<a href="app.inbox.html" class="flex text-nowrap">
		    				<i class="fa fa-bell text-muted mr-1"></i>
		    				<span class="badge badge-pill theme">20</span>
		    			</a>
		    			<a href="lockme.html" class="px-2" data-toggle="tooltip" title="Logout">
		    				<i class="fa fa-power-off text-muted"></i>
		    			</a>
		    		</div>
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

	    	  <ul class="nav flex-row order-lg-2">
	    	    <!-- Notification -->
	    	    <li class="nav-item dropdown">
	    	      <a class="nav-link px-3" data-toggle="dropdown">
	    	        <i class="fa fa-bell text-muted"></i>
	    	        <span class="badge badge-pill up danger">5</span>
	    	      </a>
	    	      <!-- dropdown -->
	    	      <div class="dropdown-menu dropdown-menu-right w-md animate fadeIn mt-2 p-0">
	    	          <div class="scrollable hover" style="max-height: 250px">
	    	            <div class="list">
	    	                <div class="list-item " data-id="item-12">
	    	                  <span class="w-24 avatar circle green">
	    	                      <span class="fa fa-dot-circle-o"></span>
	    	                  </span>
	    	                  <div class="list-body">
	    	                        <a href="" class="item-title _500">Ashton Cox</a>

	    	                      <div class="item-except text-sm text-muted h-1x">
	    	                        Looking for some client-work
	    	                      </div>

	    	                    <div class="item-tag tag hide">
	    	                    </div>
	    	                  </div>
	    	                  <div>
	    	                      <span class="item-date text-xs text-muted">11:30</span>
	    	                  </div>
	    	                </div>
	    	                <div class="list-item " data-id="item-6">
	    	                  <span class="w-24 avatar circle brown">
	    	                      <span class="fa fa-envelope"></span>
	    	                  </span>
	    	                  <div class="list-body">
	    	                        <a href="" class="item-title _500">Rita Ora</a>

	    	                      <div class="item-except text-sm text-muted h-1x">
	    	                        Homepage mockup design
	    	                      </div>

	    	                    <div class="item-tag tag hide">
	    	                    </div>
	    	                  </div>
	    	                  <div>
	    	                      <span class="item-date text-xs text-muted">13:23</span>
	    	                  </div>
	    	                </div>
	    	                <div class="list-item " data-id="item-4">
	    	                  <span class="w-24 avatar circle pink">
	    	                      <span class="fa fa-male"></span>
	    	                  </span>
	    	                  <div class="list-body">
	    	                        <a href="" class="item-title _500">Judith Garcia</a>

	    	                      <div class="item-except text-sm text-muted h-1x">
	    	                        Eddel upload a media
	    	                      </div>

	    	                    <div class="item-tag tag hide">
	    	                    </div>
	    	                  </div>
	    	                  <div>
	    	                      <span class="item-date text-xs text-muted">12:05</span>
	    	                  </div>
	    	                </div>
	    	                <div class="list-item " data-id="item-13">
	    	                  <span class="w-24 avatar circle pink">
	    	                      <span class="fa fa-plus"></span>
	    	                  </span>
	    	                  <div class="list-body">
	    	                        <a href="" class="item-title _500">Airi Satou</a>

	    	                      <div class="item-except text-sm text-muted h-1x">
	    	                        Looking for some client-work
	    	                      </div>

	    	                    <div class="item-tag tag hide">
	    	                    </div>
	    	                  </div>
	    	                  <div>
	    	                      <span class="item-date text-xs text-muted">12:30</span>
	    	                  </div>
	    	                </div>
	    	                <div class="list-item " data-id="item-15">
	    	                  <span class="w-24 avatar circle indigo">
	    	                      <span class="fa fa-facebook"></span>
	    	                  </span>
	    	                  <div class="list-body">
	    	                        <a href="" class="item-title _500">Garrett Winters</a>

	    	                      <div class="item-except text-sm text-muted h-1x">
	    	                        Looking for some client-work
	    	                      </div>

	    	                    <div class="item-tag tag hide">
	    	                    </div>
	    	                  </div>
	    	                  <div>
	    	                      <span class="item-date text-xs text-muted">13:00</span>
	    	                  </div>
	    	                </div>
	    	                <div class="list-item " data-id="item-8">
	    	                  <span class="w-24 avatar circle teal">
	    	                      <span class="fa fa-bolt"></span>
	    	                  </span>
	    	                  <div class="list-body">
	    	                        <a href="" class="item-title _500">RYD</a>

	    	                      <div class="item-except text-sm text-muted h-1x">
	    	                        Added you to repo
	    	                      </div>

	    	                    <div class="item-tag tag hide">
	    	                    </div>
	    	                  </div>
	    	                  <div>
	    	                      <span class="item-date text-xs text-muted">14:00</span>
	    	                  </div>
	    	                </div>
	    	            </div>
	    	          </div>
	    	          <div class="d-flex px-3 py-2 b-t">
	    	            <div class="flex">
	    	              <span>6 Notifications</span>
	    	            </div>
	    	            <a href="setting.html">See all <i class="fa fa-angle-right text-muted"></i></a>
	    	          </div>
	    	      </div>
	    	      <!-- / dropdown -->
	    	    </li>

	    	    <!-- User dropdown menu -->
	    	    <li class="dropdown d-flex align-items-center">
	    	      <a href="#" data-toggle="dropdown" class="d-flex align-items-center">
	    	        <span class="avatar w-32">
	    	          <img src="/rol/assets/images/a8.jpg" alt="...">
	    	        </span>
	    	      </a>
	    	      <div class="dropdown-menu dropdown-menu-right w pt-0 mt-2 animate fadeIn">
	    	        <div class="row no-gutters b-b mb-2">
	    	          <div class="col-4 b-r">
	    	            <a href="app.user.html" class="py-2 pt-3 d-block text-center">
	    	              <i class="fa text-md fa-phone-square text-muted"></i>
	    	              <small class="d-block">Call</small>
	    	            </a>
	    	          </div>
	    	          <div class="col-4 b-r">
	    	            <a href="app.message.html" class="py-2 pt-3 d-block text-center">
	    	              <i class="fa text-md fa-comment text-muted"></i>
	    	              <small class="d-block">Chat</small>
	    	            </a>
	    	          </div>
	    	          <div class="col-4">
	    	            <a href="app.inbox.html" class="py-2 pt-3 d-block text-center">
	    	              <i class="fa text-md fa-envelope text-muted"></i>
	    	              <small class="d-block">Email</small>
	    	            </a>
	    	          </div>
	    	        </div>
	    	        <a class="dropdown-item" href="profile.html">
	    	          <span>Profile</span>
	    	        </a>
	    	        <a class="dropdown-item" href="setting.html">
	    	          <span>Settings</span>
	    	        </a>
	    	        <a class="dropdown-item" href="app.inbox.html">
	    	          <span class="float-right"><span class="badge info">6</span></span>
	    	          <span>Inbox</span>
	    	        </a>
	    	        <a class="dropdown-item" href="app.message.html">
	    	          <span>Message</span>
	    	        </a>
	    	        <div class="dropdown-divider"></div>
	    	        <a class="dropdown-item" href="docs.html">
	    	          Need help?
	    	        </a>
	    	        <a class="dropdown-item" href="signin.html">Sign out</a>
	    	      </div>
	    	    </li>
	    	    <!-- Navarbar toggle btn -->
	    	    <li class="d-lg-none d-flex align-items-center">
	    	      <a href="#" class="mx-2" data-toggle="collapse" data-target="#navbarToggler">
	    	        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512"><path d="M64 144h384v32H64zM64 240h384v32H64zM64 336h384v32H64z"/></svg>
	    	      </a>
	    	    </li>
	    	  </ul>
	    	  <!-- Navbar collapse -->
	    		<div class="collapse navbar-collapse no-grow order-lg-1" id="navbarToggler">
	    	  <form class="input-group m-2 my-lg-0">
	    	      <span class="input-group-btn">
	    	        <button type="button" class="btn no-border no-bg no-shadow"><i class="fa fa-search"></i></button>
	    	      </span>
	    	      <input type="text" class="form-control no-border no-bg no-shadow" placeholder="Search projects...">
	    	  </form>
	    	  </div>

	    	</div>
	    </div>
	    <!-- Main -->
		<div class="content-main " id="content-main">

<!-- ############ Main START-->


<div>
	<div class="row no-gutters">
		<div class="col-6 col-sm-6 col-md-3">
			<div class="padding">
				<h5 class="_600">
					<span class="float-right text-muted">
						<i class="fa fa-repeat text-sm text-muted"></i>
					</span>
					<span>120</span>
				</h5>
				<div class="text-muted mb-4">Visits</div>
				<div class="py-3 b-b">
					<span class="float-right text-md text-primary">+45% <i class="fa fa-caret-up"></i></span>
					<span class="_600 d-block">542</span>
					<small class="text-muted">People</small>
				</div>
				<div class="py-3">
					<span class="float-right text-md text-warning">25% <i class="fa fa-caret-down"></i></span>
					<span class="_600 d-block">235</span>
					<small class="text-muted">Active</small>
				</div>
			</div>
	    </div>
	    <div class="col-6 col-sm-6 col-md-3">
			<div class="padding">
				<h5 class="_600">
					<span class="float-right text-muted">
						<i class="fa fa-repeat text-sm text-muted"></i>
					</span>
					<span>45</span>
				</h5>
				<p class="text-muted mb-4">New Projects</p>
				<div class="py-3">
					<canvas id="chart-doughnut-2" data-plugin="chart" height="100"></canvas>
				</div>
			</div>
	    </div>
	    <div class="col-6 col-sm-6 col-md-3">
			<div class="padding">
				<h5 class="_600">
					<span class="float-right text-muted">
						<i class="fa fa-repeat text-sm text-muted"></i>
					</span>
					<span>350</span>
				</h5>
				<div class="text-muted mb-4">Clients</div>
				<div class="py-3">
					<canvas id="chart-bar-2"></canvas>
				</div>
			</div>
	    </div>
	    <div class="col-6 col-sm-6 col-md-3">
			<div class="padding">
				<h5 class="_600">
					<span class="float-right text-muted">
						<i class="fa fa-repeat text-sm text-muted"></i>
					</span>
					<span>579</span>
				</h5>
				<div class="text-muted mb-4">Tasks</div>
				<div class="py-3">
					<canvas id="chart-line-2"></canvas>
				</div>
			</div>
	    </div>
	</div>
	<div class="white">
		<div class="row no-gutters">
			<div class="col-sm-6">
				<div class="p-lg-3">
					<div class="box-header">
						<h3>Messages</h3>
					</div>
					<div class="list inset">
						    <div class="list-item " data-id="item-10">
						      <span class="w-40 avatar circle blue">
						          <img src="/rol/assets/images/a10.jpg" alt=".">
						      </span>
						      <div class="list-body">
						            <a href="" class="item-title _500">Postiljonen</a>

						          <div class="item-except text-sm text-muted h-1x">
						            Looking for some client-work
						          </div>

						        <div class="item-tag tag hide">
						        </div>
						      </div>
						      <div>
						          <span class="item-date text-xs text-muted">08:00</span>
						      </div>
						    </div>
						    <div class="list-item " data-id="item-12">
						      <span class="w-40 avatar circle green">
						            AC
						      </span>
						      <div class="list-body">
						            <a href="" class="item-title _500">Ashton Cox</a>

						          <div class="item-except text-sm text-muted h-1x">
						            Looking for some client-work
						          </div>

						        <div class="item-tag tag hide">
						        </div>
						      </div>
						      <div>
						          <span class="item-date text-xs text-muted">11:30</span>
						      </div>
						    </div>
						    <div class="list-item " data-id="item-2">
						      <span class="w-40 avatar circle light-blue">
						          <img src="/rol/assets/images/a2.jpg" alt=".">
						      </span>
						      <div class="list-body">
						            <a href="" class="item-title _500">Kygo</a>

						          <div class="item-except text-sm text-muted h-1x">
						            What&#x27;s the project progress now
						          </div>

						        <div class="item-tag tag hide">
						        </div>
						      </div>
						      <div>
						          <span class="item-date text-xs text-muted">08:05</span>
						      </div>
						    </div>
						    <div class="list-item " data-id="item-3">
						      <span class="w-40 avatar circle green">
						          <img src="/rol/assets/images/a3.jpg" alt=".">
						      </span>
						      <div class="list-body">
						            <a href="" class="item-title _500">Jeremy Scott</a>

						          <div class="item-except text-sm text-muted h-1x">
						            Submit a support ticket
						          </div>

						        <div class="item-tag tag hide">
						        </div>
						      </div>
						      <div>
						          <span class="item-date text-xs text-muted">09:05</span>
						      </div>
						    </div>
						    <div class="list-item " data-id="item-8">
						      <span class="w-40 avatar circle teal">
						          <img src="/rol/assets/images/a8.jpg" alt=".">
						      </span>
						      <div class="list-body">
						            <a href="" class="item-title _500">RYD</a>

						          <div class="item-except text-sm text-muted h-1x">
						            Added you to repo
						          </div>

						        <div class="item-tag tag hide">
						        </div>
						      </div>
						      <div>
						          <span class="item-date text-xs text-muted">14:00</span>
						      </div>
						    </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="p-lg-3">
		            <div class="box-header">
		              <h3>Members</h3>
		            </div>
		            <div class="list inset">
		                  <div class="list-item " data-id="item-10">
		                    <span class="w-40 avatar circle blue">
		                      <i class="on b-white avatar-right"></i>
		                        P
		                    </span>
		                    <div class="list-body">
		                          <a href="" class="item-title _500">Postiljonen</a>


		                          <div class="item-except text-sm text-muted h-1x">
		                          postiljonen@gmail.com
		                          </div>
		                      <div class="item-tag tag hide">
		                      </div>
		                    </div>
		                    <div>
		                        <div class="item-action dropdown">
		                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
		                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
		                            <a class="dropdown-item">
		                            	<i class="fa fa-tag"></i>
		                            	Action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-pencil"></i>
		                            	Another action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-reply"></i>
		                            	Something else here
		                            </a>
		                            <div class="dropdown-divider"></div>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-ellipsis-h"></i>
		                            	Separated link
		                            </a>
		                          </div>
		                        </div>
		                    </div>
		                  </div>
		                  <div class="list-item " data-id="item-14">
		                    <span class="w-40 avatar circle brown">
		                      <i class="off b-white avatar-right"></i>
		                        BW
		                    </span>
		                    <div class="list-body">
		                          <a href="" class="item-title _500">Brielle Williamson</a>


		                          <div class="item-except text-sm text-muted h-1x">
		                          brielle-williamson@gmail.com
		                          </div>
		                      <div class="item-tag tag hide">
		                      </div>
		                    </div>
		                    <div>
		                        <div class="item-action dropdown">
		                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
		                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
		                            <a class="dropdown-item">
		                            	<i class="fa fa-tag"></i>
		                            	Action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-pencil"></i>
		                            	Another action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-reply"></i>
		                            	Something else here
		                            </a>
		                            <div class="dropdown-divider"></div>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-ellipsis-h"></i>
		                            	Separated link
		                            </a>
		                          </div>
		                        </div>
		                    </div>
		                  </div>
		                  <div class="list-item " data-id="item-11">
		                    <span class="w-40 avatar circle blue">
		                      <i class="on b-white avatar-right"></i>
		                        TN
		                    </span>
		                    <div class="list-body">
		                          <a href="" class="item-title _500">Tiger Nixon</a>


		                          <div class="item-except text-sm text-muted h-1x">
		                          tiger-nixon@gmail.com
		                          </div>
		                      <div class="item-tag tag hide">
		                      </div>
		                    </div>
		                    <div>
		                        <div class="item-action dropdown">
		                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
		                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
		                            <a class="dropdown-item">
		                            	<i class="fa fa-tag"></i>
		                            	Action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-pencil"></i>
		                            	Another action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-reply"></i>
		                            	Something else here
		                            </a>
		                            <div class="dropdown-divider"></div>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-ellipsis-h"></i>
		                            	Separated link
		                            </a>
		                          </div>
		                        </div>
		                    </div>
		                  </div>
		                  <div class="list-item " data-id="item-13">
		                    <span class="w-40 avatar circle pink">
		                      <i class="off b-white avatar-right"></i>
		                        AS
		                    </span>
		                    <div class="list-body">
		                          <a href="" class="item-title _500">Airi Satou</a>


		                          <div class="item-except text-sm text-muted h-1x">
		                          airi-satou@gmail.com
		                          </div>
		                      <div class="item-tag tag hide">
		                      </div>
		                    </div>
		                    <div>
		                        <div class="item-action dropdown">
		                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
		                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
		                            <a class="dropdown-item">
		                            	<i class="fa fa-tag"></i>
		                            	Action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-pencil"></i>
		                            	Another action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-reply"></i>
		                            	Something else here
		                            </a>
		                            <div class="dropdown-divider"></div>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-ellipsis-h"></i>
		                            	Separated link
		                            </a>
		                          </div>
		                        </div>
		                    </div>
		                  </div>
		                  <div class="list-item " data-id="item-5">
		                    <span class="w-40 avatar circle blue-grey">
		                      <i class="on b-white avatar-right"></i>
		                        R
		                    </span>
		                    <div class="list-body">
		                          <a href="" class="item-title _500">Radionomy</a>


		                          <div class="item-except text-sm text-muted h-1x">
		                          radionomy@gmail.com
		                          </div>
		                      <div class="item-tag tag hide">
		                      </div>
		                    </div>
		                    <div>
		                        <div class="item-action dropdown">
		                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
		                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
		                            <a class="dropdown-item">
		                            	<i class="fa fa-tag"></i>
		                            	Action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-pencil"></i>
		                            	Another action
		                            </a>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-reply"></i>
		                            	Something else here
		                            </a>
		                            <div class="dropdown-divider"></div>
		                            <a class="dropdown-item">
		                            	<i class="fa fa-ellipsis-h"></i>
		                            	Separated link
		                            </a>
		                          </div>
		                        </div>
		                    </div>
		                  </div>
		            </div>
		        </div>
			</div>
		</div>
	</div>
	<div>
		<div class="row no-gutters">
			<div class="col-md-4">
				<div class="padding">

					<h6>Sales Statistical Overview</h6>
					<p class="text-muted my-3">Sale information on advertising, exhibitions, market research, online media, customer desires, PR and much more</p>
					<p><i class="fa fa-arrow-circle-o-up text-success mr-1"></i><span class="text-success">15%</span> more than last week</p>
					<a href="#" class="btn btn-sm btn-rounded success">Update</a>
					<a href="#" class="btn btn-sm btn-rounded white">See detail</a>

				</div>
	        </div>
	        <div class="col-md-8">
		        <div class="padding">
		            <canvas id="chart-line" height="120">
		            </canvas>
		        </div>
	        </div>
	    </div>
	</div>
	<div class="row no-gutters align-items-stretch">
		<div class="col-md-4 white lt">
			<div class="padding">
				    <span class="badge success float-right">5</span>
				  <h6 class="mb-3">Activity</h6>
				  <div class="streamline streamline-dotted">
				    <div class="sl-item  b- ">
				          <div class="sl-left">
				            <img src="/rol/assets/images/a5.jpg" class="circle" alt=".">
				          </div>
				      <div class="sl-content">
				        <span class="sl-date text-muted">09:50</span>
				        <div>
				          <a href="#" class="text-primary">Radionomy</a>
				          Was added to Repo
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b- ">
				      <div class="sl-content">
				        <span class="sl-date text-muted">13:00</span>
				        <div>
				          <a href="#" class="text-primary">Garrett Winters</a>
				          Followed by Jessic
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b- ">
				          <div class="sl-left">
				            <img src="/rol/assets/images/a2.jpg" class="circle" alt=".">
				          </div>
				      <div class="sl-content">
				        <span class="sl-date text-muted">08:05</span>
				        <div>
				          <a href="#" class="text-primary">Kygo</a>
				          Added you to repo
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b- ">
				      <div class="sl-content">
				        <span class="sl-date text-muted">12:30</span>
				        <div>
				          <a href="#" class="text-primary">Airi Satou</a>
				          New features added
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b- ">
				          <div class="sl-left">
				            <img src="/rol/assets/images/a6.jpg" class="circle" alt=".">
				          </div>
				      <div class="sl-content">
				        <span class="sl-date text-muted">13:23</span>
				        <div>
				          <a href="#" class="text-primary">Rita Ora</a>
				          Sent you an email
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
		</div>

		<div class="col-md-4 light bg">
			<div class="padding">
				  <h6 class="mb-3">Tasks</h6>
				  <div class="streamline streamline-dotted">
				    <div class="sl-item  b-primary ">
				      <div class="sl-content">
				        <span class="sl-date text-muted">13:00</span>
				        <div>
				          <a href="#" class="text-primary">Garrett Winters</a>
				          Followed by Jessic
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b- ">
				      <div class="sl-content">
				        <span class="sl-date text-muted">11:30</span>
				        <div>
				          <a href="#" class="text-primary">Ashton Cox</a>
				          New feedback from John
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b- ">
				      <div class="sl-content">
				        <span class="sl-date text-muted">09:05</span>
				        <div>
				          <a href="#" class="text-primary">Jeremy Scott</a>
				          Assign you a task
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b- ">
				      <div class="sl-content">
				        <span class="sl-date text-muted">15:00</span>
				        <div>
				          <a href="#" class="text-primary">Pablo Nouvelle</a>
				          Added API call to update track element
				        </div>
				      </div>
				    </div>
				    <div class="sl-item  b-primary ">
				      <div class="sl-content">
				        <span class="sl-date text-muted">08:05</span>
				        <div>
				          <a href="#" class="text-primary">Kygo</a>
				          Added you to repo
				        </div>
				      </div>
				    </div>
				  </div>
			  	<div class="p-2">
			  		<a href="#" class="btn btn-sm btn-block white">Load More</a>
			  	</div>
			</div>
		</div>

		<div class="col-md-4 dk">
			<div class="padding">
	            <h6>Friends</h6>
	            <div class="list inset">
	                  <div class="list-item " data-id="item-7">
	                    <span class="w-24 avatar circle indigo">
	                        <img src="/rol/assets/images/a7.jpg" alt=".">
	                    </span>
	                    <div class="list-body">
	                          <a href="" class="item-title _500">Fifth Harmony</a>


	                      <div class="item-tag tag hide">
	                      </div>
	                    </div>
	                    <div>
	                        <div class="item-action dropdown">
	                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
	                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
	                            <a class="dropdown-item">
	                            	<i class="fa fa-tag"></i>
	                            	Action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-pencil"></i>
	                            	Another action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-reply"></i>
	                            	Something else here
	                            </a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-ellipsis-h"></i>
	                            	Separated link
	                            </a>
	                          </div>
	                        </div>
	                    </div>
	                  </div>
	                  <div class="list-item " data-id="item-12">
	                    <span class="w-24 avatar circle green">
	                          AC
	                    </span>
	                    <div class="list-body">
	                          <a href="" class="item-title _500">Ashton Cox</a>


	                      <div class="item-tag tag hide">
	                      </div>
	                    </div>
	                    <div>
	                        <div class="item-action dropdown">
	                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
	                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
	                            <a class="dropdown-item">
	                            	<i class="fa fa-tag"></i>
	                            	Action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-pencil"></i>
	                            	Another action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-reply"></i>
	                            	Something else here
	                            </a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-ellipsis-h"></i>
	                            	Separated link
	                            </a>
	                          </div>
	                        </div>
	                    </div>
	                  </div>
	                  <div class="list-item " data-id="item-1">
	                    <span class="w-24 avatar circle grey">
	                        <img src="/rol/assets/images/a1.jpg" alt=".">
	                    </span>
	                    <div class="list-body">
	                          <a href="" class="item-title _500">Summerella</a>


	                      <div class="item-tag tag hide">
	                      </div>
	                    </div>
	                    <div>
	                        <div class="item-action dropdown">
	                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
	                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
	                            <a class="dropdown-item">
	                            	<i class="fa fa-tag"></i>
	                            	Action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-pencil"></i>
	                            	Another action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-reply"></i>
	                            	Something else here
	                            </a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-ellipsis-h"></i>
	                            	Separated link
	                            </a>
	                          </div>
	                        </div>
	                    </div>
	                  </div>
	                  <div class="list-item " data-id="item-3">
	                    <span class="w-24 avatar circle green">
	                        <img src="/rol/assets/images/a3.jpg" alt=".">
	                    </span>
	                    <div class="list-body">
	                          <a href="" class="item-title _500">Jeremy Scott</a>


	                      <div class="item-tag tag hide">
	                      </div>
	                    </div>
	                    <div>
	                        <div class="item-action dropdown">
	                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
	                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
	                            <a class="dropdown-item">
	                            	<i class="fa fa-tag"></i>
	                            	Action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-pencil"></i>
	                            	Another action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-reply"></i>
	                            	Something else here
	                            </a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-ellipsis-h"></i>
	                            	Separated link
	                            </a>
	                          </div>
	                        </div>
	                    </div>
	                  </div>
	                  <div class="list-item " data-id="item-14">
	                    <span class="w-24 avatar circle brown">
	                          BW
	                    </span>
	                    <div class="list-body">
	                          <a href="" class="item-title _500">Brielle Williamson</a>


	                      <div class="item-tag tag hide">
	                      </div>
	                    </div>
	                    <div>
	                        <div class="item-action dropdown">
	                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
	                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
	                            <a class="dropdown-item">
	                            	<i class="fa fa-tag"></i>
	                            	Action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-pencil"></i>
	                            	Another action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-reply"></i>
	                            	Something else here
	                            </a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-ellipsis-h"></i>
	                            	Separated link
	                            </a>
	                          </div>
	                        </div>
	                    </div>
	                  </div>
	                  <div class="list-item " data-id="item-2">
	                    <span class="w-24 avatar circle light-blue">
	                        <img src="/rol/assets/images/a2.jpg" alt=".">
	                    </span>
	                    <div class="list-body">
	                          <a href="" class="item-title _500">Kygo</a>


	                      <div class="item-tag tag hide">
	                      </div>
	                    </div>
	                    <div>
	                        <div class="item-action dropdown">
	                          <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
	                          <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
	                            <a class="dropdown-item">
	                            	<i class="fa fa-tag"></i>
	                            	Action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-pencil"></i>
	                            	Another action
	                            </a>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-reply"></i>
	                            	Something else here
	                            </a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item">
	                            	<i class="fa fa-ellipsis-h"></i>
	                            	Separated link
	                            </a>
	                          </div>
	                        </div>
	                    </div>
	                  </div>
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


<!-- ############ SWITHCHER START-->
<div id="setting">
  <div class="setting dark-white rounded-bottom" id="theme">
    <a href="#" data-toggle-class="active" data-target="#theme" class="dark-white toggle">
      <i class="fa fa-gear text-primary fa-spin"></i>
    </a>
    <div class="box-header">
      <a href="https://themeforest.net/item/apply-web-application-admin-template/21072584?ref=flatfull" class="btn btn-xs rounded danger float-right">BUY</a>
      <strong>Theme Switcher</strong>
    </div>
    <div class="box-divider"></div>
    <div class="box-body">
      <p id="settingLayout">
        <label class="md-check my-1 d-block">
          <input type="checkbox" name="fixedAside">
          <i></i>
          <span>Fixed Aside</span>
        </label>
        <label class="md-check my-1 d-block">
          <input type="checkbox" name="fixedContent">
          <i></i>
          <span>Fixed Content</span>
        </label>
        <label class="md-check my-1 d-block">
          <input type="checkbox" name="folded">
          <i></i>
          <span>Folded Aside</span>
        </label>
        <label class="md-check my-1 d-block">
          <input type="checkbox" name="container">
          <i></i>
          <span>Boxed Layout</span>
        </label>
        <label class="md-check my-1 d-block">
          <input type="checkbox" name="ajax">
          <i></i>
          <span>Ajax load page</span>
        </label>
        <label class="pointer my-1 d-block" data-toggle="fullscreen" data-plugin="screenfull" data-target="fullscreen">
          <span class="ml-1 mr-2 auto">
            <i class="fa fa-expand d-inline"></i>
            <i class="fa fa-compress d-none"></i>
          </span>
          <span>Fullscreen mode</span>
        </label>
      </p>
      <p>Colors:</p>
      <p>
        <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
          <input type="radio" name="theme" value="primary">
          <i class="primary"></i>
        </label>
        <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
          <input type="radio" name="theme" value="accent">
          <i class="accent"></i>
        </label>
        <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
          <input type="radio" name="theme" value="warn">
          <i class="warn"></i>
        </label>
        <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
          <input type="radio" name="theme" value="info">
          <i class="info"></i>
        </label>
        <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
          <input type="radio" name="theme" value="success">
          <i class="success"></i>
        </label>
        <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
          <input type="radio" name="theme" value="warning">
          <i class="warning"></i>
        </label>
        <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
          <input type="radio" name="theme" value="danger">
          <i class="danger"></i>
        </label>
      </p>
      <div class="row no-gutters">
        <div class="col">
          <p>Brand</p>
          <p>
            <label class="radio radio-inline m-0 mr-1 ui-check">
              <input type="radio" name="brand" value="dark-white">
              <i class="light"></i>
            </label>
            <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
              <input type="radio" name="brand" value="dark">
              <i class="dark"></i>
            </label>
          </p>
        </div>
        <div class="col mx-2">
          <p>Aside</p>
          <p>
            <label class="radio radio-inline m-0 mr-1 ui-check">
              <input type="radio" name="aside" value="white">
              <i class="light"></i>
            </label>
            <label class="radio radio-inline m-0 mr-1 ui-check ui-check-color">
              <input type="radio" name="aside" value="dark">
              <i class="dark"></i>
            </label>
          </p>
        </div>
        <div class="col">
          <p>Themes</p>
          <div class="clearfix">
            <label class="radio radio-inline ui-check">
              <input type="radio" name="bg" value="">
              <i class="light"></i>
            </label>
            <label class="radio radio-inline ui-check ui-check-color">
              <input type="radio" name="bg" value="dark">
              <i class="dark"></i>
            </label>
          </div>
        </div>
      </div>
      <p>Demos</p>
      <div class="text-md">
        <a href="dashboard.html?folded=false&amp;bg=&amp;aside=dark&amp;brand=dark" class="no-ajax badge light">0</a>
        <a href="dashboard.1.html?folded=false&amp;bg=&amp;aside=dark&amp;brand=dark-white" class="no-ajax badge light">1</a>
        <a href="dashboard.2.html?folded=false&amp;bg=&amp;aside=dark&amp;brand=white" class="no-ajax badge light">2</a>
        <a href="dashboard.3.html?folded=false&amp;bg=&amp;aside=white&amp;brand=white" class="no-ajax badge light">3</a>
        <a href="dashboard.4.html?folded=true&amp;bg=&amp;aside=dark" class="no-ajax badge light">4</a>
        <a href="dashboard.5.html?folded=true&amp;bg=&amp;aside=dark&amp;brand=dark" class="no-ajax badge light">5</a>
        <a href="dashboard.6.html?folded=false&amp;bg=&amp;aside=white&amp;brand=white" class="no-ajax badge light">6</a>
        <a href="dashboard.7.html?folded=false&amp;bg=&amp;aside=dark&amp;brand=dark" class="no-ajax badge light">7</a>
        <a href="dashboard.8.html?folded=false&amp;bg=&amp;aside=white&amp;brand=white" class="no-ajax badge light">8</a>
        <a href="dashboard.9.html?bg=&amp;" class="no-ajax badge light">9</a>
        <a href="rtl.html?folded&amp;bg=" class="no-ajax badge light">RTL</a>
      </div>
    </div>
  </div>
</div>
<!-- ############ SWITHCHER END-->

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
</body>
</html>
