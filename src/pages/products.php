
<?php
    $query = $database->prepare("SELECT * FROM products");
    $query->execute();
    $datas = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<table border="1">
    <tr>
        <td width="50">id</td>
        <td width="200">product name</td>
        <td width="200">product image</td>
        <td width="200">product price</td>
    </tr>
    <?php foreach ($datas as $data): ?>
    <tr>
        <td width="50"><?php echo $data["id"];?></td>
        <td width="200"><a href="index.php?page=2&id=<?php echo $data["id"];?>" ><?php echo $data["name"];?></a></td>
        <td width="200"><img src="<?php echo $data["image"];?>" alt="<?php echo $data["name"]; ?>" width="200" height="auto"></td>
        <td width="200"><?php echo $data["price"];?></td>

    </tr>
    <?php endforeach; ?>
</table>