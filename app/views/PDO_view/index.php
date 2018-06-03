<?php
/*
* Contoh index view dari controller using_PDO
*/
?>

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
  <!-- js script for delete confirmation -->
  <script type="text/javascript" src="<?=HOME_PATH?>js/confirmation_delete.js"></script>
  <style>
  body{
    margin:5px;
  }
  </style>
</head>
<body>
  <h4>This is index in PDO View </h4>
  <a href = "<?=HOME_PATH?>">(H)Home</a>
  <a href = "<?=HOME_PATH?>news_PDO/formNews">(+)Add New Post</a>
  <table class="table table-striped">
    <?php
    // Print using foreach
    foreach ($data as $list)
    {
    ?>
    <tr>
      <td>
        <?=$list['id']?>      
      </td>
      <td>
        <?=$list['title']?>      
      </td>
      <td>
        <a href="<?=HOME_PATH?>news_PDO/newsDetails/<?=$list['id']?>/<?=$list['title_uri']?>">
        View Post
        </a>
      </td>
      <td>
        <a href="<?=HOME_PATH?>news_PDO/delete/<?=$list['id']?>/<?=$list['title_uri']?>" onclick='return confirmasi()'>
          <button>Delete</button>
        </a>
      </td>
      <td>
      <a href="<?=HOME_PATH?>news_PDO/formUpdate/<?=$list['id']?>/<?=$list['title_uri']?>">
        <button>Edit</button>
      </td>
    </tr>  
    <?php
    }
    ?>
  </table>
</body>
</html>


<?php
/*
{
  echo "<a href=".HOME_PATH."news_PDO/newsDetails/".$list['id']."/".$list['title_uri'].">";
  echo $list['id']." ".$list['title_uri']."<br />";
  echo "</a>";
}


/*
foreach ($data->posts as $list)
{
  echo $list['title_uri']."<br />";
}
*/