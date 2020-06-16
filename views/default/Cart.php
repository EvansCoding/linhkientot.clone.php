<?php

$item = [
    'id' => $data[0]['ID'],
    'name' => $data[0]['NAME'],
    'image' => $data[0]['IMAGE'],
    'price' => $data[0]['DISCOUNT'],
    'quantity' => 1
];

if(isset($_SESSION['cart'][$data[0]['ID']])){
    $_SESSION['cart'][$data[0]['ID']]['quantity'] +=1;
}else{
    $_SESSION['cart'][$data[0]['ID']] = $item;
}


echo "<pre>";
print_r($_SESSION['cart']);
?>