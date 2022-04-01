<?php


final class DB extends PDO
{

    private const DBHOST = '';
    private const DBUSER = '';
    private const DBPASS = '';
    private const DBNAME = '';

    public function __construct()
    {
    }

    public function queryDB($str) : void
    {
        try{
            $dsn = 'mysql:host='. self::DBHOST . ';dbname=' . self::DBNAME;
            $pdo = new PDO($dsn,self::DBUSER,self::DBPASS);

            $pdo->exec('SET CHARACTER SET utf8');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $info = $pdo->query($str);
            $info->setFetchMode(PDO::FETCH_OBJ);
            return $info;

        }catch(PDOException $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function execDB($str) : void
    {
        try{
            $dsn = 'mysql:host='. self::DBHOST . ';dbname=' . self::DBNAME;
            $pdo = new PDO($dsn,self::DBUSER,self::DBPASS);

            $pdo->exec('SET CHARACTER SET utf8');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pdo->exec($str);

        }catch(PDOException $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
}
