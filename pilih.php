<script type="text/javascript" src="jquery.js"></script>
<?php
$rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>
<div class="page-header">
    <h1>Pemilihan Ketua & Wakil Ketua Osis</h1>
</div>
<div class="row">
    <?php foreach($rows as $row):?>
    <div class="col-md-4">        
        <div class="thumbnail">
            <img src="gambar/<?=$row->gambar?>" />
            <div class="card-body">
            <center><h5 class="card-title">Biodata & Visi Misi</h5></center>
            <p class="card-text"><?=$row->keterangan?> </p>
            </div>
        </div>
        <h3 class="text-center"><?=$row->nama_pencalon?></h3>
        <a class="btn btn-block btn-primary" href="aksi.php?act=pilih&ID=<?=$row->id_pencalon?>" onclick="return confirm('<?="Yakin memilih $row->nama_pencalon"?>')"><span class="glyphicon glyphicon-check"></span> Pilih</a>
    </div>
    <?php endforeach?>            
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".btn btn-block btn-primary").click(function(){
			
			$.ajax({
				type: 'POST',
				url: "aksi.php",
				success: function() {
					$.load("hasil_voting.php");
				}
			});
		});
	});
	</script>
<!--<div class="form-group">
<a class="btn btn-default" href="cetak.php?m=pilih.php&a=<?=$_GET['q']?>" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
</div>-->
