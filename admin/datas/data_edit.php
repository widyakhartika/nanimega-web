<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include ("../inc/connect.php");

?>
<div id="content-wrapper" class="d-flex flex-column bg-gradient-light">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Cari sesuatu..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        SIV NOTIFIKASI
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">Juni 10, 2022</div>
                           Laporan bulan ini sudah siap silahkan donwload!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">Juni 11, 2022</div>
                            Pengelurana biaya perawatan ac teknik elektro sebesar 3 juta
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">Juni 09, 2022</div>
                            Data pengajuan peminjaman barang untuk kegiatan porseni menunggu konfirmasi
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan semua notifikasi</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">4</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        SIV CHAT
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="./assets/img/undraw_profile_1.svg"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">Data barang baru masuk sebanyak 30 unit</div>
                            <div class="small text-gray-500">Ibu Irma · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="./assets/img/undraw_profile_2.svg"
                                alt="...">
                            <div class="status-indicator"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Saya tunggu barang yang masuk di kampus untuk lab jarkom</div>
                            <div class="small text-gray-500">Pak eddy · 23m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="./assets/img/undraw_profile_2.svg"
                                alt="...">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Besok akan ada yang datang untuk meminjam perlengkapan di lab jarkom</div>
                            <div class="small text-gray-500">Pak Irfan . 19m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="./assets/img/undraw_profile_1.svg"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Komputer di bengkel tkj sedang dalam perbaikan</div>
                            <div class="small text-gray-500">Ibu Tantri · 32m</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan Lebih Banyak</a>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                    <img class="img-profile rounded-circle"
                        src="<?php echo $base_url; ?>/assets/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Akun
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Pengaturan
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Aktifitas log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo "./login/logout.php"; ?>"data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Keluar
                    </a>
                </div>
            </li>

        </ul>

    </nav>







    <div class="container-fluid">
                    <center>
                <div class="card w-50 p-4" >
               
                     <div class="card-body">
                     <h5 style="text-align: center;">Edit Data Anime</h5>
                     <br>
                     <?php
                     include "../inc/connect.php";
                     /*
                     $sql = mysqli_query($kon, "SELECT * FROM data_anime WHERE id_anime='$_GET[id]'");
                     $data= mysqli_fetch_array($sql);*/

                     $id_anime = $_GET['id'];
                     $id_anime = base64_decode($id_anime); 

                     $sql_anime    = "SELECT * from data_anime where id_anime='$id_anime'";
                     $result_anime = mysqli_query($kon,$sql_anime);
                     $data_anime   = mysqli_fetch_array($result_anime);
                     ?>
                     <form action="<?php echo $base_url; ?>/datas/action_edit.php" method="POST" enctype="multipart/form-data" >
                     <input type="hidden" name="id_anime" value="<?php echo $id_anime; ?>">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="judul_anime" class="form-control" value="<?php echo $data_anime['judul_anime']; ?>" autofocus required>
                            </div>
                            <div class="col">
                                <input type="number" name="tahun_rilis" class="form-control" value="<?php echo $data_anime['tahun_rilis']; ?>" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="genre" class="form-control" value="<?php echo $data_anime['genre']; ?>"  autofocus required>
                            </div>

                            <div class="form-row">
                            <div class="col">
                                <input type="text" name="link" class="form-control" value="<?php echo $data_anime['link']; ?>"  autofocus required>
                            </div>


                            <div class="col">
                                <input type="number" name="total_episode" class="form-control"value="<?php echo $data_anime['total_episode']; ?>"  autofocus required>
                            </div>

                            <div class="col">
                                <input type="text" name="status_anime" class="form-control" value="<?php echo $data_anime['status_anime']; ?>"  autofocus required>
                            </div>

                            <br>
                            <br>
                            <div class="col-md-12"> 
                            <textarea name="deskripsi"  rows="10"></textarea>
                            </div>
                            <br>
                            <br>
                        
                        </div>
                        <div class="form-group">
                        <label for="foto_anime">Foto Anime Sekarang</label>
                        <br>
                        <br>
                         <image height="95px" width="95px" src="<?php echo $base_url."/assets/image/".$data_anime['foto_anime']; ?>" alt="gambar kosong/bermasalah"> </image>
                              </div>
                                <br>
                             <div class="form-group">
                             <label for="foto_anime">Masukan Foto Anime (jika ada)</label>
                             <br>
							<input class="input-xxlarge" type="file" name="foto_anime" accept="image/png, image/jpeg"  onchange="loadFile(event)" />

                            <img id="foto_anime" height='95px' width='95px'/><h6 style="text-align: right;">Tampilan foto</h6>
                            
                          </div>
                        <br>
                        <button type="submit" name="ajukan" class="btn btn-info">Edit Data</button>
                        <br>
                        
                        </div>
                      
                     

   
                    </form>
                 </div>
                </div>
                </center>
                </div>