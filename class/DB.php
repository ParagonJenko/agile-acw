<?php
namespace appointmentSystem;

use PDO;
use PDOException;

class DB
{
    public function getInstance()
    {
        //$server = 'sql.rde.hull.ac.uk';
        $server = "127.0.0.1";
        $connectionInfo = "rde_571875";
        try {
            //$conn = new PDO("sqlsrv:Server=$server;Database=$connectionInfo;", "", "");
            $conn = new PDO("mysql:Server=$server;dbname=$connectionInfo;", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "CONNECTED";
            return $conn;
        } catch (PDOException $e) {

            echo "ERROR " . $e->getMessage();
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

        if($stmt){
            return $stmt;
        }
        else {
            return null;
        }
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
