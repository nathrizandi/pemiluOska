
<link href="assets/css/journal-bootstrap.min.css" rel="stylesheet"/>
<link rel="icon" href="assets/images/1.jpg"/>
    <link rel="canonical" href="#" />    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
    <meta http-equiv="refresh" content="3"/>  
<div class="page-header">
    <h1><center>Hasil Voting </center> <center>    
</div>

<?php
    $rows = $db->get_results("SELECT c.*, COUNT(p.ID) as total FROM tb_pencalon c LEFT JOIN tb_pilih p ON p.id_pencalon=c.id_pencalon GROUP BY c.id_pencalon");
    foreach($rows as $row) {
        $categories[] = $row->nama_pencalon;
        $data[] = $row->total * 1;
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php foreach($rows as $row):?>
            <div class="col-md-4"> <b> </b>
                <div class="thumbnail">
                    <img src="gambar/<?=$row->gambar?>" />
                    <div class="card-body">
                    <h5 class="card-title">Calon Pasangan</h5>
                    <p class="card-text"><?=$row->nama_pencalon?></p>
                    </div>
                </div>
                
                <h3 class="text-center"><?=number_format($row->total)?> </h3>        
            </div>
            
            <?php endforeach?>   
        </div>         
    </div>
</div>
<script>
setTimeout(function() {
  location.reload();
}, 3000);
</script>