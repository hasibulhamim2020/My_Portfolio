<?php


namespace App\classes\Controller;

use Pages;

class ActionToRouteController
{

    static public function pageValue(){
        return header("location: route.php?page=home");
    }

}