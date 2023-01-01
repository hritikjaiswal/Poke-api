<?php

function getStats(){
    $url = "https://pokeapi.co/api/v2/pokemon/";
    $id=1; 
    $data = file_get_contents($url.$id.'/');
    $pokemon = json_decode($data);
    $result = $pokemon->stats;
    
    foreach($result as $res){
        echo $res->stat->name. ": ".$res->base_stat."<br>";
   }
}
getStats();

?>