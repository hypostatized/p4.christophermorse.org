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
        $this->template->content->error = $error;
        echo $this->template;
	}	
	
}
