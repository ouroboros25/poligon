<?php

namespace RefactoringGuru\AbstractFactory\Conceptual;

switch ("$_SERVER[REQUEST_URI]"){
    case '/factory':
        include 'patterns/factory.php';
        break;
    case '/abstract_factory':
        include 'patterns/abstract_factory.php';
        break;
    default:
        include 'menu/menu.php';
}