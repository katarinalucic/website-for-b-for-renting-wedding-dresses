<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
include ("baza.php");
$dodaj=new Database("vencanice");
$prikazikreatore=new Database("vencanice");
$prikazikolekcije=new Database("vencanice");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CityGlam Brides</title>
<link href="stilovi.css" rel="stylesheet" type="text/css" />


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="sugerisi.js" type="text/javascript"></script> 
  
  
<script src="sugerisi.js" type="text/javascript"></script> 
<script type="text/javascript">
function place(ele){
    document.getElementById('txt').value = ele.innerHTML;
	document.getElementById("livesearch").style.display = "none";
}
</script>

<script type="text/javascript">

		function pretrazi(){
			var naziv = $('#txt').val();

			$.get('scriptpretrazi.php', {naziv:naziv}, function(data) {
                $('#odgovorpretrage').html(data);
            });
		}

	</script>
	
	<?php 			 
		if (isset($_POST['submit'])){

			if (empty($_POST['naziv'])||empty($_POST['kroj'])||empty($_POST['kreator'])||empty($_POST['kolekcija'])) {
				$poruka = '<div class="title"><h4>Sva polja su obavezna!</h4</div>';
			} else {

				$podaci=array($_POST["naziv"], $_POST["kroj"], $_POST["kreator"], $_POST["kolekcija"]);
				if($dodaj->insert("vencanica", "vencanicanaziv, kroj, vencanicakreatorid, vencanicakolekcijaid", $podaci))
				 {
					$poruka = '<div class="title"><h3>Vencanica je uspesno uneta!</h3</div>';
				} else {
					$poruka = '<div class="title"><h4>Greska!</h4></div>';
				}
			}
		}
	 ?>
</head>

<body>

<?php
$prikazikreatore->select_kreatore();
$prikazikolekcije->select_kolekcije();
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>  
    <div class="navbar-header">
     <a class="navbar-brand" href="index.php"><strong>CITYGLAM BRIDES</strong></a>
    </div>    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">POČETNA</a></li>
        <li><a href="dodaj.php">DODAJ VENČANICU</a></li>
        <li><a href="izmeni.php">IZMENI VENČANICU</a></li>
         <li><a href="iznajmi.php">IZNAJMI VENČANICU</a></li></ul>
		 </div>
		 </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  
<div class="carousel-inner" role="listbox">
      <div class="item active">
      <img src="Slike/mlada1.jpg" >
      <div class="carousel-caption">
      </div> 
    </div>

    <div class="item">
      <img src="Slike/mlada2.jpg" >
      <div class="carousel-caption">
      </div> 
    </div>
 
  
   <div class="item">
      <img src="Slike/mlada3.jpg" >
      <div class="carousel-caption">
      </div> 
    </div>
    
    <div class="item">
      <img src="Slike/mlada4.jpg" >
      <div class="carousel-caption">
      </div> 
    </div>
  </div>

<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  




<div class="page padding-bottom">
<div class="content_wrap1">
<div class="left-panel">
      <div class="clear"></div>
    </div>
		<div class="title">
		<h1>Unesite sve tražene podatke</h1>
				<form action="dodaj.php" method="POST">
					<div class="search1">
					    <label><h3>Naziv venčanice:</h3></label>
					   <ul class="ul1">
					   <li class="libg">
					   <input name="naziv" type="text" class="search-filed"></li>
					   </ul>
				  	</div>
					<br>
					<div class="search1">
					    <label><h3>Kroj:</h3></label>
					   <ul class="ul1">
					   <li class="libg">
					   <input name="kroj" type="text" class="search-filed"></li>
					   </ul>
				  	</div>
					<br>
					<div class="search1">
					    <label><h3>Kreator:</h3></label>
					   <ul class="ul1">
					   <li class="libg">
					   <select class="search-filed" name="kreator"></li>
					   <option value="">Izaberite kreatora</option>
					   <?php while ($red=$prikazikreatore->getResult()->fetch_object()) {  ?>
					   			<option value="<?php echo $red->kreatorid; ?>"><?php echo $red->kreatorime .' '. $red->kreatorprezime; ?></option>
					   			<?php  } ?>
					   </select>
					   </ul>
				  	</div>
					<br>
					<div class="search1">
					    <label><h3>Kolekcija</h3></label>
					   <ul class="ul1">
					   <li class="libg">
					   <select class="search-filed" name="kolekcija"></li>
					   <option value="">Izaberite kolekciju</option>
					   <?php while ($red2=$prikazikolekcije->getResult()->fetch_object()) {  ?>
					   			<option value="<?php echo $red2->kolekcijaid; ?>"><?php echo $red2->kolekcijanaziv;?></option>
					   			<?php  } ?>
					   </select>
					   </ul>
				  	</div>
					<br>
					<div class="search">
					   <ul class="ul1">
					<li>
			  		<button type="submit" name="submit" class="btn btn-primary">Dodaj</button></li>
					
					<?php if(!empty($poruka)) echo $poruka; ?>
					   </ul>
				  	</div>
					<br>
			  	</form>
			</div>

</div>
</div>



<div class="footer-wrapper">
  <div class="footer">
  <div class="panel">
	  <h1><strong>KONTAKT<strong></h1>
        <div class="content">
          <h4>+381 11 3960 929</h4>
        </div></div>
	</div>
	</div>

</body>