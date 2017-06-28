<?php


class user
{
    var $email;
    var $password;

    public function __construct($email,$password)
    {
        $this->email=$email;
        $this->password=$password;
    }

    function getLogin()
    {
        return $this->email;
    }

    function getPass()
    {
        return $this->password;
    }

}
