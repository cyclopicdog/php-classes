<?php
require_once 'User.php';
require_once 'Game.php';
require_once 'FootballMatch.php';
require_once 'IcehockeyMatch.php';

$steve = new User('Stephen','Steve');
$bob = new User('Robert','Bob');

$steve->dump();
$bob->dump();

$todays_football_match = new FootballMatch("15:00");
var_dump($todays_football_match);
var_dump($todays_football_match->getEstimatedEnd());

$todays_hockey_match = new IceHockeyMatch("14:00");
var_dump($todays_hockey_match);
$todays_hockey_match->setCurrentScore(1, '1:1');
var_dump($todays_hockey_match->getScore());
$todays_hockey_match->setCurrentScore(3, '3:1');
var_dump($todays_hockey_match->getScore());
var_dump($todays_hockey_match->getThirdScore(2));
var_dump($todays_hockey_match);


include 'document.php';