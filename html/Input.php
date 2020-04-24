<?php
class Input
{
    protected $text;
    protected $type;

    public function __construct()
    {
        $this->text = '';
        return $this;
    }
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
    public function html()
    {
        return "<input type = '$this->type' $this->text>";
    }
}