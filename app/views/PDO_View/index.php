<?php
/*
* Contoh index view dari controller using_PDO
*/
echo "<h4>This is index in PDO View </h4>";

// Print array
// print_r($data);
// print "<br />";

// Print using foreach
foreach ($data as $list)
{
  echo $list['id']." ".$list['title_uri']."<br />";
}


/*
foreach ($data->posts as $list)
{
  echo $list['title_uri']."<br />";
}
*/
