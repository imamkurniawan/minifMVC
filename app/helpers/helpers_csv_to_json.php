<?php
/**
 * Format file csv adalah menggunakan header.
 * format csv diubah menjadi format array
 * header -> key
 * data -> value
 * kemudian diencode ke json
 * author: Imam Kurniawan
 * 25 Feb 2019
 */
function csv_to_json($file)
{
    // open csv file
    if (!($fp = fopen($file, 'r'))) 
    {
        die("Can't open file...");
    }
    
    //read csv headers
    $key = fgetcsv($fp,"1024",",");
    
    // parse csv rows into array
    $json = array();
    while ($row = fgetcsv($fp,"1024",",")) 
    {
        $json[] = array_combine($key, $row);
    }
    
    // release file handle
    fclose($fp);
    
    // encode array to json
    return json_encode($json);
    
}