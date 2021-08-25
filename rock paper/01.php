<?php

  /*  $rock = new stdClass();
    $rock->name = "rock";
    $rock->value = 0;
    $rock->beats = 1;
    $rock->loses = 2;
    $rock->tie = 0;

    $scissors = new stdClass();
    $scissors->name = "scissors";
    $scissors->value = 1;
    $scissors->beats = 2;
    $scissors->loses = 0;
    $scissors->tie = 1;

    $paper = new stdClass();
    $paper->name = "paper";
    $paper->value = 2;
    $paper->beats = 0;
    $paper->loses = 1;
    $paper->tie = 2;
  */

$games = ["rock", "paper", "scissors"];

$choice = rand(0, 2);
$computer = $games[$choice];

$input =  readline("Enter your choice: ") . PHP_EOL;



    if ($input > $computer)
    {
        echo "User -" . " ". $input . " " . "Computer -" . " " . $computer . PHP_EOL;
        echo "User wins" . PHP_EOL;
    }elseif ($input < $computer)
    {
        echo "User -" . " ". $input . " " . "Computer -" . " " . $computer . PHP_EOL;
        echo "Computer wins" . PHP_EOL;
    }elseif ($input = $computer)
    {
        echo "Tie" . PHP_EOL;
    }






