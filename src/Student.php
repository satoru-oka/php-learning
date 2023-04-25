<?php
namespace App;

use Acme\Test;
use PDOException;
use PDO;

class Student
{
    public function __construct(Record $record, Test $test)
    {
        try{
            $db = new PDO('mysqsl:host=localhost;dbname=store', 'store', 'secret');
        }catch (PDOException $ex){
            var_dump($ex->getMessage());
        }
        var_dump('from inside App namespace');
    }
}