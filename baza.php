<?php
class Database
{
private $hostname="localhost";
private $username="root";
private $password="";
private $dbname;
private $dblink; 
private $result; 
private $records;
private $affected; 
function __construct($dbname)
{
$this->dbname = $dbname;
                $this->Connect();
}

public function getResult()
{
return $this->result;
}
function Connect()
{
$this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
if ($this->dblink ->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$this->dblink->set_charset("utf8");

}




function select ($table="kreator, vencanica, kolekcija", $rows = '*', $where = "vencanicakreatorid = kreatorid && vencanicakolekcijaid = kolekcijaid", $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}
function select_kreatore ($table="kreator", $rows = '*', $where = null, $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}
function select_kolekcije ($table="kolekcija", $rows = '*', $where = null, $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}




function insert ($table="vencanica", $rows = "vencanicanaziv, kroj, vencanicakreatorid, vencanicakolekcijaid", $values)
{
$insert = 'INSERT INTO '.$table;  
            if($rows != null)  
            {  
                $insert .= ' ('.$rows.')';   
            }  
			$insert .= ' VALUES(';
			$insert .="'".$values[0]."', '".$values[1]."', '".$values[2]."', '".$values[3]."')";
if ($this->ExecuteQuery($insert))
return true;
else return false;
}



function update ($table="vencanica", $values)
{
$update = 'UPDATE '.$table." SET kroj='". $values[1] ."' WHERE vencanicaid=". $values[0];		
if (($this->ExecuteQuery($update)) && ($this->affected >0))
return true;
else return false;
}



function delete ($table="vencanica", $values)
{
$delete = 'DELETE FROM '.$table.' WHERE vencanicaid='.$values[0];
if ($this->ExecuteQuery($delete))
return true;
else return false;
}




function ExecuteQuery($query)
{
if($this->result = $this->dblink->query($query)){

return true;
}
else
{
return false;
}
}

function CleanData()
{

}

}
?>