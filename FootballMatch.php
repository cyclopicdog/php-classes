<?php
require_once 'Game.php';

class FootballMatch extends Game
{
  public $nr_players = 22;
  public $length = 90;
  public $breaks = 15;
  public $halves = ['0:0', '0:0'];
  public $nt_offsides = '0';

    public function setCurrentScore($half, $score = '0:0')
    {
      if(date("Y-m-d @ H:i:s") < $this->begins_at)
      {
        $this->score = '0:0';
      }
      else
      {
        $this->score = $score;
        $this->halves[$half] = $score;
      }
    }

    public function getHalfScore($half)
    {
      return $this->halves[$half];
    }

}