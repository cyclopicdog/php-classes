<?php

class User
{

public $id = 0;
public $username = null;
public $name = null;
public $password = null;
public $number_of_posts = 0;
public $created_at = null;
public static $id_tracker = 0;

  private function setId()
  {
    Static::$id_tracker++;
  }
  public function __construct($name, $username) 
  {
    $this->name = $name;
    $this->username = $username;
    $this->setId();
    $this->id = static::$id_tracker;
    $this->created_at = date('Y-m-d-H:i:s');
  }
  
  public function __destroy()
  {
    echo $this->user . ' has left the building...';
  }

  public function dump()
  {
    var_dump($this);
  }
}