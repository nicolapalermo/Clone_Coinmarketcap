<?php 
if (isset($_POST['sort-by'])) {
    $selectOption = $_POST['sort-by'];
    

    if ($selectOption !== "default") {
        
                
        if ($selectOption === "name-asc") {
            usort($values, function($a, $b) {  
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                }  
                return $a->name <=> $b->name;
            });
        }if ($selectOption === "name-desc") {
            usort($values, function($a, $b) {  
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                }  
                return $b->name <=> $a->name;
            });
        }elseif ($selectOption === "market-cap-asc") {
            usort($values, function($a, $b) {  
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                }                    
                return $a->quote->$valuta->market_cap <=> $b->quote->$valuta->market_cap;
            });
        }elseif ($selectOption === "market-cap-desc") {
            usort($values, function($a, $b) {  
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                }                    
                return $b->quote->$valuta->market_cap <=> $a->quote->$valuta->market_cap;
            });
        }elseif ($selectOption === "price-asc") {
            usort($values, function($a, $b) {
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                }  
                return $a->quote->$valuta->price <=> $b->quote->$valuta->price;
            });
        }elseif ($selectOption === "price-desc") {
            usort($values, function($a, $b) {
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                }  
                return $b->quote->$valuta->price <=> $a->quote->$valuta->price;
            });
        }elseif ($selectOption === "volume-asc") {
            usort($values, function($a, $b) { 
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                    $valuta = "EUR";
                }  
                return $a->quote->$valuta->volume_24h <=> $b->quote->$valuta->volume_24h;
            });
        }elseif ($selectOption === "volume-desc") {
            usort($values, function($a, $b) { 
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                    $valuta = "EUR";
                }  
                return $b->quote->$valuta->volume_24h <=> $a->quote->$valuta->volume_24h;
            });
        }elseif ($selectOption === "circulating-supply-asc") {
            usort($values, function($a, $b) {
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                } 
                return $a->circulating_supply <=> $b->circulating_supply;
            });
        }elseif ($selectOption === "circulating-supply-desc") {
            usort($values, function($a, $b) {
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                } 
                return $b->circulating_supply <=> $a->circulating_supply;
            });
        }elseif ($selectOption === "change-asc") {
            usort($values, function($a, $b) {  
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                } 
                return $a->quote->$valuta->percent_change_24h <=> $b->quote->$valuta->percent_change_24h;
            });
        }elseif ($selectOption === "change-desc") {
            usort($values, function($a, $b) {  
                if (isset($_POST['change-valuta'])) {
                    $valuta = $_POST['change-valuta'];
                }else {
                 $valuta = "EUR";
                } 
                return $b->quote->$valuta->percent_change_24h <=> $a->quote->$valuta->percent_change_24h;
            });
        }
        
    }
}

?>