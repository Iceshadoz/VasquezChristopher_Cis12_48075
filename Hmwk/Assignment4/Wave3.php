<?php
/*
    Christopher Vasquez
    September 17, 2014
    Purpose: Assignment 2
*/
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Electromagnetic Spectrum</title>
    </head>
    <body>

        <img src="electromagnetic-spectrum.PNG">

        <table border="1" width="200">
        <tr>
        <th>Row</th>
        <th>Wavelength</th>
        <th>WaveType</th>
        </tr>
        <?php
        
        
        
        $wavetype = 4;
        $wave = 3;
        
        $table = array();
                 for($col=1; $col<=3; $col++){
                    $table[$col]=array();
                    }
                    for ($r =1 ; $r < 17 ; $r++){
                $table[$r][1]=$r;
                $table[$r][2]="10E".$wave;
                
                $wave--;
                $wavetype--;
                
                   
         switch($wavetype){

                    case 3:
                    case 2:
                    case 1:
                    case 0:
                    case -1: $table[$r][3] = 'Radio';
                             break; 
                    case -2: 
                    case -3: 
                    case -4:$table[$r][3] = 'Microwave';
                             break;
                    case -5: $table[$r][3] = 'Infrared'; 
                             break;
                    case -6:  $table[$r][3] ='Visible';
                             break;
                    case -7: 
                    case -8:  $table[$r][3] = 'Ultraviolet';
                             break;
                    case -9: 
                    case -10: $table[$r][3] = 'X-Ray';
                             break;
                    case -11: 
                    case -12: $table[$r][3] = 'Gamma Ray';
                             break;
                    case -13: 
                    default: 
                    }
                     }

                 for($r=1; $r < 17; $r++){
                 echo "<tr>";
                 for($col=1; $col<=3; $col++){
                 echo "<td>".$table[$r][$col]."</td>";
                 }
                 echo "</tr>"; 
                 
        }
        ?>
        </table>
    </body>
</html>