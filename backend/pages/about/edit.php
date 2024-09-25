<!DOCTYPE html>
<html dir="ltr" lang="en">

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
                                <!-- form header -->
                                <div class="d-md-flex">
                                    <div>
                                    <h4 class="card-title">Input Data</h4>
                                        
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <a href="index.php" class="btn btn-primary text-white">< Kembali</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- form body -->
                                <div class="table-responsive mt-3">
                                    <form action="update.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="nama"
                                                id="nama"
                                                placeholder="Masukan Nama Anda"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="pekerjaan"
                                                id="pekerjaan"
                                                placeholder="Masukan Pekerjaan Anda"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="deskripsi"
                                                id="deskripsi"
                                                placeholder="Masukan Deskripsi Tentang Anda"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto</label>
                                            <input
                                                type="file"
                                                class="form-control"
                                                name="foto"
                                                id="foto"
                                                placeholder="Masukan Foto Anda"
                                            />
                                        </div>
                                        <button
                                            type="submit"
                                            class="btn btn-primary mdi mdi-check form-control mt-4"
                                            name="tombol"
                                            value="ubah"

                                        >
                                            
                                        </button>
                                        
                                    </form>
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