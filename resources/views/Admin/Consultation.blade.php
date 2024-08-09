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

    <!-- DataTables CSS from CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Components.Admin.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
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
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
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
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="images/logo-removebg-preview.png" alt="..." class="avatar-img rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="images/logo-removebg-preview.png" alt="image profile" class="avatar-img rounded" />
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
                                                    <a href="VideoTutorial/UsersManual.pdf" target="_blank" style="text-decoration: none;" download>
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
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <a href="VideoTutorial/Admin.pdf" target="_blank" style="text-decoration: none;" download>
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
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
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
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Inquiry</h3>
                        <ul class="breadcrumbs mb-3">
                            <!-- Breadcrumbs -->
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inquiry Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="inquiryTable" class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Notes</th>
                <th>Service</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
    @foreach($consultations as $consultation)
        <tr>
            <td>{{ $consultation->full_name }}</td>
            <td>{{ $consultation->email }}</td>
            <td>{{ $consultation->phone }}</td>
            <td>{{ $consultation->notes }}</td>
            <td>{{ $consultation->category }}</td>
            <td>
                @if($consultation->image)
                <img src="{{ asset($consultation->image) }}" alt="Consultation Image" style="max-width: 100px; max-height: 100px; width: auto; height: auto;">
                @else
                    No image
                @endif
            </td>
        </tr>
    @endforeach
</tbody>

    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Job Modal -->
            <!-- Add your modal code here if needed -->

            <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script>

            <script>
                $(document).ready(function () {
                    var table = $('#inquiryTable').DataTable({
                        responsive: true,
                        dom: 'Bfrtip', // This places the buttons at the top
                        buttons: [
                            'print', 'copy', 'csv', 'pdf'
                        ],
                        language: {
                            search: "Search: ",
                            searchPlaceholder: "Search here..."
                        }
                    });

                    new $.fn.dataTable.Buttons(table, {
                        buttons: [
                            'print',
                            'copy',
                            'csv',
                            'pdf'
                        ]
                    }).container().appendTo('#inquiryTable_wrapper .col-md-6:eq(0)');
                });
            </script>

            <!-- Additional Scripts -->
            <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
            <script src="assets/js/plugin/chart.js/chart.min.js"></script>
            <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
            <script src="assets/js/plugin/chart-circle/circles.min.js"></script>
            <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
            <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
            <script src="assets/js/plugin/jsvectormap/world.js"></script>
            <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
            <script src="assets/js/kaiadmin.min.js"></script>
            <script src="assets/js/setting-demo.js"></script>
            <script src="assets/js/demo.js"></script>
        </div>
    </div>
</body>
</html>
