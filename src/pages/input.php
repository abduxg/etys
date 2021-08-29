<?php
if (isset($_POST["input_url"])){

    $url = $_POST["input_url"];

    $curl_session = curl_init();
    curl_setopt_array($curl_session,[
       CURLOPT_URL=>$url,
       CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.246",
       CURLOPT_RETURNTRANSFER=>true
    ]);

    $html = curl_exec($curl_session);
    curl_close($curl_session);
    //<meta property="og:title" content="Brass or Silver Leaf Bookmark Set" />
    preg_match_all('/"name": "(.*?)",/',$html,$name);
    preg_match_all('/"image": "(.*?)",/',$html,$img);
    preg_match_all('/"lowPrice": "(.*?)",/',$html,$price);
    $product_name = $name[1][0];
    $product_image = $img[1][0];
    $product_price = $price[1][0];

    $query = $database->prepare("INSERT INTO products (name,image,price) values (?,?,?)");
    $query->execute([$product_name,$product_image,$product_price]);
    if ($query->rowCount()>0){

        echo "Success</br>";
        echo "<a href='index.php'>Main page</a>";

    }
    else{
        echo "fail</br>";
        echo "<a href='index.php'>Main page</a>";
    }
}
else{
    header("Location:index.php");
    exit();
}