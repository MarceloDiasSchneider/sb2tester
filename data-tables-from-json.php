<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Extensions datatables -->
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/Bootstrap-4-4.1.1/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/DataTables-1.10.23/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/AutoFill-2.3.5/css/autoFill.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/Buttons-1.6.5/css/buttons.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/ColReorder-1.5.3/css/colReorder.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/FixedColumns-3.3.2/css/fixedColumns.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/FixedHeader-3.1.8/css/fixedHeader.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/KeyTable-2.6.0/css/keyTable.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/Responsive-2.2.7/css/responsive.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/RowGroup-1.1.2/css/rowGroup.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/RowReorder-1.2.7/css/rowReorder.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/Scroller-2.0.3/css/scroller.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/SearchBuilder-1.0.1/css/searchBuilder.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/SearchPanes-1.2.2/css/searchPanes.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/datatables-extensions/Select-1.3.1/css/select.bootstrap4.css"/>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once 'html/sidebar.html'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require_once 'html/topbar.html'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">DataTables from json file</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Extensions datatables -->
    <!-- <script type="text/javascript" src="vendor/datatables-extensions/jQuery-3.3.1/jquery-3.3.1.js"></script> -->
    <script type="text/javascript" src="vendor/datatables-extensions/Bootstrap-4-4.1.1/js/bootstrap.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/JSZip-2.5.0/jszip.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/pdfmake-0.1.36/pdfmake.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/DataTables-1.10.23/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/DataTables-1.10.23/js/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/AutoFill-2.3.5/js/dataTables.autoFill.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/AutoFill-2.3.5/js/autoFill.bootstrap4.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Buttons-1.6.5/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Buttons-1.6.5/js/buttons.bootstrap4.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Buttons-1.6.5/js/buttons.colVis.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Buttons-1.6.5/js/buttons.flash.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Buttons-1.6.5/js/buttons.html5.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Buttons-1.6.5/js/buttons.print.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/ColReorder-1.5.3/js/dataTables.colReorder.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/FixedColumns-3.3.2/js/dataTables.fixedColumns.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/FixedHeader-3.1.8/js/dataTables.fixedHeader.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/KeyTable-2.6.0/js/dataTables.keyTable.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Responsive-2.2.7/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/RowGroup-1.1.2/js/dataTables.rowGroup.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/RowReorder-1.2.7/js/dataTables.rowReorder.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Scroller-2.0.3/js/dataTables.scroller.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/SearchBuilder-1.0.1/js/dataTables.searchBuilder.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/SearchBuilder-1.0.1/js/searchBuilder.bootstrap4.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/SearchPanes-1.2.2/js/dataTables.searchPanes.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/SearchPanes-1.2.2/js/searchPanes.bootstrap4.js"></script>
    <script type="text/javascript" src="vendor/datatables-extensions/Select-1.3.1/js/dataTables.select.js"></script>

    <!-- Initiate datatables from json file -->
    <script type="text/javascript" src="js/script-datatables/load-data-from-json.js"></script>

</body>

</html>