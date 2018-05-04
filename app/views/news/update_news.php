
</head>

<body>
<h2>Update News ID <?=$data['id']?></h2>
<?php
// Array [0] -> karena hanya ada satu data saja.
echo "News ID : ".$data['posts'][0]['id'];
?>
<div class="box">
  <form action="<?php echo HOME_PATH; ?>news/updateNews" method="post">
    <input type="hidden" name="id" value="<?php echo $data['posts'][0]['id']; ?>" />
    Title<br><input type="text" name="title" value="<?php echo $data['posts'][0]['title']; ?>" size="50" /> <br>
    <!--input type="text" name="content" size="50" value="<?php //echo $data['posts'][0]['posts']; ?>" /-->
    News<br><textarea name="content" cols="100" rows="10"><?php echo $data['posts'][0]['posts']; ?> </textarea>
    <br><input type="submit" value="Update" />
  </form>
</div>
</body>
</html
