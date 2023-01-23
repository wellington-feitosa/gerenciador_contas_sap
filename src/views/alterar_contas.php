<?php
foreach ($vars['contas'] as $id_taxa => $contas) {

    if(! is_numeric($id_taxa) || $id_taxa <= 0) {
        $nomeTaxa = "OUTRAS TAXAS";
    } else {
        $nomeTaxa = getTaxaNome($id_taxa);
    }   
    
    $vars['contas'][$id_taxa]['nome_taxa'] = $nomeTaxa;

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Scoa</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Scoa Sistema de controle Allink" />
    <meta name="author" content="Allink Transportes Internacionais Ltda" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="robots" content="noarchive" />
    <link href="https://allinkscoa.com.br/Estilos/scoa.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script src="/public/js/alterar_contas.js" ></script>
</head>
<body>    
    <form action="router.php" method="post">
        <input type="hidden" name="loader" id="loader" value="SalvarContas" />
        <input type="hidden" name="interface" id="interface" value="<?=$vars['interface'];?>" />
        <div class="principal">
            <p class="titulo">Gerenciador de Contas Contábeis SAP</p>
                        
                <?php foreach($vars['contas'] as $id_taxa => $contas): ?>
                    <div class="container_elemento">    
                        <label class="label"><?=$contas['nome_taxa'];?></label>                        
                        <input type="text" name="<?= $id_taxa;?>" value="<?=$contas["n"]["IMP"]["-"];?>" />
                    </div>
                <?php endforeach; ?>
            
            <div class="botoes">
                <label class="label">&nbsp;</label>
                <input type="submit" id="salvar" value="Salvar" />
                <input type="button" id="voltar" value="Voltar" />                
            </div>
        </div>
    </form>
</body>
<p>
    <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" />
    <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="CSS válido!" />
</p>
</body>
</html>

<?php
// print "<pre>";
// var_dump($vars);
// print "</pre>";
?>