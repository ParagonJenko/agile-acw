<?php
namespace appointmentSystem;

use PDO;

class DB
{
    public function getInstance()
    {
        $server = 'sql.rde.hull.ac.uk';
        $connectionInfo = "rde_571875";
        try {
            $conn = new PDO("sqlsrv:Server=$server;Database=$connectionInfo;", "", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "CONNECTED";
            return $conn;
        } catch (PDOException $e) {
            $e->getMessage();
            echo "ERROR";
        }
    }

    public function findAll($table)
    {
        $conn = $this->getInstance();
        return $stmt = $conn->query("SELECT * FROM {$table}");
    }

    public function preparedQuery($query, $parameters)
    {
        $conn = $this->getInstance();
        $stmt = $conn->prepare($query);
        $stmt->execute($parameters);
        return $stmt;
    }

    public function getMaxID($table)
    {
        $conn = $this->getInstance();
        $stmt = $conn->prepare("SELECT MAX(id) AS max_id FROM {$table}");
        $stmt->execute();
        $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
        $maxId = $stmt['max_id'];
        return $maxId;
    }
}
