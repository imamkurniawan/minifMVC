<?php
/**
 *  Kelas untuk membaca folder dalam direktori
 */

 Class class_folder
 {
     public $folder_property;
     public $folder_count;
     public $folder_totalSize;
     public $folder_totalSizeKB;
     public $folder_totalSizeMB;

     public function __construct($dir)
     {
         echo "Imam Folder class is works! <br>";
         $this->getFolder($dir);
     }

     public function getFolder($dir)
     {
        $files = glob($dir . "*");
        foreach($files as $file)
        {
            if(is_dir($file))
            {
                echo $file. "<br>";
            }
        }
     }

 }