<?php

function loadView($layout = null, $vars = []): void {

    $vars;
    
    if (! isset($layout)) {
        die("View não informada");
    }

    if (! include_once __DIR__."/src/views/".$layout.".php") {
        die(" View não encontrada!");
    }

}

function getTaxaNome($id_taxa = null) {

    include_once __DIR__ . "/src/Conn.php";
    
    try {
        $sql = "SELECT
                    taxas_adicionais.*
                FROM
                    FINANCEIRO.taxas_adicionais
                WHERE
                    taxas_adicionais.id_txadicional = {$id_taxa} AND
                    taxas_adicionais.ativo = 1";

        $pdo = PDOScoa::getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $error = $stmt->errorInfo();

        if(! empty($error[2]) ) {
            die($error[2]);
        }

        $row = $stmt->fetch(\PDO::FETCH_OBJ);
        return $row->taxa_adicional;

    } catch (\PDOException $th) {
        die($th->getMessage());
    }

}