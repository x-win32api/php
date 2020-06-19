<?php


class Db 
{
      protected $dbh;

      public function __construct()
     {
        $config = require_once(__DIR__.'/config.php');

        if($this->dbh === null){
          $this->dbh = new \PDO('mysql:host=' . $config['db']['host'] .';dbname=' . $config['db']['dbname'] . '', $config['db']['user'], '');
        }
    }

    /**
     *  Запрос с возвращаемыми данными
     * @param string $sql
     * @param - sql запрос
     * @param array $params
     * @return array
     */
    public function query(string $sql, $class, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     *  Запрос с возвращаемым bool значением
     * @param string $sql
     * @param array $params
     * @return bool
     */
    public function execute(string $sql, array $params) 
    {
        $sth = $this->dbh->prepare($sql); 
        return $sth->execute($params);
    }


}






?>