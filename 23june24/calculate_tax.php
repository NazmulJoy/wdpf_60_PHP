<?php
    function calculateTax($price,$tax){
        $total= $price + $price*$tax;
        return $total;
    }
    echo calculateTax(10,0.5);

?>