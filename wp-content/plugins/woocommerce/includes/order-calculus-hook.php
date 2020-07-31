<?php
// Custom function for calculus communication
// sku_array is and Array of product codes.
$calculusUrl = "https://localhost:3000/calculus"
$removeItemWithSKUMethod = "OduzmiArtikalWhateverNEZNAMNAZIVMETODE :D"

function updateWithSKUArray($sku_array){
    foreach($sku_array as $item){
        $client = new SoapClient($calculusUrl);
        $client.__soapCall($removeItemWithSKUMethod,array("sifArt"=>$item));
        print($item);
    }

}