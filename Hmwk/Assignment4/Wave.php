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
        <th>Row </th>
        <th>Wavelength</th>
        <th>WaveType</th>
        </tr>
        <?php
        
        
        
        $waveType='';       
        $wave = 3;

        for($r=0; $r<16; $r++){
            echo "<tr>";
            echo "<td>".($r+1)."</td>";
            echo "<td>10E".$wave."</td>";
            $wave--;
        
                   
		      switch($wave){
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case -1: 
                    case -2: echo ("<td>"."Radio"."</td>");
                             break;
                    case -3: 
                    case -4:
                    case -5: echo ("<td>"."Microwave"."</td>");
                             break;
                    case -6: echo ("<td>"."Infrared"."</td>"); 
                             break;
                    case -7: echo ("<td>"."Visible"."</td>");
                             break;
                    case -8: 
                    case -9: echo ("<td>"."Ultraviolet"."</td>");
                             break;
                    case -10: 
                    case -11: echo ("<td>"."X-Ray"."</td>");
                             break;
                    case -12:
                    case -13: echo ("<td>"."Gamma Ray"."</td>");
                             break;
                    default: 
                        echo "<h1> The Wave is $waveType</h1>";
                
                echo "</tr>"; 
        }
                     
        }
        ?>
        </table>
    </body>
</html>