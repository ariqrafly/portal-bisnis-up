<div class="container ">
    <div class="row no-gutters justify-content-center features" style="font-family: Poppins, sans-serif;margin-top: 20px;max-height: 353px;min-height: 353px;">
        <?php $count = 0; ?>
        <?php foreach ($usaha as $row) : ?>
        <div class="col-6 col-sm-4 col-md-5 col-lg-4 col-xl-2 d-xl-flex justify-content-xl-center align-items-xl-center item" style="margin-top: 22px;max-width: 100%;padding: 10px;">
        
        <?php $count+=1?>

            <a href="<?= base_url('edit_usaha?iu=' . $row->id_usaha) ?>">
                <!-- <div class="border rounded-0 shadow-sm box" style="height: 250px;min-height: 250px;max-height: 250px;"> -->
                <div class="border rounded-0 shadow-sm box" style="min-height: 250px;max-height: 350px;">
                    <div class="row">
                        <div class="col d-flex justify-content-center align-items-center"><img src="<?= $row->foto_usaha?>" style="padding: 15px;width: 150px;height: 150px;min-width: 150px;max-width: 150px;min-height: 150px;max-height: 150px;" /></div>
                    </div>
                    <hr />
                    <div class="row" style="margin-top: 12px;margin-bottom: 19px;">
                        <div class="col text-center" style="padding: 10px;"><span class="text-break" style="font-size: 20px;color: rgb(0,0,0);"><?= $row->nama_usaha;?></span></div>
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


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
