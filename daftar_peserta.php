<?php
$rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 

?>
<div class="page-header">
    <h1>Daftar Peserta</h1>
</div>
<div class="row">
    <?php foreach($rows as $row):?>
    <div class="col-md-4"> <b> </b>
        <div class="thumbnail">
            <img src="gambar/<?=$row->gambar?>" />
            <div class="card-body">
            <h5 class="card-title">Visi Misi</h5>
            <p class="card-text"><?=$row->keterangan?> </p>
            </div>
        </div>
        
        <h3 class="text-center"><?=$row->nama_pencalon?></h3>        
    </div>
    
    <?php endforeach?>            
</div>