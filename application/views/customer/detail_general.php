<div class="row" style="margin: 0px;">
    <div class="col d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="margin-bottom: 45px;"><span style="font-size: 40px;font-family: Poppins, sans-serif;font-weight: bold;color: #000000;"><?= $usaha['nama_usaha'];?></span></div>
</div>

<div class="row" style="padding: 32px;padding-top: 0px;padding-bottom: 0px;margin:0px;margin-bottom: 62px;">

    
    
    <div class="col-12 col-md-6" style="margin-bottom: 62px;">
        <p style="font-family: Poppins, sans-serif;"><strong>Deskripsi</strong></p>
        <input readonly placeholder="portalbisnisup" class="border rounded-0" value="<?= $usaha['deskripsi'];?>" name="deskripsi" style="width: 100%;"  >
        <br><br>
        <p style="font-family: Poppins, sans-serif;"><strong>Layanan</strong> :<br></p>
        <input readonly placeholder="portalbisnisup" class="border rounded-0" value="<?= $usaha['layanan'];?>" name="layanan" style="width: 100%;"  >
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

    <div class="col-12 col-md-6 d-flex ">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 d-xl-flex justify-content-center align-items-center" style="margin-left: 0px;">
                <img class="img-fluid" src="<?= $usaha['foto_usaha'];?>" style="width: 300px; margin-bottom: 62px;">
            </div>
            
            <div class="col-12 d-xl-flex justify-content-center align-items-center" style="margin-left: 0px;">
                <span style="font-weight: bold;font-family: Poppins, sans-serif;color: rgb(218,29,29);">Laporkan Usaha</span>
            </div>
            
            <div class="col-12 d-xl-flex justify-content-center align-items-center" style="margin-left: 0px;">
               <span>Alasan Pelaporan</span>
            </div>
            
            <div class="col-12 d-xl-flex justify-content-center align-items-center" style="margin-left: 0px;">
                <form method="post" action="PortalController/lapor_general">
                <input readonly placeholder="portalbisnisup" class="border rounded-0" value="<?= $usaha['nama_usaha'];?>" name="namausaha" style="width: 100%;"  >
                <!-- <input readonly placeholder="portalbisnisup" class="border rounded-0" value="<?= $usaha['id_usaha'];?>" name="deskripsi" style="width: 100%;"  > -->
                <textarea class="form-control" style="padding: 0px;margin-bottom: 10px; height: 200px; width: 300px;" name="lapor"></textarea>
            </div>

            <div class="col-12 d-xl-flex justify-content-center align-items-center" style="margin-left: 0px;">
                <button class="btn btn-primary border rounded" type="submit" style="background-color: rgb(245,55,55);" onClick="alert('Terimakasih! Laporan anda telah terekam. Kami akan mengevaluasi laporan tersebut.')">Laporkan</button>
                </form>
                
            </div>

        </div>
    </div>

   
</div>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>