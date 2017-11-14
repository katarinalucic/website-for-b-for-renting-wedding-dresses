<?php
if (!isset ($_GET["unos"])){
echo "Parametar Unos nije prosleđen!";
} else {
$pomocna=$_GET["unos"];
include "konekcija.php";
$sql="SELECT vencanicanaziv FROM vencanica WHERE vencanicanaziv LIKE '$pomocna%'";
$rezultat = $mysqli->query($sql);
if ($rezultat->num_rows==0){
echo "U bazi ne postoji vencanica koja počinje na " . $pomocna;
} else {
while($red = $rezultat->fetch_object()){
?>
<a onclick="place(this)"><?php  echo $red->vencanicanaziv;?></a>
<br/>
<?php
}
}
$mysqli->close();
}
?>
