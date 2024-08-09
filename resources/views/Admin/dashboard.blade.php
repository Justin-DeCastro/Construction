<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
<link rel="shortcut icon" type="xicon" href="images/logo-removebg-preview.png">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Components.admin.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <!-- <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav> -->

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            
                           

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="images/logo-removebg-preview.png" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                  
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="images/logo-removebg-preview.png" alt="image profile"
                                                        class="avatar-img rounded" />
                                                </div>
                                               
                                            </div>
                                        </li>
                                      <li>
    <div class="user-box">
        <div class="avatar-lg">
          
            <video src="VideoTutorial/VideoTutorial.mp4" alt="video profile" class="avatar-img rounded" controls>
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="u-text">
            <h4>Video Tutorial</h4>
        </div>
    </div>
</li>
<li>
    <div class="user-box">
        <div class="avatar-lg">
         
<a href="VideoTutorial/UsersManual.pdf" target="_blank" style="text-decoration: none;"download>
    <button style="
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        width: 200px; /* Adjust the width to make the button longer */
        cursor: pointer;
        transition: background-color 0.3s;
    ">
        View Users Manual
    </button>
</a>

        </div>
        <div class="u-text">
            <!--<h4>Admin Manual</h4>-->
        </div>
    </div>
</li>

<li>
    <div class="user-box">
        <div class="avatar-lg">
         
<a href="VideoTutorial/Admin.pdf" target="_blank" style="text-decoration: none;"download>
    <button style="
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        width: 200px; /* Adjust the width to make the button longer */
        cursor: pointer;
        transition: background-color 0.3s;
    ">
        View Admin Manual
    </button>
</a>

        </div>
        <div class="u-text">
            <!--<h4>Admin Manual</h4>-->
        </div>
    </div>
</li>




                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <!-- <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div> -->
                                            <a class="dropdown-item" href="logout">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">


                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body" style="height: 140px;">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-icon" style="height: 100px; width: 200px;"> <!-- Adjusted height and width -->
                                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">


                                            <div class="numbers">
                                                <p class="card-category">Total Job Applicants</p>
                                                <h4 class="card-title">
   
</h4>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body" style="height: 140px;">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-icon" style="height: 100px; width: 200px;">
                                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                                <i class="fas fa-user-check"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">For Interview</p>
                                                                                                <h4 class="card-title">
</a>
</h4>

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body" style="height: 140px;">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-icon" style="height: 100px; width: 200px;">
                                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">Manpower Requisition Applicant</p>
                                                   <h4 class="card-title">
   
</h4>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body" style="height: 140px;">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-icon" style="height: 100px; width: 200px;">
                                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">OJT Applicants</p>
                                                                                               <h4 class="card-title">

</h4>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




            <!-- <div class="row">
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">User Statistics</div>
                      <div class="card-tools">
                        <a
                          href="#"
                          class="btn btn-label-success btn-round btn-sm me-2"
                        >
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                          Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                          Print
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-primary card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Daily Sales</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-sm btn-label-light dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Export
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-category">March 25 - April 02</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                      <h1>$4,578.58</h1>
                    </div>
                    <div class="pull-in">
                      <canvas id="dailySalesChart"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card card-round">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end text-primary">+5%</div>
                    <h2 class="mb-2">17</h2>
                    <p class="text-muted">Users online</p>
                    <div class="pull-in sparkline-fix">
                      <div id="lineChart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div> -->

                    <!-- Custom template | don't include it in your project! -->

                    <!-- End Custom template -->
                <!-- </div> -->
                <!--   Core JS Files   -->
                <script src="assets/js/core/jquery-3.7.1.min.js"></script>
                <script src="assets/js/core/popper.min.js"></script>
                <script src="assets/js/core/bootstrap.min.js"></script>

                <!-- jQuery Scrollbar -->
                <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

                <!-- Chart JS -->
                <script src="assets/js/plugin/chart.js/chart.min.js"></script>

                <!-- jQuery Sparkline -->
                <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

                <!-- Chart Circle -->
                <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

                <!-- Datatables -->
                <script src="assets/js/plugin/datatables/datatables.min.js"></script>

                <!-- Bootstrap Notify -->
                <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

                <!-- jQuery Vector Maps -->
                <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
                <script src="assets/js/plugin/jsvectormap/world.js"></script>

                <!-- Sweet Alert -->
                <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

                <!-- Kaiadmin JS -->
                <script src="assets/js/kaiadmin.min.js"></script>

                <!-- Kaiadmin DEMO methods, don't include it in your project! -->
                <script src="assets/js/setting-demo.js"></script>
                <script src="assets/js/demo.js"></script>
                <!-- <script>
                    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                        type: "line",
                        height: "70",
                        width: "100%",
                        lineWidth: "2",
                        lineColor: "#177dff",
                        fillColor: "rgba(23, 125, 255, 0.14)",
                    });

                    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
                        type: "line",
                        height: "70",
                        width: "100%",
                        lineWidth: "2",
                        lineColor: "#f3545d",
                        fillColor: "rgba(243, 84, 93, .14)",
                    });

                    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
                        type: "line",
                        height: "70",
                        width: "100%",
                        lineWidth: "2",
                        lineColor: "#ffa534",
                        fillColor: "rgba(255, 165, 52, .14)",
                    });
                </script> -->
</body>

</html>
