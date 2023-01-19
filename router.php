<?php

if (! isset($_REQUEST['loader'])) {
    die("Controller não encontrado!");
}

include_once "src/".$_REQUEST['loader'].".php";


/**
print "<pre>";
var_dump(get_included_files());
print "</pre>";
*/