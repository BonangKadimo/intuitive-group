<!DOCTYPE html>
<!--HTML Bootstrap 5 Office Assistant Dashboard -->


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title> Office Assistant Dashboard </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flatpickr/flatpickr.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="../assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Intuitive<span>E-Healthcare</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="Office-assistant Dashboard1.blade.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">CATEGORY</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Email</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                
                <li class="nav-item">
                  <a href="pages/email/read.blade.php" class="nav-link">Read</a>
                </li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="pages/apps/calendar.blade.php" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>
          
         
          

          
    
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Pages</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/general/blank-page.blade.php" class="nav-link">Blank page</a>
                </li>

                <li class="nav-item">
                  <a href="pages/general/invoice.blade.php" class="nav-link">INVOICE FOR PRESCRIPTIONS</a>
                </li>
                
                  
            
                <li class="nav-item">
                  <a href="pages/general/pricing.blade.php" class="nav-link">PAYMENTS</a>
                </li>
                
                  
              </ul>
            </div>
          </li>
          <li class="nav-item">
           
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/auth/login.blade.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="pages/auth/register.blade.php" class="nav-link">Register</a>
                </li>
              </ul>
            </div>
          </li>

          
         
            
              
              
           
        
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">MODES:</h6>
        <div class="mb-3 pb-3 border-bottom">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
            <label class="form-check-label" for="sidebarLight">
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
            <label class="form-check-label" for="sidebarDark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="../demo1/Office-assistant Dashboard1.blade.php">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="../demo2/Office-assistant Dashboard1.blade.php">
            <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-bw mt-1" title="bw"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English/Tswana</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
							</div>
            </li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p class="mb-0 fw-bold">CATEGORY</p>
									<a href="javascript:;" class="text-muted">Edit</a>
								</div>
                <div class="row g-0 p-1">
                  <div class="col-3 text-center">
                    <a href="pages/apps/chat.blade.php" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="pages/apps/calendar.blade.php" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="pages/email/inbox.blade.php" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
                  </div>
                  
                    
                  
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>5 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Dr Tswai</p>
                        <p class="tx-12 text-muted">Appointment for Boago approved</p>
                      </div>
                      <p class="tx-12 text-muted">2 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>DR Khan</p>
                        <p class="tx-12 text-muted">Appointment for Sethunya Gabana approved</p>
                      </div>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>DR Bububaba</p>
                        <p class="tx-12 text-muted">Please check the rooms available for my two patients</p>
                      </div>
                      <p class="tx-12 text-muted">3 mins ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Mr Samson Lilo</p>
                        <p class="tx-12 text-muted">Rooms available are at block 252</p>
                      </div>
                      <p class="tx-12 text-muted">1 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Mr Shaquiri Kehakae</p>
                        <p class="tx-12 text-muted">Let's go to Mugg & Bean for Lunch</p>
                      </div>
                      <p class="tx-12 text-muted">4 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>4 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New Patient registered</p>
											<p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Server Limit Reached!</p>
											<p class="tx-12 text-muted">1 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New Doctor registered</p>
											<p class="tx-12 text-muted">2 sec ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="layers"></i>
                    </div>
                   
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="download"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Download completed</p>
											<p class="tx-12 text-muted">6 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder">Mumsy Molefhe</p>
										<p class="tx-12 text-muted">molefmumsy@gmail.com</p>
									</div>
								</div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="pages/general/profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="repeat"></i>
                      <span>Switch User</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- main-->

			<div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
              <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
              <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
            </div>
            <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="printer"></i>
              Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="download-cloud"></i>
              Download Report
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">New Patients</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">3,897</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">35,084</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-danger">
                            <span>-2.8%</span>
                            <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="orderChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Growth</h6>
                      <div class="dropdown mb-2">
                        <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">70%</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+4.8%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                  <h6 class="card-title mb-0">PATIENT STATISTICS</h6>
                  <div class="dropdown">
                    <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row align-items-start">
                  <div class="col-md-7">
                    <p class="text-muted tx-13 mb-3 mb-md-0">1086 25%</p>
                  </div>
                  <div class="col-md-5 d-flex justify-content-md-end">
                    <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-outline-primary">Today</button>
                      <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                      <button type="button" class="btn btn-primary">Month</button>
                      <button type="button" class="btn btn-outline-primary">Year</button>
                    </div>
                  </div>
                </div>
                <div id="patientChart" ></div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

        <div class="row">
          
          
        </div> <!-- row -->

        <div class="row">
          
          <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">APPOINTMENTS</h6>
                  <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Patient name</th>
                        <th class="pt-0">Date for Appointment</th>
        
                        <th class="pt-0">Status</th>
                        <th class="pt-0">Doctor's name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Joan Game Kehakae</td>
                        <td>04/11/2022</td>
                        
                        <td><span class="badge bg-danger">Approved</span></td>
                        <td>Dr Bububaba</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Bonang Kadimo</td>
                        <td>02/11/2022</td>
                        
                        <td><span class="badge bg-success">Rejected</span></td>
                        <td>Dr Tswai</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Boago Mosidila</td>
                        <td>02/11/2022</td>
                        
                        <td><span class="badge bg-info">Approved</span></td>
                        <td>Dr Tswai</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Sethunya Gabana</td>
                        <td>05/11/2022</td>
                        
                        <td><span class="badge bg-warning">Approved</span>
                        </td>
                        <td>Dr Khan</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Kabelo </td>
                        <td>10/11/2022</td>
                        
                        <td><span class="badge bg-danger">Pending</span></td>
                        <td>Dr Frank</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Jeannie Kehake</td>
                        <td>10/11/2022</td>
                        
                        <td><span class="badge bg-primary">Pending</span></td>
                        <td>Dr Katy Perry</td>
                      </tr>
                      <tr>
                        
                        
                        
                        
                        
                        
           
                    </tbody>
                  </table>
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->

			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.Inituitive_E-HealthCare.com" target="_blank">Inituitive E-HealthCare</a>.</p>
				<p class="text-muted">Care with<i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="../assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="../assets/vendors/flatpickr/flatpickr.min.js"></script>
  <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="../assets/js/dashboard-light.js"></script>
	<!-- End custom js for this page -->

</body>
</html>    