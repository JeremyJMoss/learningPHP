<?php

/* --- Object Oriented Programming --- */

/*
From PHP5 onwards you can write PHP in either a procedural
or object-oriented way. OOP consists of classes that can
hold "properties" and "methods". Objects can be created
from classes.
*/


class User
{

    public function __construct($name, $email, $password)
    {
        $this->set_name($name);
        $this->set_email($email);
        $this->set_password($password);
    }
    protected $name;
    protected $email;
    protected $password;

    function set_name($name)
    {
        $this->name = $name;
    }

    function set_email($email)
    {
        $this->email = $email;
    }

    function set_password($password)
    {
        $this->password = $password;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_email()
    {
        return $this->email;
    }

    function get_password()
    {
        return $this->password;
    }
}

$user1 = new User("John", "example12@email.com", "password123");

var_dump($user1);

// inheritance is made through the extends keyword
class Employee extends User
{
    private $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->set_title($title);
    }

    function set_title($title)
    {
        $this->title = $title;
    }

    function get_title()
    {
        return $this->title;
    }
}
