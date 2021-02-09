<!doctype html>
<html lang="en">
 <head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/webfonts/fontawesome.min.css');?>" />


 <!-- JavaScript -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/webfonts/fontawesome.min.js');?>"></script>








 
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->



 <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="/home">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php
        foreach($nav_list as $site){
            if($site==$title){
            ?>
            <li class="nav-item active">
            <a class="nav-link" href="/<?php echo $site ?>"><?php echo $site ?><span class="sr-only">(current)</span> </a>
          </li>
          <?php
            } else {?>
                <li class="nav-item">
            <a class="nav-link" href="/<?php echo $site ?>"><?php echo $site ?><span class="sr-only">(current)</span> </a>
          </li>
          <?php
            }
        }
    ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mehr
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/data/datapage">Database</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?= site_url('search/searchpage') ?>" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="input" name="input">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</br>
<!--
<div class="alert alert-success" role="alert">
  Nichts ist schiefgegangen!
</div>
</br>
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Ein-/Ausklappen
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Versteckt!
  </div>
</div>
-->




<title>CodeIgniter Tutorial</title>
</head>
<body>
<h1><?php #echo $title ?></h1>

<?php echo $content ?>

</br>
<?php #echo $adress ?>
<?php #echo $tel ?>
</br>
<em>&copy; 2020</em>
</body>
</html>




 

 
