<html class="no-focus" lang="en"><!--<![endif]--><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Dashboard</title>

        <meta name="description" content="">
        <meta name="author" content="M Fikri Setiadi">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="./assets/images/favicon.png">

        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="./assets/css/codebase.min.css">

        
    <style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="sidebar-o side-scroll main-content-boxed side-trans-enabled page-header-fixed">
            

            <!-- Sidebar -->
         
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 56px;"><div id="sidebar-scroll" style="overflow: hidden; width: auto; height: 56px;">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="">
                                        <i class="text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark"></span><span class="font-size-xl text-success"><strong>HOTEL</strong></span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="./assets/images/user_blank.png" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                 <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">Admin</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                
                                <li>
                                    <a class="active" href=""><i class="si si-screen-desktop"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-star"></i><span class="sidebar-mini-hide">Room &amp; Suite</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-call-end"></i><span class="sidebar-mini-hide">Info Contact</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-user"></i><span class="sidebar-mini-hide">Users</span></a>
                                </li>
                               
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                        
                    </div>
                    <!-- Sidebar Content -->
                </div><div class="slimScrollBar" style="background: rgb(205, 205, 205) none repeat scroll 0% 0%; width: 4px; position: absolute; top: 0px; opacity: 0.9; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 30px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 1; z-index: 90; right: 0px;"></div></div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->


                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                M Fikri Setiadi<i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->
            <!-- Main Container -->
            <main id="main-container" style="min-height: 692px;">
                <!-- Page Content -->
                    <div class="col-md-12">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Info Contact</h3>
                                    <div class="block-options">
                                        <button class="btn btn-primary" id="btn-add-new"><span class="fa fa-pencil"></span> Edit</button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- Addresses -->
                                    <div class="block">
                                                                                    <address>
                                                <strong>MHOTEL.</strong><br>
                                                Anda adalah orang penting bagi M hotel jika anda punya masalah mengenai kami silahkan kontak kami, dengan senang hati kami melayani anda<br>
                                                <abbr title="Alamat">Alamat:</abbr> Jl. M Hotel No. 25 Kota Padang West Sumatera - INDONESIA<br>
                                                <abbr title="Phone">Phone:</abbr> +61 97492 242xxx                                            </address>
                                            <address>
                                                <strong>E-Mail</strong><br>
                                                <a href="mailto:#">infomhotel@gmail.com</a>
                                            </address>
                                    </div>
                                    <!-- END Addresses -->
                                </div>
                            </div>
                        </div>
            <!-- END Main Container -->
            <!-- Footer -->
            <footer id="page-footer" class="opacity-0" style="opacity: 1;">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted by <a class="font-w600" href="" target="_blank">Admin</a>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->



        <!-- Codebase Core JS -->
        <script src="./assets/js/core/jquery.min.js"></script>
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="./assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="./assets/js/core/jquery.appear.min.js"></script>
        <script src="./assets/js/core/jquery.countTo.min.js"></script>
        <script src="./assets/js/core/js.cookie.min.js"></script>
        <script src="./assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="./assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->


        <script type="text/javascript">
            $(document).ready(function(){


                var BePagesDashboard = function() {
                    // Chart.js Charts, for more examples you can check out http://www.chartjs.org/docs
                    var initDashboardChartJS = function () {
                        // Set Global Chart.js configuration
                        Chart.defaults.global.defaultFontColor              = '#555555';
                        Chart.defaults.scale.gridLines.color                = "transparent";
                        Chart.defaults.scale.gridLines.zeroLineColor        = "transparent";
                        Chart.defaults.scale.display                        = false;
                        Chart.defaults.scale.ticks.beginAtZero              = true;
                        Chart.defaults.global.elements.line.borderWidth     = 2;
                        Chart.defaults.global.elements.point.radius         = 5;
                        Chart.defaults.global.elements.point.hoverRadius    = 7;
                        Chart.defaults.global.tooltips.cornerRadius         = 3;
                        Chart.defaults.global.legend.display                = false;

                        // Chart Containers
                        var chartDashboardLinesCon  = jQuery('.js-chartjs-dashboard-lines');
                        var chartDashboardLinesCon2 = jQuery('.js-chartjs-dashboard-lines2');

                        // Chart Variables
                        var chartDashboardLines, chartDashboardLines2;

                        // Lines Charts Data
                        var chartDashboardLinesData = {
                            labels: ["01","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","05","06","07","08","10"],
                            datasets: [
                                {
                                    label: 'This Week',
                                    fill: true,
                                    backgroundColor: 'rgba(66,165,245,.25)',
                                    borderColor: 'rgba(66,165,245,1)',
                                    pointBackgroundColor: 'rgba(66,165,245,1)',
                                    pointBorderColor: '#fff',
                                    pointHoverBackgroundColor: '#fff',
                                    pointHoverBorderColor: 'rgba(66,165,245,1)',
                                    data: [1,1,1,1,1,1,1125,508,176,56,27,36,31,35,13,46,25,22,22,5,13,7,15,6,7,1,1,1,2,1]                                }
                            ]
                        };

                        var chartDashboardLinesOptions = {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        suggestedMax: 50
                                    }
                                }]
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItems, data) {
                                        return ' ' + tooltipItems.yLabel + ' Visitors';
                                    }
                                }
                            }
                        };

                        var chartDashboardLinesData2 = {
                            labels: ["April"],
                            datasets: [
                                {
                                    label: 'This Week',
                                    fill: true,
                                    backgroundColor: 'rgba(156,204,101,.25)',
                                    borderColor: 'rgba(156,204,101,1)',
                                    pointBackgroundColor: 'rgba(156,204,101,1)',
                                    pointBorderColor: '#fff',
                                    pointHoverBackgroundColor: '#fff',
                                    pointHoverBorderColor: 'rgba(156,204,101,1)',
                                    data: [6]                                }
                            ]
                        };

                        var chartDashboardLinesOptions2 = {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        suggestedMax: 480
                                    }
                                }]
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItems, data) {
                                        return ' ' + tooltipItems.yLabel + ' Visitors';
                                    }
                                }
                            }
                        };

                        // Init Charts
                        if ( chartDashboardLinesCon.length ) {
                            chartDashboardLines  = new Chart(chartDashboardLinesCon, { type: 'line', data: chartDashboardLinesData, options: chartDashboardLinesOptions });
                        }

                        if ( chartDashboardLinesCon2.length ) {
                            chartDashboardLines2 = new Chart(chartDashboardLinesCon2, { type: 'line', data: chartDashboardLinesData2, options: chartDashboardLinesOptions2 });
                        }
                    };

                    return {
                        init: function () {
                            // Init Chart.js Charts
                            initDashboardChartJS();
                        }
                    };
                }();

                // Initialize when page loads
                jQuery(function(){ BePagesDashboard.init(); });
            });
        </script>
    
</body></html>