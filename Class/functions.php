<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>All about Functions</title>
          <?php
          //Functions calling other functions
        function fValue1($p,$i,$n) {
            return $p *pow((1+$i/100),$n);
        }
        //Functions utlizing control constructs
        function fValue2($p,$i,$n) {
            $fvalue=$p;
            for ($year=1;$year<=$n;$year++){
               $fValue*=(1+$i/100);
            }
            
            return $fValue;
        }
            //Functions calling functions calling functions
            function fValue3($p,$i,$n) {
                return $p*exp ($n*log(1+$i/100));
            }
            //Functions calling themselves
            function fValue4($p,$i,$n) {
                if ($n==0) return $p;
                else return fValue4 ($p,$i,$n-1) * (1+$i/100);
                
            }
            /*Difference between pass by value and pass by reference
            & represents pass by reference
            Allows the variable to be utilized as an input
            as well as an output that is returned
             */
            function fValue5($p,$i,$n,&$fValue) {
            $fvalue=$p;
            for ($year=1;$year<=$n;$year++){
               $fValue*=(1+$i/100);
            }
            }
            //Defaulted paramaters
            //To prevent ambiguity these parameters
            //must be to the far right of the argumet list
            
            function fValue6($p,$i,$n=9) {
            return $p *pow((1+$i/100),$n);
            }
        ?>
    </head>
    <body>
      <?php
      //Declare and initialize variables
      $pValue=100; //Present Value in $'s
      $iRate=6;//Interest/Investment rate % per year
      $cPeriods=12;//Number of compounding period
      fValue5;
      //Utilize the function
      $fValue1=number_format(fValue1($pValue,$iRate,$cPeriods),2);
      $fValue2=number_format(fValue2($pValue,$iRate,$cPeriods),2);
      $fValue3=number_format(fValue3($pValue,$iRate,$cPeriods),2);
      $fValue4=number_format(fValue4($pValue,$iRate,$cPeriods),2);
      
      $fValue5=number_format(fValue5,2);
      $fValue6=number_format(fValue6($pValue,$iRate),2);//Default Value of 9
      $fValue6a=number_format(fValue6($pValue,$iRate,$periods),2);
      //Displat the results
      echo "<p>Present Value = $$pValue</p>";
      echo "<p>Investment Rate = $iRate</p>";
      echo "<p>Compounding Period = $cPeriods (years)</p>";
      echo "<p>Future Value1 = $$fValue1</p>";
      echo "<p>Future Value2 = $$fValue2</p>";
      echo "<p>Future Value3 = $$fValue3</p>";
      echo "<p>Future Value4 = $$fValue4</p>";
      echo "<p>Future Value5 = $$fValue5</p>";
      echo "<p>Future Value6 = $$fValue6</p>";
      echo "<p>Future Value6a = $$fValue6a</p>";
      ?>
    </body>
</html>
