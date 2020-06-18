<?php

namespace Classes\Db;

class Db 
{
      protected $db;

      public function __construct()
     {
        # кофиг с настройками подключения
         require(__DIR__.'/../config.php');

        if($this->db === null){
          $this->db = new \PDO('mysql:host='. $host .';dbname='. $dbname .'', ''. $user .'', ''. $password .'');
        }
    }

    /**
    *  Запрос с возвращаемыми данными
    * @param - sql запрос
    * @param - array - массив подстановок подготовленного запроса 
    * @return обьект класса
    */
    public function query(string $sql, array $params = []) 
    {
        $sth = $this->db->prepare($sql);
        $sth->execute($params);
        return $sth;
    }
    /**
    *  Запрос с возвращаемым bool значением
    * @param - sql запрос
    * @param - array - массив подстановок подготовленного запроса 
    * @return bool
    */
    public function execute(string $sql, array $params) 
    {
        $sth = $this->db->prepare($sql); 
        return $sth->execute($params);
    }


}






?>