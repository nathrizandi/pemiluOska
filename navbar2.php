<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/50ee1b438c.js" crossorigin="anonymous"></script>
    <link href="assets/css/general.css" rel="stylesheet"/>       
    <link rel="icon" href="assets/images/1.png"/>
    <title>Login</title>
    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          text-align: center;
        }

        span .inline-left {
            float: left;
            display: inline-block;
        }

        .navbar-nav a {
          text-decoration: none;
          color: black;
          margin-left: 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">
            <img src="assets/images/1.png" alt="" width="50" height="50">
          </a>
          <div class="navbar-nav">
            <span class="inline-left">
            <?php if($_SESSION['level']!=='admin'): ?>
              <a href="?m=login_pemilih">Daftar Pemilih</a>
              <a href="?m=daftar_peserta">Daftar Peserta</a>
              <a href="?m=hasil_voting">Hasil Voting</a>
            <?php endif?>
              
            <?php if($_SESSION['level']!='admin' || !$_SESSION['login']):?>
              <a href="?m=login">Admin</a>
              <?php endif?>                
              <?php if($_SESSION['level']=='admin'):?>
              <a href="?m=pencalon">Pencalon</a>
              <a href="?m=pemilih">Pemilih</a>                
            <?php endif ?>

            <?php if($_SESSION['level']=='pemilih'): ?>
              <a href="?m=password">Password</a>
              <a href="aksi.php?act=logout">Logout</a>
              <?php endif ?> 
            <?php if($_SESSION['level']=='admin'):?>

              <a href="aksi.php?act=logout">Logout</a>
            <?php endif ?> 
            </span>
          </div>
        </div>
    </nav>