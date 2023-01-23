<?php

//Includes obrigatórios
include __DIR__.'/bootstrap.php';

if (! isset($_REQUEST['loader'])) {
    die("Controller não encontrado!");
}

include_once __DIR__."/src/".$_REQUEST['loader'].".php";