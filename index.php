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
</head>
<body>    
    <form action="router.php" method="post">
        <input type="hidden" name="loader" id="loader" value="CarregaContas" />
        <div class="principal">
            <p class="titulo">Gerenciador de Contas Contábeis SAP</p>
            <div class="container_elemento">
                <label class="label">Interface</label>
                <select id='interface' name='interface'>
                    <option value="pagamento_fi_exp">Pagamento FI Exportação</option>
                    <option value="pagamento_fi_imp">Pagamento FI Importação</option>                    
                </select>
            </div>
            <div class="botoes">
                <label class="label">&nbsp;</label>
                <input type="submit" id="editar" value="Editar" />
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