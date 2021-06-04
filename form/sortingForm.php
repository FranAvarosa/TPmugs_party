<?php

$stock = $_GET["stock"];
$tarif = $_GET["tarif"];
$prix = (int)$_GET["prix"];
$couleur = $_GET["couleur"];
$taille = $_GET["taille"];
$new = $_GET["new"];
$tendance = $_GET["tendance"];

$sql = 'SELECT * FROM mugs WHERE image != "" ';

if($stock == "All" or $stock == "Oui"){
    if($result = $mysqli->query($sql)){
        if ($result->num_rows > 0){
        while($mugs = $result->fetch_assoc()){
            if($mugs['qte'] > 0){
            echo '<img src=images/'.$mugs['image'].'>';
            }
        }
        }
    }
}elseif($stock == "Non"){
    if($result = $mysqli->query($sql)){
        if ($result->num_rows > 0){
        while($mugs = $result->fetch_assoc()){
            if($mugs['qte'] == 0){
                echo '<img src=images/'.$mugs['image'].'>';
                }
        }
        }
    }
}



/*if($result = $mysqli->query($sql)){
    if ($result->num_rows > 0){
    while($mugs = $result->fetch_assoc()){
        echo $mugs['id'];

    }
    }
}*/






?>