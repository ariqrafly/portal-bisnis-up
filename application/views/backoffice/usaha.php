<div class="d-flex flex-column" id="content-wrapper">
    <div id="content" style="padding: 30px;">
        <a href="<?= base_url('kelola_usaha') ?>">Kembali </a>
        <div style="margin-bottom: 20px;background-color: #ffffff;padding: 20px;">

            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Nama</span></div>
                <div class="col"><input type="text" style="width: auto;" value="<?= $usaha[0]->nama_usaha ?>" readonly=""></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Owner</span></div>
                <div class="col"><input type="text" style="width: auto;" value="<?= $usaha[0]->owner ?>" readonly=""></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>User</span></div>
                <div class="col"><a href="<?= base_url('user?i=' . $usaha[0]->uid) ?>"><?= $usaha[0]->uid; ?></a></div>
            </div>

            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Foto</span></div>
                <div class="col"><a href="<?= $usaha[0]->foto_usaha ?>">Link</a></div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Lokasi</span></div>
                <div class="col"><textarea style="width: 100%;" readonly=""><?= $usaha[0]->lokasi ?></textarea></div>
            </div>
            <!-- <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Waktu Kerja</span></div>
                <div class="col"><input type="text" style="width: auto;" value="<?= $usaha[0]->waktu_kerja ?>" readonly=""></div>
            </div> -->

            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Kontak</span></div>
                <div class="col">
                    <div><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">Show</a>
                        <div class="collapse" id="collapse-1">
                            <ul>
                                <li>Whatsapp : <?= $usaha[0]->whatsapp; ?></li>
                                <li>Instagram : <?= $usaha[0]->instagram; ?></li>
                                <!-- <li>Kontak : <?= $usaha[0]->kontak; ?></li>
                                <li>Facebook : <?= $usaha[0]->facebook; ?></li>
                                <li>Twitter : <?= $usaha[0]->twitter; ?></li>
                                <li>Telegram : <?= $usaha[0]->telegram; ?></li> -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Kategori Usaha</span></div>
                <div class="col">
                    <!-- <div><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">Show</a>
                        <div class="collapse" id="collapse-3"> -->
                            <?= $usaha[0]->layanan; ?>
                        <!-- </div>
                    </div> -->
                </div>
            </div>

            <div class="row" style="padding: 10px;margin-bottom: 10px;">
                <div class="col-3"><span>Deskripsi</span></div>
                <div class="col">
                    <div><a class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">Show</a>
                        <div class="collapse" id="collapse-2">
                            <?= $usaha[0]->deskripsi; ?>
                        </div>
                    </div>
                    <a href="<?= base_url('kelola_laporan?id_usaha=' . $usaha[0]->id_usaha) ?>"><button class="btn btn-warning" data-toggle="modal" style="margin-right: 10px;margin-top: 20px;" type="button">Lihat Laporan</button></a>
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
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><a href="<?= base_url('kelola_usaha?id=' . $usaha[0]->id_usaha) ?>"><button class="btn btn-primary" type="button">Hapus</button></a></div>
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