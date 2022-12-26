<?php

require_once "fonction.php";
$id = (int) $_GET["actor"];
$note = (int) $_GET["note"];

/*if($note > 0){
    $note=1;
}else{
    $note=-1;
}*/
$note = $note > 0 ? 1 : -1;
//$id = intval($id);//
$sql = "UPDATE vote SET vote = ($note) WHERE id_acteur = $id";


dd("coucou",$_GET,$id,$note,$sql);
