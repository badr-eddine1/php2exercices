<?php
// exercice 1
 $moyenne=14;
 $recu=true;
//  if($moyenne<10){
//     $recu=true;
// }
// else $recu=false;
//  if($recu == true){
//     echo "avec une moyenne de $moyenne vous etes recu";
//  }
//  else{
//     echo "avec une moyenne de $moyenne vous etes recale";
//  }



// if($moyenne <8){
//     echo "vous n’êtes pas reçu.";
// }
// elseif($moyenne >= 8 && $moyenne <12){
//     echo "vous avez accès au repêchage.";
// }
// elseif($moyenne >= 12 && $moyenne <14){
//     echo "assez bien.";
// }
// elseif($moyenne >= 14 && $moyenne <16){
//     echo "bien.";
// }
// elseif($moyenne >= 16 && $moyenne <=20){
//     echo "tres bien.";
// }

$initial=500;
$i=0;
do{
    $valeur=rand(100,1000);
    // echo "la valeur aleatoir est $valeur <br>";
    $i++;
}while($valeur<>$initial);
echo "i=$i";


$multiple=1;
$nombreDonnee=15;
do{
    $multiple=$multiple*3;
    echo "$multiple<br>";
}while($multiple<=$nombreDonnee);







?>