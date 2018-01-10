<?php 

namespace Inc\Data;

use \Inc\Base\BaseController;

class Read extends BaseController {

    function register() {

        $file = $this->plugin_path.'price.csv';
        //echo file_get_contents($file);
        /*****************
        Outputing the file
        *****************/
        if(file_exists($file)):
            $output ="<table class='table-bordered table-hover table-responsive'>\n\n";
            $output .= "<thead>\n\n";
            $output .= "<tr>\n\n";
            $output .= "<th > Product id </th>";
            $output .= "<th> User</th>";
            $output .= "<th> Min Qty</th> ";
            $output .= "<th> Flat</th>";
            $output .= "<th > %</th> ";
        
            $output .= "</tr>\n\n";
            $output .= "</thead>\n\n";
            $output .= "<tbody> \n";
            $f = fopen($file, "r");
            while (($line = fgetcsv($f)) !== false) {
                    $output .= "<tr>\n";
                    foreach ($line as $cell) {
                            $output .= "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    $output .= "</tr>\n";
            }
            fclose($f);
            $output .= "</tbody> \n ";
            $output .= "\n</table>";
        
            return $output;
        else :
            $output = 'Couldn\t find the file!';
            return $output;
        endif;        
    }
}