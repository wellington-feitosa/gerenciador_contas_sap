<?php

function loadView($layout = null, $vars = []): void {

    $vars;
    
    if (! isset($layout)) {
        die("View não informada");
    }

    if (! include_once "src/views/".$layout.".php") {
        die(" View não encontrada!");
    }

}