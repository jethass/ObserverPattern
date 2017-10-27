<?php
require 'SplObserver.php';
require 'SplSubject.php';
require 'Observer.php';
require 'Subject.php';

$o = new Subject;
$o->attach(new Observer); 
$o->setNom('Victor'); // On modifie le nom pour voir si les classes observatrices ont bien été notifiées.
