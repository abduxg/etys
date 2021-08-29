<?php
require "helpers/db_connection.php";
require "helpers/pages.php";
    if (isset($_GET["page"])){
        $page_number = $_GET["page"];
    }
    else{
        $page_number = 1;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etys</title>
</head>
<body>

<div class="header" style="display: flex;justify-content: center">
    <h1>ETYS</h1>
</div>

<div class="content">

    <?php
        require "pages/".$page[$page_number];
    ?>

</div>
</body>
</html>
