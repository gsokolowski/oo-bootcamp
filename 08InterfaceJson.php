<?php

/*
 *
 * Class need to cast some data to json
 *
 */

interface CastToJson {
    public function toJson();
}

class User implements CastToJson {

    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}

class Collection implements CastToJson {

    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}
