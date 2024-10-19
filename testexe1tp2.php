<?php
$note=["said"=>13,"badr"=>16,"najat"=>15];
$note["ali"]=10;
unset($note["najat"]);
$max=$note["said"];
$min=$note["said"];
foreach($note as $n=>$nvalue){
    if($nvalue>$max) {
        $max=$nvalue;
    }
    if($nvalue<$min){
        $min=$nvalue;
    }
}
   
   function moyenne($note){
    $somme=0;
    foreach($note as $n=>$nvalue){
        $somme+=$nvalue;

    }
    $m=$somme/sizeof($note);
    return $m;
   }
?>