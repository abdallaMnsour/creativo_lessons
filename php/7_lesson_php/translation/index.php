
<?php 

	
	// cookie
	if (isset($_COOKIE['lang'])) {

		// if ($_COOKIE['lang'] == 'ar') {

		// 	include "arLang.php"; 

		// } else {

		// 	include "enLang.php"; 

		// }

		include $_COOKIE['lang'] . 'Lang.php';

	} else {

		// default language
		include "enLang.php"; 

	}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><?= $lang['ho'] ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><?= $lang['ab'] ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><?= $lang['co'] ?></a>
        </li>
        
      </ul>
      <div class="d-flex" role="search">
        <a href="ar.php" class="btn btn-primary"><?= $lang['ar'] ?></a>
        <a href="en.php" class="btn btn-info mx-5"><?= $lang['en'] ?></a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<h1><?= $lang['welcome'] ?></h1>
		</div>
	</div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>	
</body>
</html>