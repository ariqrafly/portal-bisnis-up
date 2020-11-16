<div class="d-flex flex-column" id="content-wrapper">
    <div id="content" style="padding: 30px;">
        <a href="<?= base_url('kelola_user') ?>">Kembali </a>
        <div style="margin-bottom: 20px;background-color: #ffffff;padding: 20px;">

            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Nama</span></div>
                <div class="col"><input type="text" style="width: auto;" value="<?= $user[0]->nama ?>" readonly=""></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Email</span></div>
                <div class="col"><input type="text" style="width: auto;" value="<?= $user[0]->email ?>" readonly=""></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Telp</span></div>
                <div class="col"><input type="text" style="width: auto;" value="<?= $user[0]->telephone ?>" readonly=""></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Foto Profil</span></div>
                <div class="col"><a href="<?= $user[0]->photo_profile ?>">Link</a></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Foto KTM</span></div>
                <div class="col"><a href="<?= $user[0]->upload_ktm ?>">Link</a></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Status</span></div>
                <div class="col">
                    <form action="<?= base_url('user?i=' . $user[0]->userid) ?>" method="GET">
                        <div class="form-check"><input class="form-check-input" name="status" value="0" type="radio" id="formCheck-1" <?php if ($user[0]->is_aktif == 0) {
                                                                                                                                            echo 'checked = "checked"';
                                                                                                                                        } ?>><label class="form-check-label" for="formCheck-1">Belum Disetujui</label></div>
                        <div class="form-check"><input class="form-check-input" name="status" value="1" type="radio" id="formCheck-2" <?php if ($user[0]->is_aktif == 1) {
                                                                                                                                            echo 'checked = "checked"';
                                                                                                                                        } ?>><label class="form-check-label" for="formCheck-2">Disetujui</label></div>
                        <div class="form-check"><input class="form-check-input" name="status" value="2" type="radio" id="formCheck-3" <?php if ($user[0]->is_aktif == 2) {
                                                                                                                                            echo 'checked = "checked"';
                                                                                                                                        } ?>><label class="form-check-label" for="formCheck-3">Suspended</label></div>
                        <input type="hidden" name="i" value="<?= $user[0]->userid ?>">
                        <input type="hidden" name="state" value="change">
                        <button class="btn btn-primary" <?php if (isset($state)) {
                                                            echo 'onload="showSnackbar()"';
                                                        } ?>type="submit" style="margin-right: 10px;margin-top: 20px;">Simpan</button>

                    </form>
                    <a href="<?= base_url('kelola_usaha?uid=' . $user[0]->userid) ?>"><button class="btn btn-info" data-toggle="modal" style="margin-right: 10px;margin-top: 20px;" type="button">Lihat Usaha</button></a>
                    <a href="<?= base_url('kelola_laporan?uid=' . $user[0]->userid) ?>"><button class="btn btn-warning" data-toggle="modal" style="margin-right: 10px;margin-top: 20px;" type="button">Lihat Laporan</button></a>
                    <button class="btn btn-danger" data-toggle="modal" style="margin-right: 10px;margin-top: 20px;" data-target="#modal1" type="button">Hapus</button>
                    <div id="modal1" role="dialog" tabindex="-1" class="modal fade show" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Peringatan</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin menghapus ?</p>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><a href="<?= base_url('kelola_user?id=' . $user[0]->userid) ?>"><button class="btn btn-primary" type="button">Hapus</button></a></div>
                            </div>
                        </div>
                    </div>
                    <div id="snackbar">Some text some message..</div>

                </div>
            </div>
        </div>
    </div>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/snackbar.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>