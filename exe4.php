<?php
function testerchaine($chaine){
    $pattern='/[0-9]/';
    echo preg_match($pattern,$chaine);
}
function qst2($chaine){
    $pattern="/@/";
    echo preg_match($pattern,$chaine);
}
$chaine="badr123";
$chaine1="badrnadnj";
$chaine3="badr@gmail.com";
testerchaine($chaine);
echo "<br>";
testerchaine($chaine1);
echo "<br>";
qst2($chaine3);


function qt3($num){
    $pattern='/^\d{2}-\d{2}-\d{2}-\d{2}-\d{2}$/';
   
    echo preg_match($pattern,$num);
}
$num="01-11-11-11-11";
echo "<br>";
qt3($num);

function qt4($num){
    $pattern='/^\w{3}\d{2}$/';
   
    echo preg_match($pattern,$num);
}

$ch="aaa12";
echo "<br>";
qt4($ch);

function qt5($chi){
    $pattern='/^\\d{5}$/';
   
    echo preg_match($pattern,$chi);
}
$chi="555555";
echo "<br>";
qt5($chi);
?>