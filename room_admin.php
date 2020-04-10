
<html class="no-focus" lang="en"><!--<![endif]--><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Room list</title>

        <meta name="description" content="">
        <meta name="author" content="M Fikri Setiadi">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="./assets/images/favicon.png">

        <!-- END Icons -->
        <link rel="stylesheet" href="./assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/dropify.min.css">
        <link rel="stylesheet" id="css-main" href="./assets/css/codebase.min.css">

       

    <style>.cke{visibility:hidden;}</style></head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="sidebar-o side-scroll main-content-boxed side-trans-enabled page-header-fixed">
            

            <!-- Sidebar -->
         
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
                                <i class="fa fa-angle-down ml-5"></i>
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
            <!-- END Header -->            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container" style="min-height: 692px;">
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Rooms and Suite</h3>
                                    <div class="block-options">
                                        <a href="" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div id="mytable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="mytable_length"><label>Show <select name="mytable_length" aria-controls="mytable" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="mytable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="mytable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="mytable" class="table table-striped dataTable no-footer" role="grid" aria-describedby="mytable_info">
                                        <thead>
                                            <tr role="row"><th style="width: 90px; text-align: left;" class="sorting_asc" tabindex="0" aria-controls="mytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th><th class="sorting" tabindex="0" aria-controls="mytable" rowspan="1" colspan="1" style="width: 398.967px;" aria-label="Images: activate to sort column ascending">Images</th><th class="sorting" tabindex="0" aria-controls="mytable" rowspan="1" colspan="1" style="width: 180.583px;" aria-label="Room Type: activate to sort column ascending">Room Type</th><th class="sorting" tabindex="0" aria-controls="mytable" rowspan="1" colspan="1" style="width: 206.45px;" aria-label="Publish Rate: activate to sort column ascending">Publish Rate</th><th style="text-align: center; width: 60px;" class="sorting" tabindex="0" aria-controls="mytable" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending">Aksi</th></tr>
                                        </thead>
                                        <tbody>
                                            </tr><tr role="row" class="odd">
                                                <td style="vertical-align: middle;" class="sorting_1">0</td>
                                                <td><img src="" width="200px"></td>
                                                <td style="vertical-align: middle;"><!-- tipe kamar --></td>
                                                <td style="vertical-align: middle;"><!-- price --></td>
                                                <td style="width: 90px;text-align: center;vertical-align: middle;">
                                                    <a href="<!-- edit -->" class="btn btn-sm btn-secondary btn-circle"><span class="fa fa-pencil"></span></a>
                                                    <a href="<!-- hapus -->" class="btn btn-sm btn-secondary btn-circle btn-hapus" ><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="mytable_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="mytable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="mytable_previous"><a href="#" aria-controls="mytable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="mytable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="mytable_next"><a href="#" aria-controls="mytable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                 
                </div>
                <!-- END Page Content -->
            </main>
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

        <!-- Modal Hapus -->
        <form action="http://localhost:8080/mhotel/admin/room/hapus_room" method="post">
        <div class="modal" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Info</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Anda yakin mau menghapus room ini?</p>
                            <input type="hidden" name="kode" id="kode" required="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-square" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary btn-square">Ya</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- END Normal Modal -->


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
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#mytable').DataTable();

                $('.dropify').dropify({ //overate input type file
                    messages: {
                        default: 'Drag atau drop untuk memilih gambar',
                        replace: 'Ganti',
                        remove:  'Hapus',
                        error:   'error'
                    }
                });

                //Show Modal Add New
                $('#btn-add-new').on('click',function(){ 
                    $('#ModalAddNew').modal('show');
                });

                //Show Konfirmasi modal hapus record
                $('.btn-hapus').on('click',function(){
                    var id=$(this).data('id');
                    var gambar=$(this).data('gambar');
                    $('#Modalhapus').modal('show');
                    $('[name="kode"]').val(id);
                    $('[name="gambar"]').val(gambar);
                });  

            });
        </script>

    
</body></html>