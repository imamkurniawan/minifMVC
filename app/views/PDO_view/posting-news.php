<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posting News</title>

  <style>
    #form{
        background-color:#ddd;
        max-width: 800px
    }
  </style>
</head>
<body>
<h3>Post New </h3>
<a href = "<?=HOME_PATH?>news_PDO">(B)Back</a>
<div>
  <form action="<?php echo HOME_PATH; ?>news_PDO/addNews" method="post" enctype="multipart/form-data">
    Title<br><input type="text" name="title" size="50" required /><br>
    News<br><textarea name="content" cols="100" rows="10"> </textarea>
    <div id="form">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <br><input type="submit" value="Posting"  />
  </form>
</div>
    
</body>
</html
