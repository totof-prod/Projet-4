<?php
require('../controller/frontend.php');

try {

}
catch(Exception $e) { // si je bug j'affiche
    echo 'Erreur : ' . $e->getMessage();
}