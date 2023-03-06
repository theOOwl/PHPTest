<?php
class LoginUser
{
    public $Username;
    public $HashedPassword;
    private $Password;

    public function __construct($username, $password)
    {
        $this->Username = $this->correction($username);
        $this->Password = $this->correction($password);
        $this->HashedPassword =  password_hash($this->Password, PASSWORD_DEFAULT);
    }
    private function correction($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function is_user_valid()
    {
        return !empty($this->Username) && !empty($this->Password);
    }
}
