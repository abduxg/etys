<?php
if (isset($_GET["id"])){
    $product_id = $_GET["id"];
}
else{
    header("index.php");
    exit();
}

$query = $database->prepare("SELECT * FROM products WHERE id=? LIMIT 1");
$query->execute([$product_id]);
$data = $query->fetch(PDO::FETCH_ASSOC);
?>

<table border="1">
    <tr>
        <td width="200">product name</td>
        <td width="200">product image</td>
        <td width="200">product price</td>
    </tr>

        <tr>
            <td width="200"><?php echo $data["name"];?></td>
            <td width="200"><img src="<?php echo $data["image"];?>" alt="<?php echo $data["name"]; ?>" width="200" height="auto"></td>
            <td width="200"><?php echo $data["price"];?></td>

<tr>
</table>
