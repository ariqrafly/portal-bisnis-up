<div class="page-content-wrapper">
    <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
        <div class="row">
            <div class="col-md-12">
                <div id="content" style="padding: 30px;">
                    <h1>Kelola Laporan</h1>
                    <div style="margin-bottom: 20px;">
                        <nav class="navbar navbar-light navbar-expand-md shadow-sm d-xl-flex justify-content-xl-center align-items-xl-center navigation-clean-search">
                            <div class="container">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation">
                                        <form class="form-inline mr-auto" action="<?= base_url('kelola_laporan') ?>">
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


                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID USAHA</th>
                                            <th>USER ID</th>
                                            <th>COMMENT</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($laporan as $row) { ?>
                                            <tr>
                                                <td><?= $row->id_report; ?></td>
                                                <td><a href="<?= base_url('usaha_backoffice?i=' . $row->id_usaha) ?>"><?= $row->id_usaha; ?></a></td>
                                                <td><a href="<?= base_url('user?i=' . $row->uid) ?>"><?= $row->uid; ?></a></td>
                                                <td><?= $row->comment; ?></td>
                                                <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal1" type="button">Hapus</button>
                                                    <div id="modal1" role="dialog" tabindex="-1" class="modal fade show" style="display: none;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Peringatan</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Apakah anda yakin ingin menghapus ?</p>
                                                                </div>
                                                                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><a href="<?= base_url('kelola_laporan?id=' . $row->id_report) ?>"><button class="btn btn-primary" type="button">Hapus</button></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
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