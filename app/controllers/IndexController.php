<?php
namespace App\controllers;

class IndexController {
    public function index() {
        echo 'Controler: IndexController - Acao:index()';
    }   
}

$dados = array('dado1', 'dado2', 'dado3', 'dado4');
require_once "../app/views/index.phtml";
?>
