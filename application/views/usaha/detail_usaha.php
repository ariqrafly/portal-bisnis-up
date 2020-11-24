<div class="row" style="margin: 0px;">
    <div class="col d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="margin-bottom: 45px;"><span style="font-size: 40px;font-family: Poppins, sans-serif;font-weight: bold;color: #000000;">Packetin</span></div>
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
                <div class="col d-xl-flex justify-content-center align-items-center justify-content-xl-center">
                    <button class="btn btn-primary border rounded d-flex justify-content-center" type="submit" style="width: 133px;background-color: rgb(238,238,238);color: rgb(0,0,0);font-family: Poppins, sans-serif;font-weight: bold;margin-top: 29px;">Simpan</button>
                </div>

                <div class="col d-xl-flex justify-content-center align-items-center justify-content-xl-center">
                    <a href="<?= base_url('dasbor/hapus');?>"><button class="btn btn-primary border rounded d-flex justify-content-center" type="button" style="background-color: rgb(238,238,238);color: rgb(0,0,0);font-family: Poppins, sans-serif;font-weight: bold;margin-top: 29px;">Hapus Usaha</button></a>
                </div>
            </div>

        </div>
    </div>
    <div class="col-12 col-md-6">
        <p style="font-family: Poppins, sans-serif;"><strong>Deskripsi</strong></p><textarea name="deskripsi" class="border rounded-0" style="width: 100%;"><?= $usaha['deskripsi'];?></textarea>
        <!-- <p style="font-family: Poppins, sans-serif;"><strong>Layanan</strong> :<br></p><textarea class="border rounded-0" name="layanan" style="width: 100%;"><?= $usaha['layanan'];?></textarea> -->
        <p style="font-family: Poppins, sans-serif;"><strong>Layanan</strong> :<br></p>
        <select class="border rounded-0" name="layanan" placeholder="Jenis Usaha" style="width: 100%;" required'>
            <option value='Other'><?= $usaha['layanan'];?></option>
            <option value='Other'>Other</option>
            <option value='Jasa'>Jasa</option>
            <option value='Makanan/Minuman'>Jual-beli Makanan/Minuman</option>
            <option value='Barang'>Jual-beli Barang</option>
        </select>
        <br><br>
        <!-- <p style="font-family: Poppins, sans-serif;"><strong>Media Sosial </strong>:<br></p>
        <p style="font-family: Poppins, sans-serif;"><strong>Facebook </strong>:<br></p>
        <input class="border rounded-0" value="<?= $usaha['facebook'];?>" name="facebook" style="width: 100%;"> -->
        <!-- <p style="font-family: Poppins, sans-serif;"><strong>Twitter </strong>:<br></p>
        <input class="border rounded-0" value="<?= $usaha['twitter'];?>" name="twitter" style="width: 100%;"> -->
        <!-- <p style="font-family: Poppins, sans-serif;"><strong>Telegram </strong>:<br></p>
        <input class="border rounded-0" value="<?= $usaha['telegram'];?>" name="telegram" style="width: 100%;"> -->
        <p style="font-family: Poppins, sans-serif;"><strong>Instagram </strong>:<br></p>
        <input placeholder="portalbisnisup" class="border rounded-0" value="<?= $usaha['instagram'];?>" name="instagram" style="width: 100%;">
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Whatsapp </strong>:<br></p>
        <input placeholder="08XXXXXXXX" class="border rounded-0" value="<?= $usaha['whatsapp'];?>" name="whatsapp" style="width: 100%;">
        <br><br>
        <!-- <p style="font-family: Poppins, sans-serif;"><strong>Waktu Kerja:&nbsp;</strong><br></p>
        <input class="border rounded-0" placeholder="Jam kerja" name="buka" style="width: 100%;" value="<?= $usaha['waktu_kerja'];?>"  type="text"> -->
        <p style="font-family: Poppins, sans-serif;"><strong>Lokasi:&nbsp;</strong><br></p>
        <input placeholder="Jalan X" class="border rounded-0" name="lokasi" style="width: 100%;" value="<?= $usaha['lokasi'];?>" type="text">
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Pemilik:&nbsp;</strong><br></p>
        <input placeholder="Nama Pemiliki" class="border rounded-0" name="pemilik" style="width: 100%;" type="text" value="<?= $usaha['owner'];?>">
        <!-- <input name="telp" placeholder="Nomor Telepon" class="border rounded-0" type="number" value="<?= $usaha['kontak'];?>"> -->


    </div>

   
</div>

</form>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>