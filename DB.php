<?php

    class Db
{
    protected $db;

    public function __construct()
    {
        $conn = require_once __DIR__ . '/conn.php';
        $dsn = $conn['driver'] . ':host=' . $conn['host'] . ';dbname=' . $conn['dbname'];
        try
        {
            $this->db = new \Pdo($dsn, $conn['username'], $conn['pass']);
        }
        catch(PDOException $e)
        {
            die ("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    public function query(string $sql, array $data=[])
    {
        $sth = $this->db->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_OBJ);
    }
}

?>