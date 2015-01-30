<?php
namespace SimpleQuiz\Utils\Base;

class Config 
{
    static $dbhost = 'localhost';
    static $dbname = 'simple-quiz';
    static $dbuser = 'root';
    static $dbpassword = '';
    static $requireauth = true;//change to false if no auth required for quizzes
    //only used if requireauth == false
    static $defaultUser = 'default';
}