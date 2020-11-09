<div class="row" style="font-family: Poppins, sans-serif;padding: 58px;padding-top: 0px;padding-bottom: 0px;padding-right: 58px;height: 408px;">
    <div class="col-12">
         <form method="post" action="<?= base_url('masuk') ?>">
            <div class="form-row">
                <div class="col d-flex d-lg-flex justify-content-center justify-content-lg-center" style="padding: 0px;margin-bottom: 20px;"><span class="text-center" style="font-size: 20px;color: #ff4141;font-weight: bold;font-family: Poppins, sans-serif;font-style: normal;">Daftar</span></div>
            </div>
            <div class="form-row d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input class="form-control" type="text" name="name" placeholder="Nama" ></div>
            </div>
            <div class="form-row d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input class="border rounded form-control" name="email" type="email"  placeholder="Email" style="padding: 7px;" ></div>
            </div>
            <div class="form-row d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input class="form-control"  type="text" name="notelp" placeholder="No-Telp" ></div>
            </div>
            <div class="form-row d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input class="border rounded form-control" type="password" name="sandi" placeholder="Kata Sandi"  style="padding: 7px;" ></div>
            </div>
            <div class="form-row d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input class="border rounded form-control" type="password" name="konfirmasi" placeholder="Konfirmasi Kata Sandi"  style="padding: 7px;" ></div>
            </div>
            <div class="form-row d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><span>Foto KTM</span></div>
            </div>
            <div class="form-row d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input name="ktm" type="file"  accept="image/*"></div>
            </div>
            <div class="form-row">
                <div class="col d-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-lg-center justify-content-xl-center align-items-xl-center">
                    <button class="btn btn-primary border rounded" type="submit" style="width: 121px;background-color: rgb(255,65,65);" href="pencarian%20usaha.html">Daftar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>