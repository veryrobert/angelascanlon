<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php
      function fetchData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch); 
        return $result;
      }
      $result = fetchData("https://api.instagram.com/v1/users/veryrobert/media/recent/?access_token=TOKEN-GOES-HERE");
      $result = json_decode($result);
      foreach ($result->data as $post) {
        // Do something with this data.
      }
    ?>    



 <?php 
 Echo "Hello, World!";
 ?> 

</body>
</html>