<div class="page-content-wrapper">
    <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
        <div class="row">
            <div class="col-md-12">
                <div id="content" style="padding: 30px;">
                    <h1>Kelola Usaha</h1>
                    <div style="margin-bottom: 20px;">
                        <nav class="navbar navbar-light navbar-expand-md shadow-sm d-xl-flex justify-content-xl-center align-items-xl-center navigation-clean-search">
                            <div class="container">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation">
                                        <form class="form-inline mr-auto" action="<?= base_url('kelola_usaha') ?>">
                                            <div class="form-group"><label for="search-field"></label>
                                                <input class="form-control search-field" type="search" id="search-field" name="search" style="background-color: #f2f2f2;margin-right: 10px;">
                                                <button class="btn btn-light action-button" type="submit" style="margin-right: 10px;margin-top: 20px;">Search</button>

                                            </div>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="shadow-sm" style="padding: 20px;background-color: #ffffff;">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin : 20px">Filter</button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_usaha') ?>">Semua</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_usaha?q=0') ?>">Jasa</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_usaha?q=1') ?>">Makanan / Minuman</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_usaha?q=2') ?>">Barang</a>
                                <!-- <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_usaha?q=3') ?>">Acara</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_usaha?q=4') ?>">Pekerjaan</a> -->
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_usaha?q=99') ?>">Lainnya</a>



                            </div>
                        </div>

                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>JENIS USAHA</th>
                                            <th>NAMA USAHA</th>
                                            <!-- <th>LAYANAN</th> -->
                                            <th>Owner</th>
                                            <th>USER</th>
                                            <th>FOTO USAHA</th>
                                            <th>KONTAK</th>
                                            <th>DESKRIPSI</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usaha as $row) { ?>
                                            <tr>
                                                <td><?= $row->id_usaha; ?></td>
                                                <td><?php
                                                    $x = $row->kategori;
                                                    if ($x == 0) {
                                                        echo "Jasa";
                                                    } else if ($x == 1) {
                                                        echo "Makanan/Minuman";
                                                    } else if ($x == 2) {
                                                        echo "Barang";
                                                    } else if ($x == 3) {
                                                        echo "Acara";
                                                    } else if ($x == 4) {
                                                        echo "Pekerjaan";
                                                    } else {
                                                        echo "Lainnya";
                                                    }
                                                    ?></td>
                                                </td>
                                                <td><?= $row->nama_usaha; ?></td>
                                                <!-- <td>
                                                    <div><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">Show</a>
                                                        <div class="collapse" id="collapse-3">
                                                            <?= $row->layanan; ?>
                                                        </div>
                                                    </div>
                                                </td> -->
                                                <td><?= $row->owner; ?></td>
                                                <td><a href="<?= base_url('user?i=' . $row->uid) ?>"><?= $row->uid; ?></a></td>
                                                <td><a href="<?= $row->foto_usaha; ?>">Open</a></td>
                                                <td>
                                                    <div><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">Show</a>
                                                        <div class="collapse" id="collapse-1">
                                                            <ul>
                                                                <li>Whatsapp : <?= $row->whatsapp; ?></li>
                                                                <li>Instagram : <?= $row->instagram; ?></li>
                                                                <!-- <li>Kontak : <?= $row->kontak; ?></li>
                                                                <li>Facebook : <?= $row->facebook; ?></li>
                                                                <li>Twitter : <?= $row->twitter; ?></li>
                                                                <li>Telegram : <?= $row->telegram; ?></li> -->

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">Show</a>
                                                        <div class="collapse" id="collapse-2">
                                                            <?= $row->deskripsi; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="<?= base_url('usaha_backoffice?i=' . $row->id_usaha) ?>"><i class="fa fa-edit"></i> </a> </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>