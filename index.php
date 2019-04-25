<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

require 'controllers/front.php';

if(!isset($_GET['action'])) {
    home();
} elseif ($_GET['action'] === 'detailsArticle') {
    getPost($_GET['id']);

}



