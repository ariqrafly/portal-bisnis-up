<div class="row" style="font-family: Poppins, sans-serif;padding: 58px;padding-top: 0px;padding-bottom: 0px;padding-right: 58px;height: 408px;">
    <div class="col-12">
        <form method="post" action="dasbor/ajukan" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col d-flex d-lg-flex justify-content-center justify-content-lg-center" style="padding: 0px;margin-bottom: 20px;"><span class="text-center" style="font-size: 20px;color: #ff4141;font-weight: bold;font-family: Poppins, sans-serif;font-style: normal;">Ajukan Usaha</span></div>
            </div>
            <div class="form-row d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input type="text" name="namaUsaha" class="form-control" placeholder="Nama Usaha" required /></div>
            </div>
            <div class="form-row d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><textarea class="border rounded form-control" name="deskripsi" placeholder="Deskripsi Usaha" style="padding: 7px;" required></textarea></div>
            </div>
            <div class="form-row d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><textarea class="border rounded form-control" name="layanan" placeholder="Layanan" style="padding: 7px;" required></textarea></div>
            </div>

            <div class="form-row d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><span>Foto Usaha</span></div>
            </div>
            <div class="form-row d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
                <div class="col-12 col-lg-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center" style="padding: 0px;"><input type="file" name="foto" value="save" required="" accept="image/*" /></div>
            </div>
            <div class="form-row">
                <div class="col d-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-lg-center justify-content-xl-center align-items-xl-center"><input type="submit" name="ajukan" value="Ajukan Usaha" class="btn btn-primary border rounded" role="button" style="width: 121px;background-color: rgb(255,65,65);" ></div>
            </div>
        </form>
    </div>
</div>
</body>