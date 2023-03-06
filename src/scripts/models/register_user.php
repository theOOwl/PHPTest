<?php
class RegisterUser
{
    public $Username;
    public $Password;
    public $ConfirmPassword;
    public $FirstName;
    public $LastName;

    public function __construct($username, $password, $confirm_password, $first_name, $last_name)
    {
        $this->Username = $this->correction($username);
        $this->Password = $this->correction($password);
        $this->ConfirmPassword = $this->correction($confirm_password);
        $this->FirstName = $this->correction($first_name);
        $this->LastName = $this->correction($last_name);
    }
    private function correction($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function confirm_password()
    {
        return $this->Password == $this->ConfirmPassword;
    }
    public function valid_username()
    {
        return ctype_alnum($this->Username);
    }
}
