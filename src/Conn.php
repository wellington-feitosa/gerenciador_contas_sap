<?php
class PDOScoa 
{
    public static function getConnection(): \PDO {

        $dsn = 'mysql:dbname=FINANCEIRO;host=allinkscoa.com.br';
        $user = 'newalluser';
        $password = 'proucroadro7';

        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    }
}