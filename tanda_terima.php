<?php 
include 'navbar2.php';
?>

</body>
<?php
if($act=='pilih'){
    if(sudah_memilih($_SESSION['id_pemilih']))
        include 'pilih_sudah.php';
    else    
        include 'pilih.php';
} else {
    include 'identitas.php';
}

?>

