<?php
//id/name/order/images call 
function getData($id){
    $url = "https://pokeapi.co/api/v2/pokemon/";

    $data = file_get_contents($url.$id.'/');
    $pokemon = json_decode($data);
   
    // echo "<pre>";
    // echo $pokemon->sprites->back_default;
    // echo "</pre>";
    return $pokemon;  
}
//types
function getTypes($id){
    $url = "https://pokeapi.co/api/v2/pokemon/";
    
    $data = file_get_contents($url.$id.'/');
    $pokemon = json_decode($data);
    $result = $pokemon->types;
    
    foreach($result as $res){
        echo $res->type->name."<br>";
   }

}
//ability
function getAbility($id){
    $url = "https://pokeapi.co/api/v2/pokemon/";
    $data = file_get_contents($url.$id.'/');
    $pokemon = json_decode($data);
    $result = $pokemon->abilities;
    
    foreach($result as $res){
        echo $res->ability->name."<br>";
   }

}

//stats

function getStats($id){
    $url = "https://pokeapi.co/api/v2/pokemon/"; 
    $data = file_get_contents($url.$id.'/');
    $pokemon = json_decode($data);
    $result = $pokemon->stats;
    
    foreach($result as $res){
        echo $res->stat->name. ": ".$res->base_stat."<br>";
   }

}


?>