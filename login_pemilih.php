<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body> -->
<?php
include 'navbar1.html';
?>
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-md-8">   
                <?php if($_POST) include 'aksi.php'; ?>
                <div class="card mt-5">
                    <div style="background-color: #33579c; color: white;" class="card-header mb-2"><i class="fas fa-user"></i>&nbsp;&nbsp;<strong>Login Pemilu</strong></div>
                        <div class="card-body">
                        <form class="form-signin" action="?m=login_pemilih" method="post">                        
                            <div class="form-group">
                                <label class="mb-1">NISN</label>
                                <input type="number" class="form-control" placeholder="Masukkan NISN Anda" name="user" autofocus required/>
                            </div>
                            <div class="form-group mt-3">            
                                <label class="mb-1">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Password Anda" name="pass" required/>  
                            </div>      
                            <div class="form-group">                
                                <button class="btn btn-outline-primary col-2 mt-4" type="submit">Login <i class="fas fa-angle-right"></i></button>                
                            </div>    
                            <p class="mt-3" style="text-align: center;"><em>Pilihlah sesuai dengan nurani, Golput bukan solusi!</em></p>
                            <p></p>
                        </form>
                        </div>   
                    </div>  
                </div>
            </div>
</div>
<footer class="footer ml-2">
    <p><b>Copyright </b>&copy; <?=date('Y')?> Abhisanna & Nathasya Rizandi <b> - </b>@ OSIS SMK  <em class="pull-right"> </em></p>
</footer>
</body>
</html>