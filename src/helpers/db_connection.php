<?php try {

$database = new PDO("mysql:host=mysql;dbname=etys_db", "root", "root");
}
catch (PDOException $e ){
echo $e->getMessage();
}

?>