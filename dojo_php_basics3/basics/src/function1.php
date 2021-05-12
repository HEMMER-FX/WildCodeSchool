<?php 
function sayHello(string $name = "Dr.Manhattan"):string
{
    return "Hello".$name;
}

$watchmen = [
    'Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'
];
var_dump($watchmen);

function whoAmi(string $name, array $watchmen)
{
    return (in_array($name,$watchmen))? $name." est un watchmen":null;
}