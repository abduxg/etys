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

}
else{
    header("Location:index.php");
    exit();
}