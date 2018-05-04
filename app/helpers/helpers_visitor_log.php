<?php
/*
* Get client information data and write them to a log
*/

function get_visitor_info($log)
{
  $IP = $_SERVER['REMOTE_ADDR'];
  $time = date('Y-m-d H:i:s');
  $page = $_SERVER['REQUEST_URI'];
  $agent = $_SERVER['HTTP_USER_AGENT'];
  if(!file_exists($log)){
    $fp = fopen($log, "w");
  }
  else{
    $fp = fopen($log, 'a');
  }
  fwrite($fp, $time."|".$IP."|".$page."|".$agent."\n");
  fclose($fp);
}

/*
* Save visitor info from log file to MySQL Table
* Clear the log file
*/
function save_visitor_info($log)
{
  // Prepare database
  $simpan_log = new class_mysql(host,user,password,dbname);

  $lines = file($log);
  $lines_count = count($lines);
  // loop perbaris
  for($i=0; $i < $lines_count; $i++)
  {
    // pecah tiap baris berdasarkan tanda pemisah ('|')
    $pisah = explode('|',$lines[$i]);
    for($x=0; $x<count($pisah); $x++)
    {
      // ambil variabel dari line yang telah dipecah
      $date = $pisah[0];
      $ipaddress = $pisah[1];
      $visited_page = $pisah[2];
      $client_agent = $pisah[3];
      // script simpan
      $simpan_log->mysql_queryInsert("INSERT INTO minif_visitor_log (visited_date, ipaddress, visited_page, client_agent)
      VALUE('$date', '$ipaddress', '$visited_page', '$client_agent')");
    } /* End of explode loops */
  } /* End of lines loops */
  // Clear log file
  $handle = fopen ($log, "w+");
  fclose($handle);
}

/* Get client IP Address and save them to log.txt */
/* Running automatically */
get_visitor_info('log/log.txt');
