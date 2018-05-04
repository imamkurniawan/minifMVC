<?php
/*
* Contoh index view dari controller using_PDO
*/
echo "<h4>This is index in PDO View </h4>";

// Print array
// print_r($data);

// Print using foreach
foreach ($data->posts as $list)
{
  echo $list['title_uri']."<br />";
}
