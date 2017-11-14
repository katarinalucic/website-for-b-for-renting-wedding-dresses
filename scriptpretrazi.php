<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="tabela.css" rel="stylesheet" type="text/css" />
<?php 
	include "konekcija.php";

	if (empty($_GET['naziv'])){
		echo '<div class="title"><h1>Unesite naziv vencanice!</h1</div>';
	} else {
		$naziv = $_GET['naziv'];

		$sql="SELECT v.vencanicanaziv, v.kroj, k.kreatorime, k.kreatorprezime, kol.kolekcijanaziv FROM vencanica AS v
		JOIN kreator as k ON v.vencanicakreatorid=k.kreatorid
		JOIN kolekcija as kol ON v.vencanicakolekcijaid=kol.kolekcijaid WHERE vencanicanaziv = '$naziv'";
		$q=$mysqli->query($sql);
		$rows= mysqli_num_rows($q);
			?>

<div class="Tabela" >
                <table >
                    <tr>
                        <td>
                            Naziv vencanice
                        </td>
                        <td >
                            Kroj
                        </td>
                        <td>
                            Kreator
                        </td>
						<td>
                            Kolekcija
                        </td>
                    </tr>
                    <tr>
                        <?php while ($red=$q->fetch_object()) {  ?>
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
			<?php
		}
	

?>