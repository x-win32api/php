<?php


use App\Config\Config;

class Db
{
      protected $dbh;

      public function __construct()
     {
         $config = Config::getInstance();

        if($this->dbh === null){
            $this->dbh = new PDO('mysql:host=' . $config->data['db']['host'] .';dbname=' . $config->data['db']['dbname'] . '', $config->data['db']['user'], '');
        }
    }


    public function query(string $sql, $class, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute(string $sql, array $params) 
    {
        $sth = $this->dbh->prepare($sql); 
        return $sth->execute($params);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }


}






?>