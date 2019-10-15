<?php 

if (isset($_POST['search'])) {
    require 'api-auth.php';

    $searchValue = $_POST['search'];
    $valutaSearch = $_POST['valuta-search'];

    foreach ($values as $value) {
        if (strcasecmp($value->name,$searchValue) === 0) {
            $id = $value->id;
            header("Location: details.php?id=$id&valutadett=$valutaSearch");
            exit;
        }else {
            header("Location: index.php?error=notfound");
        }
    }

}