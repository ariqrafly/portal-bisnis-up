<div class="row" style="margin: 0px;">
    <div class="col d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="margin-bottom: 45px;"><span style="font-size: 40px;font-family: Poppins, sans-serif;font-weight: bold;color: #000000;"><?= $usaha['nama_usaha'];?></span></div>
</div>
<form method="post" action="dasbor/edit">
<div class="row" style="padding: 32px;padding-top: 0px;padding-bottom: 0px;margin:0px;margin-bottom: 62px;">
    <div class="col-12 col-md-6 d-flex ">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 d-xl-flex justify-content-center align-items-center" style="margin-left: 80px;"><img class="img-fluid" src="<?= $usaha['foto_usaha'];?>" style="width: 300px;"></div>
            <br><br>
            <div class="col-12 d-xl-flex justify-content-xl-center align-items-xl-center">
                <!-- <p style="font-size: 20px;margin-bottom: 0px;"><strong>Waktu Kerja:&nbsp;</strong><br></p><input placeholder="Buka" name="buka" value="<?= $usaha['waktu_kerja'];?>" class="border rounded-0" type="text"> -->
            </div>
            <br><br>
            <div class="col-12 d-xl-flex justify-content-xl-center align-items-xl-center">
                <!-- <p style="font-size: 20px;margin-bottom: 0px;"><strong>Lokasi:&nbsp;</strong><br></p><input placeholder="Lokasi " class="border rounded-0" name="lokasi" value="<?= $usaha['lokasi'];?>" type="text"> -->
            </div>
            <br><br>
            <div class="col-12 d-xl-flex justify-content-xl-center align-items-xl-center">
                <!-- <p style="font-size: 20px;margin-bottom: 0px;"><strong>Pemilik:&nbsp;</strong><br></p><input placeholder="Nama Pemiliki" class="border rounded-0" name="pemilik" type="text" value="<?= $usaha['owner'];?>"><input name="telp" placeholder="Nomor Telepon" class="border rounded-0" type="number" value="<?= $usaha['kontak'];?>"> -->
            </div>

            <div class="row" style="margin:0px">
                <!-- <div class="col d-xl-flex justify-content-center align-items-center justify-content-xl-center">
                    <button class="btn btn-primary border rounded d-flex justify-content-center" type="submit" style="width: 133px;background-color: rgb(238,238,238);color: rgb(0,0,0);font-family: Poppins, sans-serif;font-weight: bold;margin-top: 29px;">Simpan</button>
                </div>

                <div class="col d-xl-flex justify-content-center align-items-center justify-content-xl-center">
                    <a href="<?= base_url('dasbor/hapus');?>"><button class="btn btn-primary border rounded d-flex justify-content-center" type="button" style="background-color: rgb(238,238,238);color: rgb(0,0,0);font-family: Poppins, sans-serif;font-weight: bold;margin-top: 29px;">Hapus Usaha</button></a>
                </div> -->

                <div class="col d-xl-flex justify-content-center align-items-center justify-content-xl-center">
                    <a href="<?= base_url('PortalController/lapor');?>"><button class="btn btn-primary border rounded d-flex justify-content-center" type="button" style="background-color: rgb(238,238,238);color: rgb(0,0,0);font-family: Poppins, sans-serif;font-weight: bold;margin-top: 29px;">Laporkan Usaha</button></a>
                </div>

            </div>

        </div>
    </div>
    <div class="col-12 col-md-6">
        <p style="font-family: Poppins, sans-serif;"><strong>Deskripsi</strong></p>
        <input readonly placeholder="portalbisnisup" class="border rounded-0" value="<?= $usaha['deskripsi'];?>" name="instagram" style="width: 100%;"  >
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Layanan</strong> :<br></p>
        <input readonly placeholder="portalbisnisup" class="border rounded-0" value="<?= $usaha['layanan'];?>" name="instagram" style="width: 100%;"  >
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Instagram </strong>:<br></p>
        <input readonly placeholder="-" class="border rounded-0" value="<?= $usaha['instagram'];?>" name="instagram" style="width: 100%;"  >
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Whatsapp </strong>:<br></p>
        <input readonly placeholder="-" class="border rounded-0" value="<?= $usaha['whatsapp'];?>" name="whatsapp" style="width: 100%;">
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Lokasi:&nbsp;</strong><br></p>
        <input readonly placeholder="-" class="border rounded-0" name="lokasi" style="width: 100%;" value="<?= $usaha['lokasi'];?>" type="text">
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Pemilik:&nbsp;</strong><br></p>
        <input readonly placeholder="-" class="border rounded-0" name="pemilik" style="width: 100%;" type="text" value="<?= $usaha['owner'];?>">
        <!-- <input name="telp" placeholder="Nomor Telepon" class="border rounded-0" type="number" value="<?= $usaha['kontak'];?>"> -->


    </div>

   
</div>

</form>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>