<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?php echo $data["judul"]; ?></title>
	<link rel="stylesheet" href="<?php echo base_url; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container ml-3">
  <a class="navbar-brand" href="<?php echo base_url; ?>/Home">PHPMVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url; ?>/Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url; ?>/Game">Game List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url; ?>/About">About</a>
      </li>
    </ul>
  </div>
</div>
</nav>