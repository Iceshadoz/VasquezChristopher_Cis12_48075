<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
        // Intialize the input
        $score=rand(50,100);
        //Determine the Grade
        switch($score>=90) {
               case true:$grade= 'A';break;
               default:
                   switch($score>=80){
                     case true:$grade='B';break;
                        default:
                         switch($score>=70){
                             case true:$grade='C';break;
                             default:
                              switch($score>=60){
                                case true:$grade='D';break;
                                default:$grade='F';
                              }
                         }
                   }
             }
      
        
        //output the Results
        echo "<h1>A score of $score= $grade</h1>";
        
        ?>

