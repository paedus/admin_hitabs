<?php
class OPTIONS
{	

	private $conn;
	protected $_errors = array();
    
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

    public function menus() {
        $menu = array(
            'users' => 'Users',
            'backup' => 'Backup',
            'social-links' => 'Social links',
            'automated-emails' => array(
                'name' => 'Automated emails',
                'submenus' => array(
                    array('page' => 'registration', 'name' => 'Registration'),
                    array('page' => 'forgot-password', 'name' => 'Forgot password'),
                    array('page' => 'verification', 'name' => 'Verification'),
                    array('page' => 'group-tab-change', 'name' => 'Group tab change'),
                    array('page' => 'suggest-link', 'name' => 'Suggest link'),
                    array('page' => 'invite-to-tab', 'name' => 'Invite to tab'),
                )
            ),
            'scheduled-emails' => array(
                'name' => 'Scheduled emails',
                'submenus' => array(
                    array('page' => 'create-the-1st-tab', 'name' => 'Create the 1st tab'),
                    array('page' => 'import-bookmarks', 'name' => 'Import bookmarks'),
                    array('page' => 'share-and-collaborate-with-team', 'name' => 'Share with team'),
                )
            )
        );
        return $menu;
    }
    
    public function site_url(){
        return 'http://'.$_SERVER['HTTP_HOST'];
    }

    public function folder(){
        $return = $this -> request();
        return $return[0];
    }
    public function file(){
        $return = $this -> request();
        return $return[1];
    }

    public function request(){
        $or_uri = ltrim($this->get(), "/");
        $uri = explode("/", $or_uri);
        return $uri;
    }

    public function get(){
        $uri = parse_url($this->site_url . $_SERVER["REQUEST_URI"]);
        return $uri['path'];
    }

}
?>