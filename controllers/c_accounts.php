<?php
class accounts_controller extends base_controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function createuser()
    {

        $INTJ = array();
        $INFJ = array();
        $ISTJ = array();
        $ISFJ = array();
        $INTP = array();
        $INFP = array();
        $ISTP = array();
        $ISFP = array();
        $ENTP = array();
        $ENFP = array();
        $ESTP = array();
        $ESFP = array();
        $ENTJ = array();
        $ENFJ = array();
        $ESTJ = array();
        $ESFJ = array();

        $_POST['password'] = sha1(PASSWORD_SALT . $_POST['password']);
        $_POST['token'] = sha1(TOKEN_SALT . $_POST['username'] . Utils::generate_random_string());

        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $typology = $_POST['typology'];

        // check for duplicate username
        $q = "SELECT username 
        FROM ego_matrix 
        WHERE username = '" . $username . "'";
        $result = DB::instance(DB_NAME)->select_row($q);
        if ($result)
        {
            Router::redirect('/accounts/newuser/username');
        }
        else
        {
            if (!$username || !$password || !$gender || !$typology)
            {
                Router::redirect('/accounts/newuser/error');
            }
            else
            {
                $id = DB::instance(DB_NAME)->insert("ego_matrix", $_POST);
                Router::redirect('');
            }
        }

    }

    public function index()
    {
        $this->template->content = View::instance('v_index_index');
        $this->template->title = "Ego Matrix";
        echo $this->template;
    }

    public function newuser($error)
    {
        $this->template->content = View::instance('v_accounts_newuser');
        $this->template->title = "Create Account";
        $this->template->content->error = $error;
        echo $this->template;
    }

}
?>