<?php

class Users extends DbTable
{
    public $Id;
    public $Username;
    public $Firstname;
    public $Infix;
    public $Surname;
    public $Email;
    public $Password;

    public function __construct(Array $properties=array()){
        parent::__construct($properties);
    }
}