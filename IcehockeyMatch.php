<?php

class IceHockeyMatch extends Game
{
  public $score = '0:0';
  public $nr_players = 12;
  public $length = 60;
  public $breaks = 45;
  public $thirds = ['0:0'];

    public function getThirdScore($third)
    {
      return $this->thirds[$third];
    }

    public function setCurrentScore($third, $score = '0:0')
    {
      if(date("Y-m-d @ H:i:s") < $this->begins_at)
      {
        $this->score = '0:0';
      }
      else
      {
        if(empty($this->thirds[$third-1]))
        {
          $this->thirds[$third-1] = $this->score;
        }
        $this->score = $score;
        $this->thirds[$third] = $score;
      }
    }

}