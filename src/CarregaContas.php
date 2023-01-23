<?php

try {
    $file = new SplFileInfo("files/".$_REQUEST['interface'].".php");
    echo $file->getFileInfo();

    include_once "src/files/".$_REQUEST['interface'].".php";

    $data['contas'] = $arr_contas;
    $data['interface'] = $_REQUEST['interface']; 
    
    loadView("alterar_contas",$data);
    
} catch (\Throwable $e) {
    die($e->getMessage());
}