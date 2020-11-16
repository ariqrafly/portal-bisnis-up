<div class="page-content-wrapper">
    <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
        <div class="row">
            <div class="col-md-12">
                <div id="content" style="padding: 30px;">
                    <h1>Kelola User</h1>
                    <div style="margin-bottom: 20px;">
                        <nav class="navbar navbar-light navbar-expand-md shadow-sm d-xl-flex justify-content-xl-center align-items-xl-center navigation-clean-search">
                            <div class="container">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation">
                                        <form class="form-inline mr-auto" action="<?= base_url('kelola_user') ?>">
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
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_user') ?>">Semua</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_user?q=0') ?>">Belum disetujui</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_user?q=1') ?>">Disetujui</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('kelola_user?q=2') ?>">Suspended</a>
                            </div>
                        </div>

                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAMA</th>
                                            <th>EMAIL</th>
                                            <th>TELEPON</th>
                                            <th>FOTO PROFIL</th>
                                            <th>FOTO KTM</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $row) { ?>
                                            <tr>
                                                <td><?= $row->userid; ?></td>
                                                <td><?= $row->nama; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->telephone; ?></td>
                                                <td><a href="<?= $row->photo_profile; ?>">Open</a></td>
                                                <td><a href="<?= $row->upload_ktm; ?>">Open</a></td>
                                                <td><?php
                                                    if ($row->is_aktif == 0) {
                                                        echo "Belum Di Setujui";
                                                    } else if ($row->is_aktif == 1) {
                                                        echo "Disetujui";
                                                    } else {
                                                        echo "Suspended";
                                                    }
                                                    ?></td>
                                                <td><a href="<?= base_url('user?i=' . $row->userid) ?>"><i class="fa fa-edit"></i> </a> </td>
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