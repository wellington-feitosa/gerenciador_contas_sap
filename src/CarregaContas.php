<?php

try {
    $file = new SplFileInfo("files/".$_REQUEST['interface'].".php");
    echo $file->getFileInfo();

    include_once "src/files/".$_REQUEST['interface'].".php";
    
} catch (\Throwable $e) {
    die($e->getMessage());
}

print "<pre>";
var_dump(get_included_files());
print_r($arr_contas);
print "</pre>";