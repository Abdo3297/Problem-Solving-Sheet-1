<?php
#################################################
// A.Say Hello
// fscanf(STDIN,'%s',$in1);
// echo 'Hello, '.$in1;
#################################################
// B.Basic Data Types
/* way 1 */
// fscanf(STDIN,'%d %d %c %f %f',$in1, $in2,$in3,$in4,$in5);
// echo $in1 . "\n" . $in2 . "\n" . $in3 . "\n" . $in4 . "\n" . $in5;
/* way 2 */
// echo implode("\n", explode(" ", readline()));
#################################################
// C.Simple Calculator
// fscanf(STDIN,'%d %d',$in1, $in2);
// echo $in1 .' + '. $in2 .' = '. ($in1+$in2)."\n";
// echo $in1 .' * '. $in2 .' = '. ($in1*$in2)."\n";
// echo $in1 .' - '. $in2 .' = '. ($in1-$in2);
#################################################
// D.Difference
// fscanf(STDIN,'%d %d %d %d',$in1, $in2,$in3,$in4);
// echo 'Difference = '.(($in1*$in2)-($in3*$in4));
#################################################
// E.Area of a Circle
// const pi = 3.141592653;
// fscanf(STDIN,'%f',$in1);
// printf('%.9f',pi*pow($in1,2));
#################################################
// F.Digits Summation
// fscanf(STDIN,'%d %d',$in1, $in2);
// echo ($in1%10)+($in2%10);
#################################################
// G.Summation from 1 to N
// fscanf(STDIN,'%d',$in1);
// echo ($in1*($in1+1))/2;
#################################################
// H.Two numbers
// fscanf(STDIN,'%f %f',$in1, $in2);
// echo 'floor '.$in1." / ".$in2.' = '.floor($in1/$in2)."\n";
// echo 'ceil '.$in1." / ".$in2.' = '.ceil($in1/$in2)."\n";
// echo 'round '.$in1." / ".$in2.' = '.round($in1/$in2);
#################################################
// I.Welcome for you with Conditions
// fscanf(STDIN, '%d %d', $in1, $in2);
// echo ($in1 >= $in2) ? 'Yes' : 'No';
#################################################
// J.Multiples
// fscanf(STDIN, '%d %d', $in1, $in2);
// echo ($in1 % $in2 == 0) || ($in2 % $in1 == 0) ? 'Multiples' : 'No Multiples';
#################################################
// K.Max and Min
// fscanf(STDIN, '%d %d %d', $in1, $in2, $in3);
// echo min($in1, $in2, $in3).' '.max($in1,$in2, $in3);
#################################################
// L.The Brothers
// fscanf(STDIN, '%s %s', $in1, $in2);
// fscanf(STDIN, '%s %s', $in3, $in4);
// echo ($in2 == $in4) ? 'ARE Brothers' : 'NOT';
#################################################
// M.Capital or Small or Digit
// fscanf(STDIN, '%c', $in1);
// if( ord($in1)>=48 && ord($in1)<= 57 ) {echo 'IS DIGIT';}
// elseif( ord($in1)>=97 && ord($in1)<= 122 ) {echo 'ALPHA'."\n".'IS SMALL';}
// elseif( ord($in1)>=65 && ord($in1)<= 90 ) {echo 'ALPHA'."\n".'IS CAPITAL';}
#################################################
// N.Char
// fscanf(STDIN, '%c', $in1);
// if( ord($in1)>=97 && ord($in1)<= 122 ) {
//     echo chr(ord($in1)-32);
// } elseif(ord($in1)>=65 && ord($in1)<= 90) {
//     echo chr(ord($in1)+32);
// }
#################################################
// O.Calculator
// fscanf(STDIN, '%d %c %d', $in1,$in2, $in3);
// switch ($in2) {
//     case '+':
//         echo ($in1+$in3);
//         break;
//     case '-':
//         echo ($in1-$in3);
//         break;
//     case '*':
//         echo ($in1*$in3);
//         break;
//     case '/':
//         echo (int)($in1/$in3);
//         break;
// }
#################################################
// P.First digit !
// fscanf(STDIN, '%d', $in1);
// $len = strlen((string) ($in1));
// $first = (int)($in1/(10** ($len-1)));
// echo ($first%2== 0) ? 'EVEN':'ODD';
#################################################
// Q.Coordinates of a Point
// fscanf(STDIN, '%f %f', $in1, $in2);
// if( $in1>0 && $in2>0 ) {
//     echo 'Q1';
// } elseif( $in1<0 && $in2>0 ) {
//     echo 'Q2';
// } elseif( $in1<0 && $in2<0 ) {
//     echo 'Q3';
// } elseif( $in1>0 && $in2<0 ) {
//     echo 'Q4';
// } elseif($in1==0 && $in2==0) {
//     echo 'Origem';
// } elseif($in1==0) {
//     echo 'Eixo Y';
// } elseif($in2==0) {
//     echo 'Eixo X';
// }
#################################################
// R.Age in Days
// fscanf(STDIN, '%d', $in1);
// echo (int)($in1/365)." years"."\n";
// $r = ($in1%365);
// echo (int)($r/30)." months"."\n";
// echo ($r%30)." days"."\n";
#################################################
// S.Interval
// fscanf(STDIN, '%f', $in1);
// if ($in1 < 0 ||$in1 > 100) {
//     echo 'Out of Intervals';
// } elseif ($in1 >= 0 && $in1 <= 25) {
//     echo 'Interval [0,25]';
// } elseif ($in1 > 25 && $in1 <= 50) {
//     echo 'Interval (25,50]';
// } elseif ($in1 > 50 && $in1 <= 75) {
//     echo 'Interval (50,75]';
// } elseif ($in1 > 75 && $in1 <= 100) {
//     echo 'Interval (75,100]';
// }
#################################################
// T.Sort Numbers
// fscanf(STDIN, '%d %d %d', $in1, $in2,$in3);
// echo min($in1, $in2,$in3)."\n";
// echo array_sum([$in1, $in2,$in3])-min($in1, $in2,$in3)-max($in1, $in2,$in3)."\n";
// echo max($in1, $in2,$in3)."\n\n";
// echo $in1."\n";
// echo $in2."\n";
// echo $in3;
#################################################
// U.Float or int
// fscanf(STDIN, '%f', $in1);
// $res = $in1 - (int)($in1);
// if ($res == 0) { 
//     echo 'int'." ".$in1;
// } else {
//     echo 'float'." ".(int)($in1)." ".$res;
// }
#################################################
// V.Comparison
// fscanf(STDIN, '%d %c %d', $in1,$in2, $in3);
// switch ($in2) {
//     case '>':
//         echo ($in1>$in3)?'Right':'Wrong';
//         break;
//     case '<':
//         echo ($in1<$in3)?'Right':'Wrong';
//         break;
//     case '=':
//         echo ($in1==$in3)?'Right':'Wrong';
//         break;
// }
#################################################
// W.Mathematical Expression
// fscanf(STDIN, '%d %c %d %c %d', $in1,$in2, $in3,$in4, $in5);
// if($in4=='='){
//     switch ($in2) {
//         case '*':
//             echo (($in1*$in3)==$in5)?'Yes':($in1*$in3);
//             break;
//         case '+':
//             echo (($in1+$in3)==$in5)?'Yes':($in1+$in3);
//             break;
//         case '-':
//             echo (($in1-$in3)==$in5)?'Yes':($in1-$in3);
//             break;
//     }
// }
#################################################
// X.Two intervals
// fscanf(STDIN, '%d %d %d %d', $l1,$r1, $l2,$r2);
// if ($r1 < $l2 || $r2 < $l1) {
//     echo -1;
// } else {
//     $leftBound = max($l1, $l2);
//     $rightBound = min($r1, $r2);
//     echo $leftBound . " " . $rightBound;
// }
#################################################
// Y.The last 2 digits
// fscanf(STDIN, "%d %d %d %d", $number1, $number2, $number3, $number4);
// $result = bcmul($number1, bcmul($number2, bcmul($number3, $number4)));
// echo substr($result, -2);
#################################################
// Z.Hard Compare
// fscanf(STDIN, "%d %d %d %d", $number1, $number2, $number3, $number4);
// $p1=$number2*log10($number1);
// $p2=$number4*log10($number3);
// echo ($p1>$p2)?"YES":"NO";
#################################################