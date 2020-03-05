<?php

require_once __DIR__ . '/SessionInterface.php';
require_once __DIR__ . '/Session.php';


$session = new Session(600);


$session->set('email', 'wsantana@mt4.com');
$session->name = 'Wanderlei Santana';

echo $session->get('email');
echo "<hr>";
echo $session->name;


$session->destroy();
