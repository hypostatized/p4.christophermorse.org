<?php
class accounts_controller extends base_controller {

	public function __construct()
    {
        parent::__construct();    
    }

    public function index()
    {
        $this->template->content = View::instance('v_index_index');
        $this->template->title = "Ego Matrix";
        echo $this->template;
    }

    public function info()
    {
        $this->template->content = View::instance('v_accounts_info');
        $this->template->title = "Ego Matrix";
        echo $this->template;
    }

    public function login($error)
    {
        $this->template->content = View::instance('v_accounts_login');
        $this->template->title = "Login";
        $this->template->content->error = $error;
        echo $this->template;
    }

    public function login_go()
    {
        // sanitize user entry
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        // hash password to compare with token
        $_POST['password'] = sha1(PASSWORD_SALT . $_POST['password']);

        // search database for user, set a browser cookie
        $q = "SELECT token 
        FROM users
        WHERE username = '" . $_POST['username'] . "' 
        AND password = '" . $_POST['password'] . "'";
        $token = DB::instance(DB_NAME)->select_field($q);
        if (!$token)
        {
            Router::redirect("/accounts/login/error");
        }
        else
        {
            setcookie("token", $token, strtotime('+1 year') , '/');
            Router::redirect("/content/profile");
        }
    }

    public function logout() 
    {
        $new_token = sha1(TOKEN_SALT . $this->user->username . Utils::generate_random_string());
        $data = Array("token" => $new_token);
        DB::instance(DB_NAME)->update("users", $data, "WHERE username = '" . $this->user->username . "'");
        setcookie("token", "", strtotime('-1 year') , '/');
        Router::redirect("/");
    }        

    public function newuser($error)
    {
        $this->template->content = View::instance('v_accounts_newuser');
        $this->template->title = "Create Account";
        $this->template->content->error = $error;
        $this->template->content->username = $username;
        echo $this->template;
    }

    public function newuser_go()
    {

        // get cognitive functions associated with the
        // personality type the new user submitted
        $typology = $_POST['typology'];

        // match type with cognitive functions
        $cognitive = array
            (

                array("INTJ","Ni","Te","Fi","Se"),
                array("INFJ","Ni","Fe","Ti","Se"),
                array("ISTJ","Si","Te","Fi","Ne"),
                array("ISFJ","Si","Fe","Ti","Ne"),
                array("INTP","Ti","Ne","Si","Fe"),
                array("INFP","Fi","Ne","Si","Te"),
                array("ISTP","Ti","Se","Ni","Fe"),
                array("ISFP","Fi","Se","Ni","Te"),
                array("ENTP","Ne","Ti","Fe","Si"),
                array("ENFP","Ne","Fi","Te","Si"),
                array("ESTP","Se","Ti","Fe","Ni"),
                array("ESFP","Se","Fi","Te","Ni"),
                array("ENTJ","Te","Ni","Se","Fi"),
                array("ENFJ","Fe","Ni","Se","Ti"),
                array("ESTJ","Te","Si","Ne","Fi"),
                array("ESFJ","Fe","Si","Ne","Ti"),
            );

        // iterate through cognitive array to calculate
        // appropriate cognitive functions
        for ($row = 0; $row < 16; $row++)
        {
            if ($typology == $cognitive[$row][0])
            {
                $_POST['dominant'] = $cognitive[$row][1];
                $_POST['auxiliary'] = $cognitive[$row][2];
                $_POST['tertiary'] = $cognitive[$row][3];
                $_POST['inferior'] = $cognitive[$row][4];
            }
        }        

        $_POST['password'] = sha1(PASSWORD_SALT . $_POST['password']);
        $_POST['token'] = sha1(TOKEN_SALT . $_POST['username'] . Utils::generate_random_string());

        // variables to test for form errors
        $username = $_POST['username'];
        $password = $_POST['password'];

        // check for duplicate username
        $q = "SELECT username 
        FROM users
        WHERE username = '" . $username . "'";
        $result = DB::instance(DB_NAME)->select_row($q);
        if ($result)
        {
            Router::redirect('/accounts/newuser/username');
        }
        else
        {
            if (!$username || !$password || !$typology || strlen($password) < 3)
            {
                Router::redirect('/accounts/newuser/error');
            }
            else
            {
                $id = DB::instance(DB_NAME)->insert("users", $_POST);
                Router::redirect('/index');
            }
        }

    }


}
?>