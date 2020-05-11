<?php

class Put extends Ai
{
    public $file;

    public function saveInFile($map)
    {
        file_put_contents('array.txt', $this->$map);
        return $this;
    }
}