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
        <?php
        $wave=$_GET['wave'];
        $waveType='';       
        switch(true){
		case $wave>5:$waveType='Radio';
                    break;
                case $wave>=5 * pow(10, -4):$waveType='Microwave';
                    break;
                case $wave>=5 * pow(10, -5.5):$waveType='Infrared';
                    break;
                case $wave>=5 * pow(10, -7):$waveType='Visiable';
                    break;
                case $wave>=5 * pow(10, -9):$waveType='Ultraviolet';
                    break;
                case $wave>=5 * pow(10, -11):$waveType='X-Ray';
                    break;
		default:      'GammaRay';
            }
                        echo "<h1> The Wave is $waveType</h1>";
                        
        ?>
    </body>
</html>
