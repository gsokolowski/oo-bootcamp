<?php
/**
 * Created by PhpStorm.
 * User: gregor.sokolowski
 * Date: 13/10/2016
 * Time: 14:54
 */

interface Repository {
    public function save($data);
}

class MongoRepository implements Repository {

    public $data;

    public function save($data)
    {
        // save data to Mongo DB
        var_dump('save data to Mongo DB ',$data );
    }
}

class FileRepository implements Repository {
 
    public $data;

    public function save($data)
    {
        // save data to FileRepository
         var_dump('save data to FileRepository ',$data );
    }
}

$data = array (
    'name'=>'Joe',
    'surname'=>'Doe',
);


$repo = new MongoRepository();
$repo->save($data);

// $repo = new FileRepository();
// $repo->save($data);