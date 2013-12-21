<?php

class content_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() 
	{
		parent::__construct();
	} 

	public function profile()
	{
		$this->template->content = View::instance('v_content_profile');
        $this->template->title = "Profile";
        echo $this->template;
	}

	public function community()
	{

        $q = "SELECT * FROM users";


        $community = DB::instance(DB_NAME)->select_rows($q);		
		$this->template->content = View::instance('v_content_community');
		$this->template->content->community = $community;
        $this->template->title = "Community";
        echo $this->template;
	}		
	
}
