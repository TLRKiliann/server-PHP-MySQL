<?php
namespace Blogcon\Links\Model;
class Manager
{
    protected function dbConnect()
    {
        # $user = '';
        # $mdp = '';
        $db = new \PDO('mysql:host=localhost;dbname=blogmvc;charset=utf8', '', '');
        return $db;
    }
}