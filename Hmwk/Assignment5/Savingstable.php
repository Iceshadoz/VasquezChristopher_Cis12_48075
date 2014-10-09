<?php
  /*
   * Christopher Vasquez
   * October 10/3/2014
   * Purpose: Assignment 5
   */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Savings Strings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
       <table width="200" border="1">
      <tr>
        <?php

      Tablefill("year");
       Tablefill("5%");
       Tablefill("6%");
       Tablefill("7%");
       Tablefill("8%");
       Tablefill("9%");
       Tablefill("10%");


        $columns=7;
        $year=25;
        $savingtable = array(array());
        Table($year,$columns,$savingtable);
        function Table($rows,$col,$table){
        $deposit = 100;
        $row1 = "year";
        $row2 = .05;
        $row3 = .06;
        $row4 = .07;
        $row5 = .08;
        $row6 = .09;
        $row7 = .1;
        $table = array();

        for($i=1; $i<$rows;$i++){
            $table[$i][0] = $i;
            $table[$i][1] = number_format(($row2 +1) * $deposit+ $deposit)*$i,2);
            $table[$i][2] = number_format(($row3 * $deposit +$deposit)*$i,2);
            $table[$i][3] = number_format(($row4 * $deposit)*$i,2);
            $table[$i][4] = number_format(($row5 * $deposit)*$i,2);
            $table[$i][5] = number_format(($row6 * $deposit)*$i,2);
            $table[$i][6] = number_format(($row7 * $deposit)*$i,2);
        }

         Tabledisplay($table,$rows,$col);
      }   
        
        function Tablefill($heading){
          echo "<th> $heading </th>";
        }

        function Tabledisplay($table,$rows,$columns){
          for($a=1;$a<$rows;$a++){
            echo "<tr>";
            for($b=0;$b<$columns;$b++){
              echo "<td>".$table[$a][$b]. "</td>";

            }
           echo "</tr>";
          }
        }

      
      





       
      

      ?>
     
      
      </tr>
  </body>
</html>
