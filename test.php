<?php

require_once __DIR__ . '/SessionInterface.php';
require_once __DIR__ . '/Session.php';


$session = new Session(600);

// first way to assign. set method
$session->set('email', 'wsantana@mt4.com');

// second way to assign. magic method
$session->name = 'Wanderlei Santana';

// get assign data
echo $session->get('email');
echo "<hr>";
echo $session->name;


$session->destroy();
