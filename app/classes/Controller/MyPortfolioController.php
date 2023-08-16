<?php


namespace App\classes\Controller;


class MyPortfolioController extends ActionToRouteController
{
    static private function home(){
        include_once "Pages/home.php";
    }
    static private function about(){
        include_once "Pages/about.php";
    }
    static private function contact(){
        include_once "Pages/contact.php";
    }
    static private function services(){
        include_once "Pages/services.php";
    }
    static private function work(){
        include_once "Pages/work.php";
    }



    static public function router($pageName){

    include_once "Pages/Templetes/header.php";

        if ("home" == $pageName){
            self::home();
        }
        elseif ("about" == $pageName){
            self::about();
        }
        elseif ("contact" == $pageName){
            self::contact();
        }
        elseif ("services" == $pageName){
            self::services();
        }
        elseif ("work" == $pageName){
            self::work();
        }

    include_once "Pages/Templetes/footer.php";

    }

}