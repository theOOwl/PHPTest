<?php
class DbUser
{
    public $Id;
    public $Username;
    public $FirstName;
    public $LastName;

    public function __construct($id, $username, $firstName, $lastName)
    {
        $this->Id = $id;
        $this->Username = $username;
        $this->FirstName = $firstName;
        $this->LastName = $lastName;
    }
}
