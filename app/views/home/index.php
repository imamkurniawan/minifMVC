<title>myHomePage"</title>
</head>
<body>
  <?php
  print_r($data);
   ?>
  <h1>This is Home page!</h1>
  <div class="box">
    <a href="<?php HOME_PATH ?>maps"> Maps </a><br>
    <a href="<?php echo HOME_PATH; ?>news"> Posts list </a><br>
    <a href="http://google.com" target="_blank">Search in google</a><br>
  </div>
</body>
</html>
