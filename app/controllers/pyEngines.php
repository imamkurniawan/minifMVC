<?php
/**
 * Controller
 * Implementasi engine py
 */
Class PyEngines extends Controller
{
    public function index()
    {
        $destination_dir = "../engines/python/pyplot/figures";
        $results = shell_exec('python ../engines/python/pyplot/export_plot.py '.$destination_dir);
        if($results)
        {
            // print($results."<br>");
            echo "<img src=$destination_dir/figure1.png>";
        } 
    }
}