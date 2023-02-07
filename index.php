<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="news.php" method="post">
  <label for="desired_date">Enter Date:</label>
  <input type="date" id="desired_date" name="desired_date">
  <input type="submit" value="Submit">
</form>
<?php

$ch = curl_init('https://mail.ru/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$html = curl_exec($ch);

curl_close($ch);
echo $html;

?>

</body>
</html>