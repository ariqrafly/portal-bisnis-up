<div class="row">
    <div class="col d-flex justify-content-center align-items-center"><span style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 20px;">Profil</span></div>
</div>
<hr>



<div class="row">
    <div class="col">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-start justify-content-sm-center align-items-sm-start justify-content-md-end align-items-md-start justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-start"><img class="img-fluid border rounded border-dark d-lg-flex d-xl-flex justify-content-lg-end justify-content-xl-end" src="<?= $users['upload_ktm']; ?>" style="width: 250px;max-width: 250px;"></div>
            <div class="col offset-0">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center justify-content-md-start justify-content-lg-center justify-content-xl-center">
                        <div class="text-truncate border rounded-circle d-flex justify-content-center align-items-center" style="width: 150px;height: 150px;"><img src="<?= $users['photo_profile']; ?>" style="width: 200px;"></div>
                    </div>
                </div>
                <form method="post" action="profile/update" enctype="multipart/form-data">

                <div class="row">
                    <div class="col d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xl-center">
                    <span>Ubah Foto Profil</span></div>
                </div>
                <div class="row">
                    <div class="col d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center justify-content-xl-center"></br></br><input style="padding-left: 80px;padding-right: 10px;" name="ganti" type="file" accept="image/*" value="save"></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                    <div class="form-row d-flex d-sm-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center">
                        <div class="col-9 col-sm-9 col-md-5"><label>Nama</label><input class="form-control" type="text" value="<?= $users['nama'];?>" name="nama"></div>
                    </div>
                    <div class="form-row d-flex d-sm-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center">
                        <div class="col-9 col-sm-9 col-md-5"><label>Email</label><input class="form-control" type="email" name="email" value="<?= $users['email'];?>"></div>
                    </div>
                    <div class="form-row d-flex d-sm-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center">
                        <div class="col-9 col-sm-9 col-md-5"><label>No Telp</label><input class="form-control" type="tel" name="telp" value="<?= $users['telephone'];?>"></div>
                    </div>
                    <div class="row" style="margin-top: 44px;margin-bottom: 165px;">
                        <div class="col d-flex justify-content-center align-items-center"><input class="btn btn-primary border rounded" role="button" value="upload"  type="submit" placeholder="Simpan" style="width: 121px;background-color: rgb(124,242,52);"></div>
                        <div class="col d-flex justify-content-center align-items-center"><a class="btn btn-primary border rounded" role="button" style="width: 154px;background-color: rgb(255,65,65);" href="<?php echo base_url('changepassword'); ?>">Ubah Kata Sandi</a></div>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>