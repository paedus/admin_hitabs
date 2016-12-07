<?php
class USER
{	

	private $conn;
	protected $_errors = array();
    
	public function __construct()
	{
		//$database = new Database();
		//$db = $database->dbConnection();
		//$this->conn = $db;
    }

    public function addError($name, $value) {
        $this->_errors[$name] = $value;
    }
    
    public function getError($name) {
        return isset($this->_errors[$name]) ? $this->_errors[$name] : '';
    }
    
	public function do_login()
	{
		$p = $_POST;
        if($p['username'] == "admin" && $p['password'] == "hiTabs2016!"){
            $_SESSION['user_session'] = true;
        }else{
            $this->addError("wrong-user","Wrong user.");
        }
	}
    
	public function is_login()
	{
		if($_SESSION['user_session']){
		  return true;
		}
	}
    
	public function do_logout()
	{
		$_SESSION['user_session'] = false;
	}
}
?>