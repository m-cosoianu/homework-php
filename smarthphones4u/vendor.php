<?php
class Vendor
{
    public $id;
    public $name;
    public $picture;
    public $description;

    public function __construct()
    {
        settype( this->id, 'integer');
    }
}
?>