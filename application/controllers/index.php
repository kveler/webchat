<?php

/**
 * Default Controller of the EmmaPHP MVC Framework
 */
class IndexController extends EmmaController
{

    public $user;

    public function index ()
    {

        var_dump ($_SESSION);

        $this->user = Session::get ("user");

	   	$this->page ();

    }
    
    public function page ($page = "welcome")
    {
            
    	Loader::view ("templates/header.php");
    	Loader::view ("pages/" . $page . ".php");
    	Loader::view ("templates/footer.php");
        
    }

}