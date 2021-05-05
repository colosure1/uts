<!doctype html>
<html lang="en">
<?php 
	date_default_timezone_set("Asia/Jakarta"); 
	include_once ('koneksi.php')
?>
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
     h2{text-align : center;}
     h3{text-align : center;}
     </style>
    <title>UTS PEMROGRAMAN WEB 2    </title>
  </head>
  <body>
  <body>
  <!--dropdown -->
  </br>
  <form method="POST" action="">
 <select name="Provinsi">
  <option >- Pilih Wilayah -</option>
  <option value="DKI JAKARTA">DKI JAKARTA</option>
  <option value="JAWA BARAT">JAWA BARAT</option>
  <option value="JAWA TENGAH">JAWA TENGAH</option>
  <option value="BANTEN">BANTEN</option>
 </select>
 
 <button type="submit" name="submit" > SELECT </button>
 
</form>

<div class="nav-md">
		<!-- awal container -->
  <div class="container body">
    <div class="main_container">

		<!-- awal isi halaman -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
            <div class="h-25">
              
            <?php
 				if(isset($_POST["submit"]))
					{$provinsi=$_POST["Provinsi"];
					echo '</br>' .'<h2>'. " Data Pemantauan Covid-19 Wilayah " . $provinsi;}
				echo '</br>'.'<h3>'."Per " . date("d M Y H:i:s") ;
				?>
			<br>
             Muhamad Ivan Adriansyah / 181011401231
             </div>
            </div>
          </div>
        <br>
          <table class="table table-bordered">
        <thead>
          <tr>
            <th style="background-color: yellow;">POSITIF</th>
            <th style="background-color: skyblue;">DIRAWAT</th>
            <th style="background-color: lightgreen;">SEMBUH</th>
            <th style="background-color: red;">MENINGGAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>47.491</td>
            <td>1.478</td>
            <td>44.800</td>
            <td>1.213</td>
          </tr>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>