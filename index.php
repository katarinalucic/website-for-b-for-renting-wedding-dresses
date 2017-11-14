<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
include ("baza.php");
$prikazi=new Database("vencanice");
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

</head>
<body>

<?php
$prikazi->select();
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

<div id="row">
<div class="container text-center" style="overflow-x:auto;">
 
<div class="page">
<div class="title">
          <h1><strong>VENČANICE NA STANJU</strong></h1>
        </div>
<div class="Tabela" style="overflow-x:auto;">
                <table >
                    <tr>
                        <td>
                            <strong>Naziv venčanice</strong>
                        </td>
                        <td >
                            <strong>Kroj</strong>
                        </td>
                        <td>
                            <strong>Kreator</strong>
                        </td>
						<td>
                            <strong>Kolekcija</strong>
                        </td>
                    </tr>
                    <tr>					
                        <?php while ($red=$prikazi->getResult()->fetch_object()) {  ?>
						<tr>
							<td><?php echo $red->vencanicanaziv; ?></td>
							<td><?php echo $red->kroj; ?></td>
							<td><?php echo $red->kreatorime .' '. $red->kreatorprezime ?></td>
							<td><?php echo $red->kolekcijanaziv; ?></td>
						</tr>
						<?php  } ?>
                    </tr>
                   
                </table>
            </div>   
</div></div>			
</div>
		 
		 
		 
<div class="page padding-bottom" >
  <div class="content_wrap" >
      
      <div class="clear"></div>
      <div class="contact-panel padding-bottm">
        <div class="title">
          <h1><strong>PRETRAGA VENČANICA</strong></h1>
          <h3>Unesite naziv venčanice:</h3>
        </div>
        <div class="search">          
				 <ul class="ul1">
					<li class="libg">
					
						<input type="text" id="txt" size="32" onkeyup="sugestija(this.value)" class="search-filed" placeholder="Naziv venčanice"> 
						<div id="livesearch"></div>						
							</li>
							<li><button type="button" onclick="pretrazi()" class="dugme">Pretraga</button></li>							
				</ul>								
        </div>
		
        <div class="clear"></div>		
 
    </div>
	<div id="odgovorpretrage"></div><br><br>
    <div class="clear"></div>
  </div></div>
		 
		 
		 
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










