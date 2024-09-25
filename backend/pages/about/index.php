<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include "../../app.php" ?>
<head>
    <?php include "../../components/head.php" ?>
</head>

<body>
    <?php include "../../components/preloader.php" ?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <?php include "../../components/topheader.php" ?>
        <?php include "../../components/leftsiderbar.php" ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold"> My Profile</h1> 
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <!-- table header -->
                                <div class="d-md-flex">
                                    <div>
                                    <h4 class="card-title">Data List</h4>
                                        <h5 class="card-subtitle">Information About Me</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <a href="edit.php" class="btn btn-primary text-white">Edit Data ></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- table body -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                        <?php include "../../actions/about/show.php" ?>
                                        <tbody>
                                            <tr>
                                                <th style="width: 100px;">Nama</th>
                                                <th style="width: 10px;">:</th>
                                                <td><?php $about->nama ?></td>
                                            </tr>
                                            <tr>
                                                <th>Foto</th>
                                                <th>:</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Pekerjaan</th>
                                                <th>:</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <th>:</th>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           <?php include "../../components/footer.php" ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <?php include "../../components/script.php" ?>
</body>

</html>