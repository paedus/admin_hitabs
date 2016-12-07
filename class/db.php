<?php
class Database
{
    private $host = "hitabs.cgg4ujlph5qt.us-east-1.rds.amazonaws.com";
    private $db_name = "hitabs_v2";
    private $username = "kolyatev_devhita";
    private $password = "AKi8n#yJPA-g";
    public $conn;

    public function dbConnection()
    {

        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";charset=utf8;dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}


class oldDatabase
{
    private $host = "hitabs.cgg4ujlph5qt.us-east-1.rds.amazonaws.com";
    private $db_name = "kolyatev_devhitabs";
    private $username = "kolyatev_devhita";
    private $password = "AKi8n#yJPA-g";
    public $conn;

    public function dbConnection()
    {

        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
