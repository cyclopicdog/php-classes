<?php

class Game
{
  public $begins_at = null;
  public $score = null;
  public $nr_players = null;
  public $length = null;
  public $breaks = null;

    public function __construct($begins_at)
      {
        $this->begins_at = $begins_at;
      }

    public function setScore($score = '0:0')
    {
      $this->score = $score;  
    }

    public function getScore()
    {
      return $this->score;
    }

    public function getEstimatedEnd()
      {
        $end_time = strtotime($this->begins_at)+(($this->length+$this->breaks)*60);
        return date("Y-m-d @ H:i:s", $end_time);
      }

}