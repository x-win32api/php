<?php


class Db
{
    protected PDO $dbh;

    public function __construct()
    {
        $config = require_once(__DIR__ . '/config.php');

        $this->dbh = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'] . '', $config['db']['user'], '');
    }

    public function query(string $sql, $class, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute(string $sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }


}


?>
