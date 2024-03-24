<?php

include "getItems.php";
function getUpdatedItemsHTML() {
    ob_start();
    getCurrentItemsLimit6(); 
    $output = ob_get_clean(); 
    return $output; 
}

echo getUpdatedItemsHTML();
?>