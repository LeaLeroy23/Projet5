<?php

class Database 
{

    //Nos constantes
    const DB_HOST = 'mysql:host=localhost;dbname=mydb;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    public function getConnection()
    {
        try{
            $connection = new PDO(Database::DB_HOST, Database::DB_USER, Database::DB_PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connection;
        }
        //On lève une erreur si la connexion échoue
        catch(Exception $errorConnection)
        {
            die ('Erreur de connection :'.$errorConnection->getMessage());
        }
    }
}