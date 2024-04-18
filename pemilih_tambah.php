<div class="page-header">
    <h1>Tambah Pemilih</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=pemilih_tambah">
            <div class="form-group">
                <label>Nisn <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nisn" value="<?=$_POST['nisn']?>"/>
            </div>
            <div class="form-group">
                <label>Nama Pemilih <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_pemilih" value="<?=$_POST['nama_pemilih']?>"/>
            </div>
            
            <div class="form-group">
                <label> Kelas : </label>
                <select class="form-control" name="kelas" id="kelas" required="">
                <option value="X - OTKP">X - OTKP</option>
                <option value="X - AKL">X - AKL</option>
                <option value="X - RPL">X - RPL</option>
                <option value="XI - OTKP">XI - OTKP</option>
                <option value="XI - AKL">XI - AKL</option>
                <option value="XI - RPL">XI - RPL</option>
                <option value="XII - OTKP">XII - OTKP</option>
                <option value="XII - AKL">XII - AKL</option>
                <option value="XII - OKTP2">XII - OKTP2</option>
                <?=$_POST['kelas']?>
                </select>
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="pass" readonly value="<?=$_POST['pass']?>murid"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=pemilih"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>