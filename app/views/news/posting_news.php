<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posting News</title>
</head>
<body>
<h2>Post New </h2>
<div>
  <form action="<?php echo HOME_PATH; ?>news/addNews" method="post">
    Title<br><input type="text" name="title" size="50" required /><br>
    News<br><textarea name="content" cols="100" rows="10"> </textarea>
    <br><input type="submit" value="Posting"  />
  </form>
</div>
</body>
</html
