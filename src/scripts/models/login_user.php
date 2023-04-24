<?php


class LoginUser
{
    public $Username;
    public $Password;

    public function __construct($username, $password)
    {
        $this->Username = $this->correction($username);
        $this->Password = $this->correction($password);
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
