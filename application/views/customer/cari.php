<div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-2" style="margin-top:5%; padding-left: 0px;padding-right: 0px;">
                <!-- <div class="row" style="margin: 9px;">
                    <div class="col-12" style="font-family: Poppins, sans-serif;"><label>Urutkan</label>
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);width: 159px;color: rgb(0,0,0);">Ulasan </button>
                            <div role="menu" class="dropdown-menu"><a role="presentation" class="dropdown-item" href="#">First Item</a><a role="presentation" class="dropdown-item" href="#">Second Item</a><a role="presentation" class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row" style="margin: 9px;">
                
                    <div class="col-12" style="font-family: Poppins, sans-serif;"><label>Kategori Usaha</label>
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);width: 159px;color: rgb(0,0,0);">Jasa</button>
                            <div role="menu" class="dropdown-menu"><a role="presentation" class="dropdown-item" href="#">First Item</a><a role="presentation" class="dropdown-item" href="#">Second Item</a><a role="presentation" class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </div>
                </div> -->
                <div class="row" style="margin: 9px;">
                    <div class="col-12" style="font-family: Poppins, sans-serif;"><label>Kategori Usaha</label>
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);width: 159px;color: rgb(0,0,0);">Jasa</button>
                            <div role="menu" class="dropdown-menu"><a role="presentation" class="dropdown-item" href="#">First Item</a><a role="presentation" class="dropdown-item" href="#">Second Item</a><a role="presentation" class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row" style="margin: 9px;">
                    <div class="col-12" style="font-family: Poppins, sans-serif;"><label>Rating</label>
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle border-dark" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);width: 159px;color: rgb(0,0,0);">4</button>
                            <div role="menu" class="dropdown-menu"><a role="presentation" class="dropdown-item" href="#">First Item</a><a role="presentation" class="dropdown-item" href="#">Second Item</a><a role="presentation" class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-8 col-lg-10" style="padding: 0px;padding-right: 0;height: auto;">
                <div class="row">
                    <div class="col">
                    <div class="form-row">
                        <div class="col d-flex d-lg-flex justify-content-center justify-content-lg-center" style="padding: 0px;margin-bottom: 20px;"><span class="text-center" style="font-size: 20px;color: #ff4141;font-weight: bold;font-family: Poppins, sans-serif;font-style: normal;">Cari Usaha</span></div>
                    </div>
                        <div class="row">
                            <div class="col d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="margin: 24px;"><input type="search" class="border rounded" placeholder="Cari Nama Usaha" style="padding: 7px;width: 80%;" /><a class="active d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" href="#" style="color: #ffffff;margin-left: 30px;width: 56px;height: 37px;background-color: #ff4141;"><i class="fa fa-search" style="font-size: 16px;"></i></a></div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters justify-content-center features" style="font-family: Poppins, sans-serif;margin-top: 20px;max-height: 353px;min-height: 353px;">
                    
                    <?php $count = 0; ?>
                    <?php foreach ($usaha as $row) : ?>

                    <div class="col-6 col-sm-4 col-md-5 col-lg-4 col-xl-2 d-xl-flex justify-content-xl-center align-items-xl-center item" style="margin-top: 22px;max-width: 100%;padding: 10px;">
                        
                    <?php $count+=1?>
 
                    <!-- <a href="#">
                         <div class="border rounded-0 shadow-sm box" style="height: 331px;min-height: 331px;max-height: 331px;">
                             <div class="row">
                                 <div class="col d-flex justify-content-center align-items-center"><img src="assets/img/Nasi Goreng 1.png" style="padding: 15px;width: 150px;height: 150px;min-width: 150px;max-width: 150px;min-height: 150px;max-height: 150px;" /></div>
                             </div>
                             <hr />
                             <div class="row" style="margin-top: 12px;margin-bottom: 19px;">
                                 <div class="col text-center" style="padding: 19px;"><span class="text-break" style="font-size: 20px;color: rgb(0,0,0);">Nasi goreng bang jago pedas </span></div>
                             </div>
                         </div>
                     </a> -->
                       <a href="<?= base_url('edit_usaha?iu=' . $row->id_usaha) ?>">
                            <div class="border rounded-0 shadow-sm box" style="min-height: 250px;max-height: 350px;">
                                <div class="row">
                                    <div class="col d-flex justify-content-center align-items-center"><img src="<?= $row->foto_usaha?>" style="padding: 15px;width: 150px;height: 150px;min-width: 150px;max-width: 150px;min-height: 150px;max-height: 150px;" /></div>
                                </div>
                                <hr />
                                <div class="row" style="margin-top: 5px;margin-bottom: 5px;">
                                    <div class="col text-center" style="padding: 5px;">
                                    <span class="text-break" style="font-size: 20px;color: rgb(0,0,0);"><?= $row->nama_usaha;?> <br> </span>  
                                    <!-- <span class="text-break" style="font-size: 12px;color: rgb(0,0,0);"><?= $row->layanan;?> <br> </span>   -->
                                    </div> 
                                </div>
                                 
                            </div>
                        </a>
                    </div>  
                    
                    <?php endforeach; ?>
                    <?php if ($count%3==0){
                        echo "</div><br>";
                        }else{
                            echo "</div>";
                        }?>
                    
                </div>

            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>