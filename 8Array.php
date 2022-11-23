<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["luffy", "D", "Monkey"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Ace";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "sabo";
var_dump($names);

var_dump(count($names));

$luffy = array(
    "id" => "luffy",
    "name" => "Eko D",
    "age" => 30,
    "address" => array(
        "city" => "Blitar",
        "country" => "Indonesia"
    )
);
var_dump($luffy);

var_dump($luffy["name"]);
var_dump($luffy["address"]["country"]);

$Ace = [
    "id" => "Ace",
    "name" => "Ace protagas",
    "age" => 35,
    "address" => [
        "city" => "Blitar",
        "country" => "Indonesia"
    ]
];
var_dump($Ace);