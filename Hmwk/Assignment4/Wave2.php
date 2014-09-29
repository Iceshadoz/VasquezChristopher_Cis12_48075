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
        
        
        
        $waveType='';       
        $wave = 3;

        $col1 = array();
        for ($r =0 ; $r < 16 ; $r++)
            $col1[$r] = ($r+1);

        $col2 = array();
        for ($r =0 ; $r <16 ; $r++)
            $col2[$r] = "10E".$wave--;

        $col3 = array();
        for($r=0; $r<16; $r++)
            
                switch(substr($col2[$r],3)){
                    case 3:
                    case 2:
                    case 1:
                    case 0:
                    case -1:$col3[$r]='Radio';
                             break; 
                    case -2: 
                    case -3: 
                    case -4:$col3[$r]='Microwave';
                             break;
                    case -5: $col3[$r]='Infrared'; 
                             break;
                    case -6: $col3[$r]='Visible';
                             break;
                    case -7: 
                    case -8: $col3[$r]='Ultraviolet';
                             break;
                    case -9: 
                    case -10: $col3[$r]='X-Ray';
                             break;
                    case -11: 
                    case -12:
                    case -13: $col3[$r]='Gamma Ray';
                             break;
                    default: 
                        
                
                }
                 for($r=0; $r <16; $r++){
                 echo "<tr>";
                 echo "<td>".$col1[$r]."</td>";
                 echo "<td>".$col2[$r]."</td>";
                 echo "<td>".$col3[$r]."</td>";
                 echo "</tr>"; 
                 }
        
        ?>
        </table>
    </body>
</html>