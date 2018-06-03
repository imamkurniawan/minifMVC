<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?=HOME_PATH?>css/public-style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <?php
  //print_r($data);
   ?>
  
  <div class="box">
	<h1>This is Home page!</h1>
    <a href="<?php HOME_PATH ?>maps"> Maps </a><br>
    <a href="<?php echo HOME_PATH; ?>news_PDO"> Posts list </a><br>
    <a href="http://google.com" target="_blank">Search in google</a><br>
  </div>
</body>
</html>
