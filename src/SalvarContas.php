<?php

try {    
    $file = new SplFileObject(__DIR__."/files/".$_REQUEST['interface'].".php",'w+');

    $_SESSION['matriz'][0] = "wsfall";
    /** Cria o contéudo que será escrito no arquivo **/
    $conteudo = "<?php\n/** Arquivo alterado por: ".$_SESSION['matriz'][0]." em: ".date('Y-m-d H:i:s')." **/\n\n";
    $conteudo .= "\$arr_contas = array(\n\n\n";
    
    foreach ($_REQUEST as $key => $value) 
    {        
        
        if(is_numeric($_REQUEST[$key])) {
            
            $conteudo .= '"'.$key.'" => array("e"=>array("IMP" => array("+"=>"'.$value.'", "-"=>"'.$value.'"),
                                                "EXP" => array("+"=>"'.$value.'", "-"=>"'.$value.'"),
                                            ),
                                            "n"=>array("IMP" => array("+"=>"'.$value.'", "-"=>"'.$value.'"),
                                                        "EXP" => array("+"=>"'.$value.'", "-"=>"'.$value.'"),
                                            ),
                            ),
                            ';
                      
        }

    }
    
    $conteudo .= ");";
    
    $file->fwrite($conteudo);
    
    ob_flush();
    ob_clean();
    header("Location: index.php");
    
} catch (\Throwable $e) {
    die($e->getMessage());
}